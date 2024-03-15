<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Vendor;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{
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
    	return view('website.products.index');
    }

    public function productDetail()
    {
    	return view('website.products.detail');
    }
}
