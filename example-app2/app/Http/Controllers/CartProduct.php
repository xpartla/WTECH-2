<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    protected $fillable = ['cart_id', 'product_id', 'item_size', 'item_color'];

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function getCountAttribute()
    {
        return $this->cart->cartProducts->where('product_id', $this->product_id)->count();
    }
}
