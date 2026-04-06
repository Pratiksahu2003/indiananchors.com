<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('posts')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'slug' => 'required|unique:categories,slug',
        ]);
        Category::create($request->all());
        return back()->with('success', 'Category added!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category removed!');
    }
}
