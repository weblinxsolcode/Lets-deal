<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
        $request->validate([
            'email' => 'required|unique:users,email',
            'name' => 'required',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Session::put('user_id', $user->id);

        return redirect()->route('website.user-dashboard.index')->with('success', 'Account has been created.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if ($user) {
            if (Hash::check($password, $user->password)) {
                Session::put('user_id', $user->id);

                return redirect()->route('website.user-dashboard.index')->with('login successfully.');
            } else {
                return redirect()->back()->with('error', 'Password does not match!');
            }
        } else {
            return redirect()->back()->with('error', 'Email does not exist!');
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

    	return view('website.products.index', compact('products'));
    }

    public function productDetail($id)
    {
        $title = 'Product Details';
        $product = Product::with('vendor', 'category', 'images')->find($id);

    	return view('website.products.detail', compact('product'));
    }

    // User Dashboard
    public function userDashboard()
    {
        $title = 'User Dashboard';

        return view('website.user-dashboard');
    }

    // Cart
    public function cartIndex()
    {
        $title = 'Cart';

        return view('website.cart');
    }

    public function cartAddProduct($id)
    {
        $product = Product::find($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "title" => $product->title,
                "quantity" => 1,
                "price" => $product->discount_price,
                "image" => $product->main_image
            ];
        }

        session()->put('cart', $cart);

        return response(['status' => 1, 'message' => 'Product has been added in cart.']);
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
        $title = 'Checkout';

        if (empty(session('cart'))) {
            return redirect()->route('website.cart.index')->with('error', 'Your cart is empty!');
        }

        return view('website.checkout', compact('title'));
    }

    public function checkoutStore(Request $request)
    {
        if (empty(session('user_id'))) {
            return redirect()->route('website.checkout.index')->with('error', 'Please login to continue.');
        }

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
            'order_notes' => 'required',
        ]);

        $data = ([
            'user_id' => session('user_id'),
            'order_no' => rand(10000000, 99999999),
            'total_price' => $request->total_price,
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
        ]);

        $order = Order::create($data);

        if (session('cart')) {
            foreach (session('cart') as $key => $product) {
                $product = Product::find($key);

                OrderDetail::create([
                    'vendor_id' => $product->vendor_id,
                    'order_id' => $order->id,
                    'product_name' => $product->title,
                    'product_price' => $product->price,
                    'product_quantity' => $product->quantity,
                ]);
            }
        }

        session()->forget('cart');

        return redirect()->route('website.user-dashboard.index')->with('success', 'Order has been placed successfully.');
    }
}
