<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'slug' => 'nullable|unique:categories,slug',
        ]);

        $data = $request->all();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        Category::create($data);
        return back()->with('success', 'Category added to the Journal Index!');
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
            'slug' => 'required|unique:categories,slug,' . $category->id,
        ]);
        
        $category->update($request->all());
        return back()->with('success', 'Journal category updated successfully!');
    }

    public function destroy(Category $category)
    {
        if ($category->posts()->count() > 0) {
            return back()->withErrors(['error' => 'Cannot remove category containing active stories.']);
        }
        
        $category->delete();
        return back()->with('success', 'Category removed from the Journal ecosystem.');
    }
}
