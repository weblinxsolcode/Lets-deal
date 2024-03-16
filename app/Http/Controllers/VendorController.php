<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use Illuminate\Support\Str;

class VendorController extends Controller
{
    // AUTHENTICATION
    public function login()
    {
    	$title = 'Login';

    	return view('vendor.login', compact('title'));
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $vendor = Vendor::where('email', $email)->where('status', 1)->first();

        if ($vendor) {
            if (Hash::check($password, $vendor->password)) {
                Session::put('vendor_id', $vendor->id);

                return redirect()->route('vendor.dashboard');
            } else {
                return redirect()->back()->with('error', 'Password does not match!');
            }
        } else {
            return redirect()->back()->with('error', 'Email does not exist!');
        }
    }

    public function logout(Request $request)
    {
        session()->forget('vendor_id');

        return redirect()->route('vendor.login')->with('success', 'Logged out successfully.');
    }

    // DASHBOARD
    public function index()
    {
    	$title = 'Dashboard';

    	return view('vendor.index', compact('title'));
    }

    // ORDERS
    public function orderIndex()
    {
    	$title = 'Orders';

    	return view('vendor.orders.index', compact('title'));
    }

    // PRODUCTS
    public function productIndex()
    {
    	$title = 'Products';
        $products = Product::where('vendor_id', session('vendor_id'))->with('category', 'images')->latest()->get();

        // echo "<pre>";
        // print_r($products->toArray());
        // echo "</pre>";
        // die();

    	return view('vendor.products.index', compact('title', 'products'));
    }

    public function productCreate()
    {
    	$title = 'Product Create';
        $categories = Category::all();

    	return view('vendor.products.create', compact('title', 'categories'));
    }

    public function productStore(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:products,title,NULL,id,vendor_id,' . session('vendor_id'),
            'category_id' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'product_url' => 'required',
            'quantity' => 'required',
            'product_description' => 'required',
            'product_information' => 'required',
            'terms_of_use' => 'required',
            'more_about_the_product' => 'required',
            'main_image' => 'required',
            'additional_images' => 'required|array|max:3',
            'additional_images.*' => 'image',
        ]);

        $data = $request->except([
            '_token',
            'Method',
            'main_image',
            'additional_images',
        ]);

        $data['vendor_id'] = session('vendor_id');
        $data['sku'] = implode('', array_map(fn() => mt_rand(0, 9), range(1, 8)));

        // Main Image Uploading
        $main_image = Str::random(16).'.'.$request->main_image->extension();
        $request->main_image->move(public_path('images'), $main_image);
        $data['main_image'] = $main_image;

        $product = Product::create($data);

        if ($request->has('additional_images') && is_array($request->additional_images)) {
            foreach ($request->additional_images as $uploadedImage) {
                // Additional Image Uploading
                $imageName = Str::random(16).'.'.$uploadedImage->getClientOriginalExtension();
                $uploadedImage->move(public_path('images'), $imageName);

                ProductImage::create([
                    'image' => $imageName,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('vendor.product.index')->with('success', 'Product has been created successfully.');
    }

    public function productUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:products,title,' . $id . ',id,vendor_id,' . session('vendor_id'),
            'category_id' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'product_url' => 'required',
            'quantity' => 'required',
            'product_description' => 'required',
            'product_information' => 'required',
            'terms_of_use' => 'required',
            'more_about_the_product' => 'required',
            'main_image' => 'required',
            'additional_images' => 'required|array|max:3',
            'additional_images.*' => 'image',
        ]);

        $data = $request->except([
            '_token',
            'Method',
            'main_image',
            'additional_images',
        ]);

        $product = Product::find($id);

        if ($request->main_image) {

            $imagePath = public_path('images') . '/' . $product->main_image;

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Main Image Uploading
            $main_image = Str::random(16).'.'.$request->main_image->extension();
            $request->main_image->move(public_path('images'), $main_image);
            $data['main_image'] = $main_image;
        }

        $product->update($data);

        if ($request->has('additional_images') && is_array($request->additional_images)) {

            $request->validate([
                'additional_images' => 'required|array|max:3',
                'additional_images.*' => 'image',
            ]);

            $additional_images = ProductImage::where('product_id', $id)->get();

            foreach ($additional_images as $value) {
                // Unlink & delete old images
                $imagePath = public_path('images') . '/' . $value->image;

                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }

                $value->delete();
            }

            foreach ($request->additional_images as $uploadedImage) {
                // Additional Image Uploading
                $imageName = Str::random(16).'.'.$uploadedImage->getClientOriginalExtension();
                $uploadedImage->move(public_path('images'), $imageName);

                ProductImage::create([
                    'image' => $imageName,
                    'product_id' => $product->id,
                ]);
            }
        }

        return redirect()->route('vendor.product.index')->with('success', 'Product has been updated successfully.');
    }

    public function productEdit()
    {
    	$title = 'Product Edit';

    	return view('vendor.products.edit', compact('title'));
    }

    public function productDetail($id)
    {
    	$title = 'Product Detail';
        $product = Product::with('category', 'images')->find($id);

    	return view('vendor.products.detail', compact('title', 'product'));
    }

    // SETTINGS
    public function settingEdit()
    {
    	$title = 'Settings';

    	return view('vendor.settings-edit', compact('title'));
    }
}
