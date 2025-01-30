<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
use Inertia\Inertia;

class ProductsController extends Controller
{
    public function index(Request $request)
{
    // Get the selected category ID from the query string
    $categoryId = $request->query('category');

    // If a category is selected, filter products by category, otherwise fetch all products
    if ($categoryId) {
        $products = Products::where('category_id', $categoryId)->get();
    } else {
        // Fetch all products when no category is selected
        $products = Products::all();
    }

    // Fetch all categories to show in the filter dropdown
    $categories = Category::orderBy('name')->get();

    // Return the products and categories to the Inertia page
    return inertia('Products/Index', [
        'products' => $products,
        'categories' => $categories,
    ]);
}


    public function show(Product $product)
    {
        return inertia('Products/Show', [
            'product' => $product->load('category'),
        ]);
    }

}


