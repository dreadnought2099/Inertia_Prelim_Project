<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index(Category $category=null)
    {
        $products = $category ? $category->products()->paginate(10) : Products::paginate(10);

        $categories = Category::orderBy('name')->get();

        return inertia('Products/Index', [
            'products' => $products,
            'categories' => $categories,
            'selectedCategory' => $category,
        ]);
    }


}


