<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'posts_count' => Post::count(),
            'categories_count' => Category::count(),
            'tags_count' => Tag::count(),
            'published_posts' => Post::published()->count(),
            'recent_posts' => Post::with('category')->latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
