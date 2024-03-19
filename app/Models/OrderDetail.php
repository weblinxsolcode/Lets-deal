<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'order_id',
        'product_name',
        'product_price',
        'product_quantity',
    ];
}