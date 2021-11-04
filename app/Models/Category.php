<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category'];

    /**
     * Get the product that owns the category.
     */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
