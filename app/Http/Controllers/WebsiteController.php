<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Vendor;
use App\Models\Product;
use App\Models\User;
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

    // My Account
    public function userDashboard()
    {
        $title = 'User Dashboard';

        return view('website.user-dashboard');
    }
}
