@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Analytics Overview')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Stat Card: Total Posts -->
        <div class="glass-card p-6 rounded-2xl flex items-center justify-between border-l-4 border-l-indigo-600 shadow-sm transition-transform hover:-translate-y-1">
            <div>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1">Total Posts</p>
                <h3 class="text-3xl font-bold text-slate-900">{{ $stats['posts_count'] }}</h3>
            </div>
            <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-indigo-600 shadow-sm border border-indigo-100">
                <i class="fas fa-file-alt text-xl"></i>
            </div>
        </div>

        <!-- Stat Card: Categories -->
        <div class="glass-card p-6 rounded-2xl flex items-center justify-between border-l-4 border-l-emerald-600 shadow-sm transition-transform hover:-translate-y-1">
            <div>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1">Categories</p>
                <h3 class="text-3xl font-bold text-slate-900">{{ $stats['categories_count'] }}</h3>
            </div>
            <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 shadow-sm border border-emerald-100">
                <i class="fas fa-folder text-xl"></i>
            </div>
        </div>

        <!-- Stat Card: Published Posts -->
        <div class="glass-card p-6 rounded-2xl flex items-center justify-between border-l-4 border-l-amber-600 shadow-sm transition-transform hover:-translate-y-1">
            <div>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1">Published</p>
                <h3 class="text-3xl font-bold text-slate-900">{{ $stats['published_posts'] }}</h3>
            </div>
            <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-600 shadow-sm border border-amber-100">
                <i class="fas fa-globe text-xl"></i>
            </div>
        </div>

        <!-- Stat Card: Tags -->
        <div class="glass-card p-6 rounded-2xl flex items-center justify-between border-l-4 border-l-rose-600 shadow-sm transition-transform hover:-translate-y-1">
            <div>
                <p class="text-xs font-semibold text-slate-500 uppercase tracking-widest mb-1">Tags</p>
                <h3 class="text-3xl font-bold text-slate-900">{{ $stats['tags_count'] }}</h3>
            </div>
            <div class="w-12 h-12 bg-rose-50 rounded-xl flex items-center justify-center text-rose-600 shadow-sm border border-rose-100">
                <i class="fas fa-tags text-xl"></i>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                <i class="fas fa-history text-indigo-500"></i> Recent Posts
            </h2>
            <a href="{{ route('admin.posts.index') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 flex items-center gap-1 group">
                View All <i class="fas fa-arrow-right text-xs transition-transform group-hover:translate-x-1"></i>
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b border-slate-100 text-slate-500 text-sm font-semibold">
                        <th class="pb-4">Title</th>
                        <th class="pb-4">Category</th>
                        <th class="pb-4">Status</th>
                        <th class="pb-4">Date Created</th>
                        <th class="pb-4 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($stats['recent_posts'] as $post)
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="py-4">
                                <span class="font-medium text-slate-800">{{ $post->title }}</span>
                            </td>
                            <td class="py-4">
                                <span class="px-3 py-1 rounded-full bg-slate-100 text-xs font-semibold text-slate-600 uppercase tracking-tighter">
                                    {{ $post->category->name ?? 'Uncategorized' }}
                                </span>
                            </td>
                            <td class="py-4">
                                @if($post->status === 'published')
                                    <span class="px-3 py-1 rounded-full bg-emerald-100 text-xs font-semibold text-emerald-700">Published</span>
                                @else
                                    <span class="px-3 py-1 rounded-full bg-amber-100 text-xs font-semibold text-amber-700 uppercase">Draft</span>
                                @endif
                            </td>
                            <td class="py-4 text-sm text-slate-500">
                                {{ $post->created_at->diffForHumans() }}
                            </td>
                            <td class="py-4 text-right">
                                <a href="{{ route('admin.posts.edit', $post) }}" class="text-indigo-600 hover:text-indigo-800 p-2 rounded-lg hover:bg-indigo-50 transition-colors">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-12 text-center text-slate-400 italic">No posts found. Start by creating one!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
