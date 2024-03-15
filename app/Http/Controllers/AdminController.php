<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Vendor;
use App\Mail\VendorAccountApprove;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
    	$title = 'Login';

    	return view('admin.login', compact('title'));
    }

    public function loginCheck()
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

    public function index()
    {
    	$title = 'Dashboard';

    	return view('admin.index', compact('title'));
    }

    public function productIndex()
    {
    	$title = 'Products';

    	return view('admin.products.index', compact('title'));
    }

    public function productCreate()
    {
    	$title = 'Product Create';

    	return view('admin.products.create', compact('title'));
    }

    public function productEdit()
    {
    	$title = 'Product Edit';

    	return view('admin.products.edit', compact('title'));
    }

    public function productDetail()
    {
    	$title = 'Product Detail';

    	return view('admin.products.detail', compact('title'));
    }

    public function settingEdit()
    {
    	$title = 'Settings';

    	return view('admin.settings-edit', compact('title'));
    }

    public function vendorIndex()
    {
    	$title = 'Vendors';
        $vendors = Vendor::latest()->get();

    	return view('admin.vendors.index', compact('title', 'vendors'));
    }

    public function vendorDetail($id)
    {
    	$title = 'Vendor Detail';
        $vendor = Vendor::find($id);

    	return view('admin.vendors.detail', compact('title', 'vendor'));
    }

    public function vendorApprove($id)
    {
        $vendor = Vendor::find($id);

        $newPassword = Str::random(8);
        $password = Hash::make($newPassword);

        $data = ([
            'password' => $password,
            'status' => 1,
        ]);

        $vendor->update($data);

        try {
            Mail::to($vendor->email)->send(new VendorAccountApprove($vendor, $newPassword));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error sending email. Please try again.');
        }

        Vendor::find($id)->update(['status' => 1]);

        return redirect()->back()->with('success', 'Vendor has been approved, and login credentials have been sent to their email.');
    }
}
