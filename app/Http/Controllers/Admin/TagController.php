<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $query = Tag::withCount('posts');
        
        if ($request->search) {
            $query->where('name', 'like', "%{$request->search}%");
        }

        $tags = $query->get();
        return view('admin.tags.index', compact('tags'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:tags,name',
            'slug' => 'nullable|unique:tags,slug',
        ]);

        $data = $request->all();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        Tag::create($data);
        return back()->with('success', 'New theme added successfully!');
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tags,name,' . $tag->id,
            'slug' => 'required|unique:tags,slug,' . $tag->id,
        ]);
        
        $tag->update($request->all());
        return back()->with('success', 'Journal theme updated!');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back()->with('success', 'Journal theme removed!');
    }
}
