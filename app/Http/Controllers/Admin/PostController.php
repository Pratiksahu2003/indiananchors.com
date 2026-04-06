<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with('category')->latest();

        if ($request->search) {
            $query->where('title', 'like', "%{$request->search}%");
        }

        $posts = $query->paginate(10)->withQueryString();

        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts,slug',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'featured_image' => 'nullable|image|max:2048',
            'youtube_url' => 'nullable|url',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'status' => 'required|in:draft,published,scheduled',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        $validated['published_at'] = $validated['status'] === 'published' ? now() : null;

        $post = Post::create($validated);

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully!');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'featured_image' => 'nullable|image|max:2048',
            'youtube_url' => 'nullable|url',
            'meta_title' => 'nullable|max:255',
            'meta_description' => 'nullable',
            'status' => 'required|in:draft,published,scheduled',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        if ($request->hasFile('featured_image')) {
            // Delete old image if exists
            if ($post->featured_image) {
                Storage::disk('public')->delete($post->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('posts', 'public');
        }

        if ($validated['status'] === 'published' && !$post->published_at) {
            $validated['published_at'] = now();
        }

        $post->update($validated);

        if ($request->tags) {
            $post->tags()->sync($request->tags);
        } else {
            $post->tags()->detach();
        }

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully!');
    }

    public function destroy(Post $post)
    {
        if ($post->featured_image) {
            Storage::disk('public')->delete($post->featured_image);
        }
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted!');
    }
}
