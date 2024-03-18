<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Vendor;
use App\Mail\VendorAccountApprove;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Category;

class AdminController extends Controller
{
    // AUTHENTICATION
    public function login()
    {
        if (session('admin_id')) {
            return redirect()->back();
        }

    	$title = 'Login';

    	return view('admin.login', compact('title'));
    }

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        $admin = Admin::where('email', $email)->first();

        if ($admin) {
            if (Hash::check($password, $admin->password)) {
                Session::put('admin_id', $admin->id);

                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->back()->with('error', 'Password does not match!');
            }
        } else {
            return redirect()->back()->with('error', 'Email does not exist!');
        }
    }

    public function logout()
    {
        session()->forget('admin_id');

        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }

    // DASHBOARD
    public function index()
    {
    	$title = 'Dashboard';

    	return view('admin.index', compact('title'));
    }

    // SETTINGS
    public function settingEdit()
    {
    	$title = 'Settings';

    	return view('admin.settings-edit', compact('title'));
    }

    // VENDORS
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

    // CATEGORIES
    public function categoryIndex()
    {
        $title = 'Categories';
        $categories = Category::latest()->get();

        return view('admin.categories.index', compact('title', 'categories'));
    }

    public function categoryStore(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:categories,title',
        ]);

        Category::create(['title' => $request->title]);

        return redirect()->back()->with('success', 'Category has been created successfully.');
    }

    public function categoryUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:categories,title,' . $id,
            'status' => 'required'
        ]);

        Category::find($id)->update(['title' => $request->title, 'status' => $request->status]);

        return redirect()->back()->with('success', 'Category has been updated successfully.');
    }

    public function categoryDelete($id)
    {
        Category::find($id)->delete();

        return redirect()->back()->with('success', 'Category has been deleted successfully.');
    }
}
