<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $model = Product::class;

    protected $table = 'products';

    protected $fillable = [
        'productTitle',
        'productText',
        'productNo',
        'productsDate',
        'price',
        'discount',
        'images',
        'category_id'
    ];

    // Tell laravel to fetch image values and set then as array
    protected $cats = [
        'images' => 'array',
    ];

    /**
     * Get the category for the product.
     */
    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
