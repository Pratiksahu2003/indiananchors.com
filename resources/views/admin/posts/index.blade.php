@extends('layouts.admin')

@section('title', 'All Posts')
@section('page_title', 'Blog Posts')

@section('content')
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
        <div class="flex-1 w-full max-w-lg relative group">
            <form action="{{ route('admin.posts.index') }}" method="GET">
                <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 transition-colors group-focus-within:text-indigo-500"></i>
                <input type="text" name="search" value="{{ request('search') }}" 
                    placeholder="Search posts..." 
                    class="w-full pl-12 pr-4 py-3 bg-white border border-slate-200 rounded-xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-500 shadow-sm transition-all focus:outline-none">
            </form>
        </div>

        <a href="{{ route('admin.posts.create') }}" class="w-full md:w-auto inline-flex items-center justify-center gap-2 px-6 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg hover:bg-indigo-700 hover:-translate-y-0.5 active:translate-y-0 transition-all">
            <i class="fas fa-plus"></i> Create New Post
        </a>
    </div>

    <!-- Blog Posts Table -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50/50 border-b border-slate-100 text-slate-500 text-sm font-bold">
                        <th class="px-8 py-5">Post Details</th>
                        <th class="px-8 py-5">Category</th>
                        <th class="px-8 py-5">Status</th>
                        <th class="px-8 py-5">Date</th>
                        <th class="px-8 py-5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($posts as $post)
                        <tr class="hover:bg-slate-50 transition-colors group">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-4">
                                    <div class="w-14 h-14 rounded-lg bg-slate-100 flex-shrink-0 relative overflow-hidden border border-slate-200">
                                        @if($post->featured_image)
                                            <img src="{{ Storage::url($post->featured_image) }}" class="w-full h-full object-cover">
                                        @else
                                            <div class="w-full h-full flex items-center justify-center text-slate-400">
                                                <i class="fas fa-image text-xl"></i>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900 line-clamp-1 mb-1">{{ $post->title }}</p>
                                        <p class="text-xs text-slate-400 flex items-center gap-1.5">
                                            <i class="fas fa-link text-[10px]"></i> {{ Str::limit($post->slug, 40) }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5">
                                <span class="px-3 py-1 rounded-full bg-indigo-50 text-[11px] font-bold text-indigo-600 uppercase tracking-tight">
                                    {{ $post->category->name ?? 'Uncategorized' }}
                                </span>
                            </td>
                            <td class="px-8 py-5">
                                @if($post->status === 'published')
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-[11px] font-bold text-emerald-700">
                                        <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></div> Published
                                    </span>
                                @elseif($post->status === 'draft')
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-[11px] font-bold text-amber-700">
                                        DRAFT
                                    </span>
                                @else
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-50 text-[11px] font-bold text-slate-600 italic">
                                        SCHEDULED
                                    </span>
                                @endif
                            </td>
                            <td class="px-8 py-5 text-sm text-slate-500 whitespace-nowrap">
                                <span class="block font-medium">{{ $post->created_at->format('M d, Y') }}</span>
                                <span class="text-xs text-slate-400">{{ $post->created_at->format('H:i A') }}</span>
                            </td>
                            <td class="px-8 py-5 text-right whitespace-nowrap">
                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                    <a href="{{ route('admin.posts.edit', $post) }}" class="w-9 h-9 flex items-center justify-center rounded-lg bg-indigo-50 text-indigo-600 hover:bg-indigo-600 hover:text-white transition-all shadow-sm" title="Edit Post">
                                        <i class="fas fa-edit text-sm"></i>
                                    </a>
                                    <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Archive this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-9 h-9 flex items-center justify-center rounded-lg bg-rose-50 text-rose-600 hover:bg-rose-600 hover:text-white transition-all shadow-sm" title="Delete Post">
                                            <i class="fas fa-trash-alt text-sm"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-24 text-center">
                                <div class="flex flex-col items-center gap-4 text-slate-300">
                                    <i class="fas fa-search text-6xl"></i>
                                    <p class="text-slate-500 font-medium italic">No posts match your criteria.</p>
                                    <a href="{{ route('admin.posts.create') }}" class="text-indigo-600 hover:underline font-bold">Write your first post →</a>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($posts->hasPages())
            <div class="px-8 py-5 border-t border-slate-100 bg-slate-50/20">
                {{ $posts->links() }}
            </div>
        @endif
    </div>
@endsection
