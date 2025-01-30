<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;

    protected $fillable =   ['name', 'description', 'category_id', 'wholesale_price', 'retail_price'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
