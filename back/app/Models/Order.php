<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'discount',
        'quantity',
        'amount',
        'status',
    ];

    public function User() {
        return $this->belongTo(User::class, 'user_id', 'id');
    }

    public function Product() {
        return $this->belongTo(Product::class, 'product_id', 'id');
    }
}
