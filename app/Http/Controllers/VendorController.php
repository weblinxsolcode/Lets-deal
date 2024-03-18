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

    	return view('vendor.products.index', compact('title', 'products'));
    }

    public function productCreate()
    {
    	$title = 'Product Create';
        $categories = Category::where('status', 1)->get();

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

    public function productEdit($id)
    {
        $title = 'Product Edit';
        $product = Product::find($id);
        $categories = Category::where('status', 1)->orWhere('id', $product->category_id)->get();

        return view('vendor.products.edit', compact('title', 'categories', 'product'));
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

    public function productDetail($id)
    {
    	$title = 'Product Detail';
        $product = Product::with('vendor', 'category', 'images')->find($id);

    	return view('vendor.products.detail', compact('title', 'product'));
    }

    public function productDelete($id)
    {
        $product = Product::find($id);

        if ($product) {
            // Unlink main image
            $imagePath = public_path('images') . '/' . $product->main_image;

            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Unlink additional images
            $additional_images = ProductImage::where('product_id', $id)->get();

            if (count($additional_images) > 0) {
                foreach ($additional_images as $value) {
                    // Unlink old images
                    $imagePath = public_path('images') . '/' . $value->image;

                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }

            // Delete product
            $product->delete();
        }

        return redirect()->back()->with('success', 'Product has been deleted successfully.');
    }

    // SETTINGS
    public function settingEdit()
    {
    	$title = 'Settings';
        $data = Vendor::find(session('vendor_id'));

    	return view('vendor.settings-edit', compact('title', 'data'));
    }

    public function settingUpdateProfile(Request $request, $id)
    {
        $vendor = Vendor::find($id);

        if ($request->type == 'update_profile') {
            $request->validate([
                'name' => 'required'
            ]);

            $vendor->update([
                'contact_person' => $request->name,
            ]);

            if ($request->password) {
                $request->validate([
                    'password' => 'min:8'
                ]);

                $vendor->update([
                    'password' => Hash::make($request->password),
                ]);
            }

            if ($request->profile_image) {
                $request->validate([
                    'profile_image' => 'image'
                ]);

                // Profile Image Uploading
                $profile_image = Str::random(16).'.'.$request->profile_image->extension();
                $request->profile_image->move(public_path('images'), $profile_image);
                $data['profile_image'] = $profile_image;

                $vendor->update([
                    'profile_image' => $profile_image,
                ]);
            }

            return redirect()->back()->with('success', 'Profile has been updated successfully.');
        } else {
            $request->validate([
                'facebook_link' => 'required_without_all:twitter_link,instagram_link,linkedin_link',
                'twitter_link' => 'required_without_all:facebook_link,instagram_link,linkedin_link',
                'instagram_link' => 'required_without_all:facebook_link,twitter_link,linkedin_link',
                'linkedin_link' => 'required_without_all:facebook_link,twitter_link,instagram_link',
            ], [
                'facebook_link.required_without_all' => 'At least one social link is required.',
                'twitter_link.required_without_all' => 'At least one social link is required.',
                'instagram_link.required_without_all' => 'At least one social link is required.',
                'linkedin_link.required_without_all' => 'At least one social link is required.',
            ]);

            $vendor->update([
                'facebook_link' => $request->facebook_link,
                'twitter_link' => $request->twitter_link,
                'instagram_link' => $request->instagram_link,
                'linkedin_link' => $request->linkedin_link,
            ]);

            return redirect()->back()->with('success', 'Social links has been updated successfully.');
        }
    }
}
