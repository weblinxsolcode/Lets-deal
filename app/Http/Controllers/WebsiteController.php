<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users,email',
            'name' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return response(['status' => 0, 'errors' => $validator->errors()]);
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            Session::put('user_id', $user->id);

            return response(['status' => 1]);
        } catch(\Exception $e) {
            return response(['status' => 0, 'error' => 'Oops! Some thing went wrong. PLease try again later.']);
        }
    }

    public function login(Request $request)
    {
        $messages = [
            'email.exists' => 'The email you entered does not exist in our records.',
        ];

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return response(['status' => 0, 'errors' => $validator->errors()]);
        }

        try {
            $email = $request->email;
            $password = $request->password;

            $user = User::where('email', $email)->first();

            if (Hash::check($password, $user->password)) {
                Session::put('user_id', $user->id);

                return response(['status' => 1]);
            } else {
                return response()->json(['status' => 0, 'error' => 'Incorrect password. Please try again.']);
            }
        } catch(\Exception $e) {
            return response(['status' => 0, 'error' => 'Oops! Some thing went wrong. PLease try again later.']);
        }
    }

    public function logout()
    {
        session()->forget('user_id');

        return redirect()->route('website.index')->with('success', 'Logged out successfully.');
    }

    public function index()
    {
    	return view('website.index');
    }

    public function becomePartnerCreate()
    {
    	return view('website.become-partner');
    }

    public function becomePartnerStore(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'company_logo' => 'required|image',
            'contact_person' => 'required',
            'organization_number' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'area' => 'required',
            'street_address' => 'required',
            'zip_code' => 'required',
            'location' => 'required',
            'is_hold_tax_form' => 'required',
            'is_tried_this_concept_before' => 'required',
            'which_product_you_want_to_market' => 'required',
            'what_your_comany_do' => 'required',
            'website_url' => 'required',
        ]);

        $data = $request->except([
            '_token',
            'Method',
            'company_logo',
        ]);

        $company_logo = Str::random(16).'.'.$request->company_logo->extension();
        $request->company_logo->move(public_path('images'), $company_logo);
        $data['company_logo'] = $company_logo;

        Vendor::create($data);

        return redirect()->back()->with('success', 'Partner application has been submitted.');
    }

    public function productIndex()
    {
        $title = 'Products';
        $products = Product::latest()->get();

    	return view('website.products.index', compact('products', 'title'));
    }

    public function productDetail($id)
    {
        $title = 'Product Details';
        $product = Product::with('vendor', 'category', 'images')->find($id);

    	return view('website.products.detail', compact('product', 'title'));
    }

    // User Dashboard
    public function userDashboard()
    {
        $title = 'Dashboard';

        return view('website.user.dashboard', compact('title'));
    }

    public function userOrderIndex()
    {
        $title = 'Orders';
        $orders = Order::where('user_id', session('user_id'))->latest()->get();

        return view('website.user.orders.index', compact('title', 'orders'));
    }

    public function userOrderDetail($id)
    {
        $title = 'Order Details';
        $order = Order::where('user_id', session('user_id'))->with('orderDetail')->find($id);

        return view('website.user.orders.detail', compact('title', 'order'));
    }

    // Cart
    public function cartIndex()
    {
        $title = 'Cart';

        return view('website.cart', compact('title'));
    }

    public function cartAddProduct($id)
    {
        $product = Product::find($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "vendor_id" => $product->vendor_id,
                "title" => $product->title,
                "quantity" => 1,
                "price" => $product->discount_price,
                "image" => $product->main_image
            ];
        }

        session()->put('cart', $cart);

        return response([
            'status' => 1,
            'message' => 'Product has been added in cart.',
        ]);
    }

    public function cartUpdateQuantity(Request $request)
    {
        $productId = $request->input('product_id');
        $newQuantity = $request->input('quantity');

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $newQuantity;
            session()->put('cart', $cart);

            return response()->json(['status' => 1]);
        } else {
            return response()->json(['status' => 0]);
        }
    }

    public function removeCartProduct(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }

        return redirect()->back()->with('success', 'Product has been removed from cart.');
    }

    // Checkout
    public function checkoutIndex()
    {
        if (empty(session('user_id'))) {
            return redirect()->back()->with('error', 'Please sign-in to continue.');
        }

        if (empty(session('cart'))) {
            return redirect()->route('website.cart.index')->with('error', 'Your cart is empty!');
        }

        $title = 'Checkout';

        return view('website.checkout', compact('title'));
    }

    public function checkoutStore(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'street_address' => 'required',
            'zip' => 'required',
        ]);

        // Total price & vendor id of every vendor (unique)
        $cart = session('cart');
        $unique_vendor_totals = [];

        foreach ($cart as $item) {
            $vendor_id = $item['vendor_id'];
            $unique_vendor_totals[$vendor_id] = ($unique_vendor_totals[$vendor_id] ?? 0) + ($item['price'] * $item['quantity']);
        }

        $unique_vendor = array_unique(array_column($cart, 'vendor_id'));

        // Store multiple orders
        foreach ($unique_vendor as $value) {
            $data = ([
                'user_id' => session('user_id'),
                'order_no' => rand(10000000, 99999999),
                'total_price' => $unique_vendor_totals[$value],
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'email' => $request->email,
                'country' => $request->country,
                'state' => $request->state,
                'city' => $request->city,
                'street_address' => $request->street_address,
                'zip' => $request->zip,
                'order_notes' => $request->order_notes,
                'vendor_id' => $value,
            ]);

            $order = Order::create($data);

            // Store order multiple items
            foreach (session("cart") as $item) {
                if ($item['vendor_id'] == $value) {
                    OrderDetail::create([
                        'order_id' => $order->id,
                        'product_name' => $item['title'],
                        'product_price' => $item['price'],
                        'product_quantity' => $item['quantity'],
                    ]);
                }
            }
        }

        session()->forget('cart');

        return redirect()->route('website.user-order.index')->with('success', 'Order has been placed successfully.');
    }
}
