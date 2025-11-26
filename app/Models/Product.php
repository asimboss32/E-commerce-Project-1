<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(category::class, 'cate_id', 'id');
    }

    public function subCategory()
    {
        return $this->belongsTo(subCategory::class, 'sub_cate_id', 'id');
    }

    public function color()
    {
        return $this->hasMany(color::class, 'product_id', 'id');
    }

    public function size()
    {
        return $this->hasMany(size::class, 'product_id', 'id');
    }

    public function galleryImage()
    {
        return $this->hasMany(galleryImage::class, 'product_id', 'id');
    }

    public function review()
    {
        return $this->hasMany(review::class, 'product_id', 'id');
    }

    // public function cart ()
    // {
    //     return $this->hasMany(Cart::class, 'product_id', 'id');
    // }

    // public function orderDetails ()
    // {
    //     return $this->hasMany(OrderDetails::class, 'product_id', 'id');
    // }
}


// Product <=> Review

// Product hasMany Review


// belongsTo
// hasMany