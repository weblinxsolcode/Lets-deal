<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_logo',
        'contact_person',
        'organization_number',
        'email',
        'telephone',
        'area',
        'street_address',
        'zip_code',
        'location',
        'is_hold_tax_form',
        'is_tried_this_concept_before',
        'which_product_you_want_to_market',
        'what_your_comany_do',
        'website_url',
        'password',
        'status',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'linkedin_link',
        'profile_image',
    ];
}
