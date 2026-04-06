@extends('layouts.main')

@section('title', ($post->meta_title ?? $post->title) . ' - IndianAnchors')

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
    <article class="bg-white min-h-screen">
        <!-- Cinematic Post Hero -->
        <header class="relative min-h-[60vh] flex items-center justify-center pt-32 pb-24 overflow-hidden bg-slate-950">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent z-10"></div>
            
            <!-- Dynamic Background Image -->
            @if($post->featured_image)
                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-luminosity scale-110 blur-[2px]">
            @else
                <img src="{{ asset('img/blog.avif') }}" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-luminosity">
            @endif

            <!-- Background Accents -->
            <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-[#c9a227]/10 rounded-full blur-[150px] animate-pulse"></div>
            
            <div class="container relative z-20">
                <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                    <nav class="flex items-center justify-center gap-4 mb-10 text-[10px] font-black text-[#c9a227] uppercase tracking-[0.3em]">
                        <a href="{{ route('blog.index') }}" class="hover:text-white transition-colors">Journal Index</a>
                        <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                        <a href="{{ route('blog.category', $post->category->slug ?? '#') }}" class="hover:text-white transition-colors">
                            {{ $post->category->name ?? 'Story' }}
                        </a>
                        <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                        <span class="text-slate-400">{{ $post->published_at->format('d M Y') }}</span>
                    </nav>

                    <h1 class="text-5xl md:text-7xl font-syne font-black text-white mb-12 tracking-tighter leading-[0.9] uppercase drop-shadow-2xl">
                        {{ $post->title }}
                    </h1>

                    <!-- Author Info -->
                    <div class="flex items-center justify-center gap-4">
                        <div class="w-12 h-12 rounded-full border-2 border-[#c9a227]/30 p-1">
                            <div class="w-full h-full rounded-full bg-slate-800 flex items-center justify-center text-[10px] font-black text-white tracking-widest uppercase">IA</div>
                        </div>
                        <div class="text-left leading-tight">
                            <p class="text-white font-black uppercase tracking-widest text-[10px]">Team Indian Anchors</p>
                            <p class="text-slate-500 font-dm text-[10px] italic">Expert Insights</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <div class="container py-24 lg:py-32">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-24 items-start">
                
                <!-- Sidebar Left: Share Tools (Visible on LG) -->
                <aside class="hidden lg:block lg:col-span-1 sticky top-32" data-aos="fade-right">
                    <div class="flex flex-col items-center gap-6">
                        <span class="text-[9px] font-black uppercase leading-none text-slate-300 -rotate-90 origin-center translate-y-8 mb-8 whitespace-nowrap tracking-[0.4em]">Share Article</span>
                        <a href="#" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-slate-900 hover:text-white transition-all shadow-sm"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-slate-900 hover:text-white transition-all shadow-sm"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-slate-900 hover:text-white transition-all shadow-sm"><i class="bi bi-whatsapp"></i></a>
                        <a href="#" class="w-12 h-12 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-slate-900 hover:text-white transition-all shadow-sm"><i class="bi bi-link-45deg text-xl"></i></a>
                    </div>
                </aside>

                <!-- Core Article Content -->
                <div class="lg:col-span-11 xl:col-span-8 space-y-16" data-aos="fade-up" data-aos-delay="100">
                    
                    @if($post->youtube_url)
                        <div class="rounded-[40px] overflow-hidden shadow-2xl bg-black border-4 border-white p-1">
                            <div class="aspect-video">
                                <iframe class="w-full h-full rounded-[34px]" 
                                        src="https://www.youtube.com/embed/{{ preg_replace('/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/', '$2', $post->youtube_url) }}" 
                                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif

                    <!-- Rich Content -->
                    <div class="article-body prose prose-slate max-w-none prose-h2:font-syne prose-h2:text-4xl prose-h2:font-black prose-h2:tracking-tighter prose-h2:text-slate-950 prose-h2:uppercase prose-p:text-slate-600 prose-p:text-xl prose-p:leading-relaxed prose-p:font-dm prose-strong:text-slate-950 prose-blockquote:border-l-4 prose-blockquote:border-[#c9a227] prose-blockquote:italic prose-blockquote:text-2xl prose-blockquote:bg-[#c9a227]/5 prose-blockquote:p-10 prose-blockquote:rounded-r-3xl">
                        {!! $post->content !!}
                    </div>

                    <!-- Post Tags Decor -->
                    <div class="pt-12 border-t border-slate-100">
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="text-[10px] font-black uppercase text-slate-400 tracking-widest mr-4">Tags:</span>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="px-5 py-2 rounded-full bg-slate-50 border border-slate-100 text-[10px] font-bold uppercase tracking-wider text-slate-600 hover:bg-indigo-600 hover:text-white transition-all">
                                    #{{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>

                <!-- Right Sidebar: Author & Related (XL+) -->
                <aside class="hidden xl:block xl:col-span-3 space-y-12 sticky top-32" data-aos="fade-left" data-aos-delay="200">
                    
                    <!-- Trending Categories Block -->
                    <div class="bg-slate-50 p-8 rounded-[40px] border border-slate-100">
                        <h3 class="text-[9px] font-black uppercase tracking-[0.4em] text-slate-400 mb-6 flex items-center gap-3">
                            <span class="w-6 h-[2px] bg-[#c9a227]"></span> Categories
                        </h3>
                        <div class="space-y-2">
                            @foreach($allCategories ?? [] as $cat)
                                <a href="{{ route('blog.category', $cat->slug) }}" class="flex items-center justify-between p-4 rounded-2xl bg-white border border-slate-100 hover:border-[#c9a227] hover:bg-slate-950 hover:text-white transition-all group">
                                    <span class="text-[10px] font-black uppercase tracking-widest">{{ $cat->name }}</span>
                                    <span class="text-[8px] font-dm text-slate-400 group-hover:text-[#c9a227]">{{ $cat->posts_count ?? 'Explore' }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Recommended Reading -->
                    <div class="bg-slate-50 p-8 rounded-[40px] border border-slate-100">
                        <h3 class="text-[9px] font-black uppercase tracking-[0.4em] text-slate-400 mb-6 flex items-center gap-3">
                            <span class="w-6 h-[2px] bg-[#c9a227]"></span> Featured
                        </h3>
                        <div class="space-y-8">
                            @forelse($relatedPosts ?? [] as $rp)
                                <a href="{{ route('blog.show', $rp->slug) }}" class="group block">
                                    <div class="space-y-4">
                                        @if($rp->featured_image)
                                            <div class="aspect-[16/9] rounded-2xl overflow-hidden bg-slate-200">
                                                <img src="{{ Storage::url($rp->featured_image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                            </div>
                                        @endif
                                        <h4 class="text-xs font-syne font-black text-slate-950 group-hover:text-[#c9a227] leading-tight transition-all uppercase tracking-tighter line-clamp-2">
                                            {{ $rp->title }}
                                        </h4>
                                        <p class="text-[8px] font-black uppercase tracking-[0.3em] text-slate-400">{{ $rp->published_at->format('d M Y') }}</p>
                                    </div>
                                </a>
                            @empty
                                <p class="text-slate-400 italic text-xs">More coming soon...</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Tags Discovery Cloud -->
                    <div class="bg-slate-50 p-8 rounded-[40px] border border-slate-100">
                        <h3 class="text-[9px] font-black uppercase tracking-[0.4em] text-slate-400 mb-6 flex items-center gap-3">
                            <span class="w-6 h-[2px] bg-[#c9a227]"></span> Discovery
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($allTags ?? [] as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-[8px] font-black uppercase tracking-widest text-slate-600 hover:bg-[#c9a227] hover:text-slate-950 hover:border-[#c9a227] transition-all">
                                    #{{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-6">
                        <a href="{{ route('blog.index') }}" class="flex items-center justify-center gap-3 w-full py-4 rounded-2xl bg-slate-950 text-[10px] font-black uppercase tracking-widest text-white hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-xl">
                             Masterclass Index
                        </a>
                    </div>
                </aside>

            </div>
        </div>
    </article>

    <style>
        .article-body p:first-of-type {
            @apply text-2xl font-medium text-slate-800 leading-relaxed capitalize tracking-tight mb-12;
            content-visibility: auto;
        }
        .gradient-text {
            background: linear-gradient(135deg, #a5b4fc 0%, #818cf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
@endsection
