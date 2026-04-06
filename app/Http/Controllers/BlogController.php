<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->with(['category', 'tags'])
            ->latest()
            ->paginate(12);

        $categories = Category::all();
        $tags = Tag::all();

        return view('blog.index', compact('posts', 'categories', 'tags'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->with(['category', 'tags'])
            ->published()
            ->firstOrFail();

        $relatedPosts = Post::where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->published()
            ->take(3)
            ->get();

        return view('blog.show', compact('post', 'relatedPosts'));
    }

    public function category(Category $category)
    {
        $posts = $category->posts()
            ->published()
            ->with(['category', 'tags'])
            ->latest()
            ->paginate(12);

        return view('blog.index', compact('posts', 'category'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->posts()
            ->published()
            ->with(['category', 'tags'])
            ->latest()
            ->paginate(12);

        return view('blog.index', compact('posts', 'tag'));
    }
}
