@extends('layouts.main')

@section('title', 'Explore Our Blog - IndianAnchors')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-slate-900 py-32 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/60 to-slate-900 z-0"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 -left-48 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-black text-white mb-6 uppercase tracking-tighter">
                Discover <span class="text-indigo-400">Greatness.</span>
            </h1>
            <p class="text-xl text-slate-300 max-w-2xl mx-auto mb-12 leading-relaxed">
                Insights, stories, and the latest trends from our community. Curated by experts, tailored for you.
            </p>
            
            <!-- Category Chips -->
            <div class="flex flex-wrap items-center justify-center gap-3">
                @foreach($categories ?? [] as $cat)
                    <a href="{{ route('blog.category', $cat->slug) }}" 
                       class="px-6 py-2.5 rounded-full border border-white/10 bg-white/5 text-white/80 hover:bg-white hover:text-slate-900 transition-all font-bold text-sm backdrop-blur-lg">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Post Grid Section -->
    <section class="py-24 max-w-7xl mx-auto px-6">
        @if(isset($category))
            <h2 class="text-3xl font-bold mb-12 flex items-center gap-4">
                <span class="text-slate-400">Browsing category:</span>
                <span class="px-5 py-2 bg-indigo-50 text-indigo-700 rounded-2xl border border-indigo-100 uppercase tracking-tighter text-2xl font-black">{{ $category->name }}</span>
            </h2>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @forelse($posts as $post)
                <article class="group bg-white rounded-3xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:shadow-indigo-900/5 transition-all duration-500 flex flex-col h-full hover:-translate-y-2">
                    <a href="{{ route('blog.show', $post->slug) }}" class="block relative aspect-[16/10] overflow-hidden">
                        @if($post->featured_image)
                            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-slate-100 flex items-center justify-center text-slate-300">
                                <i class="fas fa-image text-4xl"></i>
                            </div>
                        @endif
                        <div class="absolute top-4 left-4">
                            <span class="px-4 py-1.5 bg-white/90 backdrop-blur-md rounded-full text-[10px] font-black uppercase tracking-widest text-slate-900 shadow-sm border border-black/5">
                                {{ $post->category->name ?? 'Uncategorized' }}
                            </span>
                        </div>
                    </a>

                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex items-center gap-3 text-xs font-bold text-slate-400 mb-4 uppercase tracking-widest">
                            <span>{{ $post->published_at->format('M d, Y') }}</span>
                            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                            <span>{{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-4 leading-snug group-hover:text-indigo-600 transition-colors">
                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                        </h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8 line-clamp-3">
                            {{ Str::limit(strip_tags($post->content), 120) }}
                        </p>
                        
                        <div class="mt-auto pt-6 border-t border-slate-50 flex items-center justify-between">
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-black text-slate-900 flex items-center gap-2 group/btn">
                                READ STORY
                                <i class="fas fa-arrow-right text-[10px] transition-transform group-hover/btn:translate-x-1 underline-offset-4 group-hover/btn:text-indigo-600"></i>
                            </a>
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full bg-indigo-100 border-2 border-white flex items-center justify-center text-[10px] font-bold text-indigo-700">IA</div>
                            </div>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full py-24 text-center">
                    <p class="text-2xl font-bold text-slate-400 italic">No posts found in this collection.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-20 flex justify-center">
            {{ $posts->links() }}
        </div>
    </section>
@endsection
