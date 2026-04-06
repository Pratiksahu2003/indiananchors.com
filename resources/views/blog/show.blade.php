@extends('layouts.app')

@section('title', $post->meta_title ?? $post->title)

@section('seo')
    <meta name="description" content="{{ $post->meta_description ?? Str::limit(strip_tags($post->content), 160) }}">
    <meta property="og:title" content="{{ $post->meta_title ?? $post->title }}">
    <meta property="og:description" content="{{ $post->meta_description ?? Str::limit(strip_tags($post->content), 160) }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    @if($post->featured_image)
        <meta property="og:image" content="{{ Storage::url($post->featured_image) }}">
    @endif
@endsection

@section('content')
    <article class="bg-white pb-32">
        <!-- Header Section -->
        <header class="relative pt-32 pb-20 overflow-hidden bg-slate-900 border-b border-indigo-900/20">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-950/80 to-slate-900 z-0"></div>
            @if($post->featured_image)
                <img src="{{ Storage::url($post->featured_image) }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover opacity-10 mix-blend-overlay blur-lg">
            @endif

            <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
                <div class="flex items-center justify-center gap-4 mb-10 text-sm font-bold text-indigo-400 uppercase tracking-widest animate-fade-in">
                    <a href="{{ route('blog.category', $post->category->slug ?? '#') }}" class="hover:text-white transition-colors border-b border-indigo-500/30 pb-0.5">
                        {{ $post->category->name ?? 'Update Required' }}
                    </a>
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-700"></span>
                    <span class="text-slate-400">{{ $post->published_at->format('M d, Y') }}</span>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-black text-white leading-[1.1] mb-12 tracking-tight">
                    {{ $post->title }}
                </h1>
                
                <div class="flex flex-wrap items-center justify-center gap-3">
                    @foreach($post->tags as $tag)
                        <a href="{{ route('blog.tag', $tag->slug) }}" class="px-5 py-2 rounded-xl bg-white/5 border border-white/10 text-white/60 hover:bg-white hover:text-slate-900 font-bold text-[10px] uppercase tracking-widest transition-all backdrop-blur-lg">
                            #{{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </header>

        <!-- Post Content Grid -->
        <div class="max-w-7xl mx-auto px-6 mt-20 grid grid-cols-1 lg:grid-cols-12 gap-20">
            <!-- Main Content Left (8 cols) -->
            <div class="lg:col-span-8">
                <!-- YouTube Highlight -->
                @if($post->youtube_url)
                    <div class="mb-16 aspect-video rounded-3xl overflow-hidden shadow-2xl shadow-indigo-900/10 border border-slate-100 p-2 bg-white">
                        <iframe class="w-full h-full rounded-2xl" 
                                src="https://www.youtube.com/embed/{{ preg_replace('/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/', '$2', $post->youtube_url) }}" 
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endif

                <!-- Rich Text Content -->
                <div class="prose prose-slate max-w-none blog-content">
                    {!! $post->content !!}
                </div>

                <!-- Shared Section -->
                <div class="mt-24 p-12 bg-slate-50 rounded-3xl border border-slate-100 flex flex-col items-center justify-center text-center">
                    <h4 class="text-2xl font-bold mb-4">Did you enjoy this article?</h4>
                    <p class="text-slate-500 mb-8 max-w-md">Join our newsletter to receive the latest updates, tips, and stories directly in your inbox every week.</p>
                    <div class="flex flex-col sm:flex-row gap-3 w-full max-w-lg">
                        <input type="email" placeholder="Enter your email address" class="flex-1 px-6 py-4 rounded-2xl border border-slate-200 outline-none focus:ring-4 focus:ring-indigo-100 transition-all font-medium">
                        <button class="px-8 py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all">Subscribe</button>
                    </div>
                </div>
            </div>

            <!-- Sidebar (4 cols) -->
            <aside class="lg:col-span-4 space-y-12">
                <!-- Related Posts Widget -->
                <div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm sticky top-32">
                    <h3 class="text-xl font-bold mb-8 flex items-center gap-3">
                        <span class="w-8 h-1.5 bg-indigo-500 rounded-full"></span> Read More
                    </h3>
                    <div class="space-y-8">
                        @forelse($relatedPosts ?? [] as $rp)
                            <a href="{{ route('blog.show', $rp->slug) }}" class="group block">
                                <div class="flex gap-4">
                                    <div class="w-20 h-20 rounded-2xl overflow-hidden bg-slate-100 flex-shrink-0 group-hover:scale-95 transition-transform">
                                        @if($rp->featured_image)
                                            <img src="{{ Storage::url($rp->featured_image) }}" class="w-full h-full object-cover">
                                        @endif
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="font-bold text-slate-900 group-hover:text-indigo-600 line-clamp-2 leading-snug mb-2 transition-colors">{{ $rp->title }}</h4>
                                        <div class="text-[10px] font-black uppercase tracking-widest text-slate-400">{{ $rp->published_at->format('M d') }}</div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-slate-400 italic text-sm">No related articles found.</p>
                        @endforelse
                    </div>

                    <hr class="my-10 border-slate-100">

                    <!-- Social Icons -->
                    <div class="text-center">
                        <p class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-6">Share Story</p>
                        <div class="flex items-center justify-center gap-4">
                            <a href="#" class="w-12 h-12 rounded-full bg-slate-50 text-slate-600 flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all shadow-sm"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="w-12 h-12 rounded-full bg-slate-50 text-slate-600 flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all shadow-sm"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="w-12 h-12 rounded-full bg-slate-50 text-slate-600 flex items-center justify-center hover:bg-indigo-600 hover:text-white transition-all shadow-sm"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </article>
@endsection
