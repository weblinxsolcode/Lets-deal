<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_id',
        'user_id',
        'order_no',
        'first_name',
        'last_name',
        'phone',
        'email',
        'country',
        'city',
        'state',
        'zip',
        'street_address',
        'total_price',
        'order_notes',
        'status',
    ];

    public function orderDetail() {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }
}
