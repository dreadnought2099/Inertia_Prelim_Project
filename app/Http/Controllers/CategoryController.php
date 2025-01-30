<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name')->get();

        return inertia('Categories/Index', [
            'categories' => $categories,
        ]);
    }

    public function show(Category $category)
    {
        return inertia('Categories/Show', [
            'category' => $category->load('products'),
        ]);
    }
}

