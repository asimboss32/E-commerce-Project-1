<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subCategory ()
    {
        return $this->hasMany(subCategory::class, 'cate_id', 'id');
    }

    // public function product()
    // {
    //     return $this->hasMany(Product::class, 'cat_id', 'id');
    // }
}


// Category <=> Product

// Category  Product


// belongsTo
// hasMany