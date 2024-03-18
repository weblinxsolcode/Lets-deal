<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'category_id',
        'title',
        'sku',
        'price',
        'discount_price',
        'main_image',
        'product_url',
        'quantity',
        'product_description',
        'product_information',
        'terms_of_use',
        'more_about_the_product',
        'status',
        'is_approved',
    ];

    public function images() {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function vendor() {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }
}
