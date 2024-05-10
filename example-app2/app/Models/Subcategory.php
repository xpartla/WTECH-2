<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_subcategory');
    }
}
