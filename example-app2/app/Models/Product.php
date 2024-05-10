<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'image', 'price'];

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_color');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'product_brand');
    }

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class, 'product_subcategory');
    }
}
