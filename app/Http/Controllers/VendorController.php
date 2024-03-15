<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Vendor;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
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

    public function index()
    {
    	$title = 'Dashboard';

        // dd(session("vendor_id"));

    	return view('vendor.index', compact('title'));
    }

    public function orderIndex()
    {
    	$title = 'Orders';

    	return view('vendor.orders.index', compact('title'));
    }

    public function productIndex()
    {
    	$title = 'Products';

    	return view('vendor.products.index', compact('title'));
    }

    public function productCreate()
    {
    	$title = 'Product Create';

    	return view('vendor.products.create', compact('title'));
    }

    public function productEdit()
    {
    	$title = 'Product Edit';

    	return view('vendor.products.edit', compact('title'));
    }

    public function productDetail()
    {
    	$title = 'Product Detail';

    	return view('vendor.products.detail', compact('title'));
    }

    public function categoryIndex()
    {
    	$title = 'Categories';

    	return view('vendor.categories.index', compact('title'));
    }

    public function settingEdit()
    {
    	$title = 'Settings';

    	return view('vendor.settings-edit', compact('title'));
    }
}
