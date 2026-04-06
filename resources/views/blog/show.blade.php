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
    <!-- World-Class Reading Progress Bar -->
    <div class="fixed top-0 left-0 w-full h-1 z-[100] bg-slate-900/10 pointer-events-none">
        <div id="reading-progress" class="h-full bg-[#c9a227] w-0 transition-all duration-150"></div>
    </div>

    <article class="bg-white min-h-screen relative overflow-hidden">
        <!-- Abstract Background Signature (Huge Outline Text) -->
        <div class="absolute inset-x-0 top-1/4 -translate-y-1/2 flex justify-center pointer-events-none select-none overflow-hidden z-0 opacity-40">
            <span class="text-[25vw] font-syne font-black text-slate-50 uppercase leading-none transform -rotate-6">STORY</span>
        </div>
        <!-- Cinematic Post Hero (Compact) -->
        <header class="relative min-h-[50vh] flex items-center justify-center pt-24 pb-16 overflow-hidden bg-slate-950">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/60 to-transparent z-10"></div>
            
            <!-- Dynamic Background Image (Optimized LCP) -->
            @if($post->featured_image)
                <img src="{{ Storage::url($post->featured_image) }}" fetchpriority="high" alt="{{ $post->title }}" class="absolute inset-0 w-full h-full object-cover opacity-20 mix-blend-luminosity scale-110 blur-[1px]">
            @else
                <img src="{{ asset('img/blog.avif') }}" fetchpriority="high" class="absolute inset-0 w-full h-full object-cover opacity-10 mix-blend-luminosity">
            @endif

            <!-- Background Accents -->
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#c9a227]/5 rounded-full blur-[120px] animate-pulse"></div>
            
            <div class="container relative z-20">
                <div class="max-w-4xl mx-auto text-center px-4" data-aos="fade-up">
                    <nav class="flex items-center justify-center gap-3 mb-8 text-[9px] font-black text-[#c9a227] uppercase tracking-[0.3em]">
                        <a href="{{ route('blog.index') }}" class="hover:text-white transition-colors">Journal Index</a>
                        <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                        <a href="{{ route('blog.category', $post->category->slug ?? '#') }}" class="hover:text-white transition-colors">
                            {{ $post->category->name ?? 'Story' }}
                        </a>
                        <span class="w-1 h-1 rounded-full bg-slate-700"></span>
                        <span class="text-slate-500 italic">{{ $post->published_at->format('M Y') }}</span>
                    </nav>

                    <h1 class="text-3xl md:text-5xl lg:text-6xl font-syne font-black text-white mb-10 tracking-tighter leading-none uppercase drop-shadow-2xl">
                        {{ $post->title }}
                    </h1>

                    <!-- Author Info -->
                    <div class="flex items-center justify-center gap-3">
                        <div class="w-10 h-10 rounded-full border border-[#c9a227]/30 p-0.5">
                            <div class="w-full h-full rounded-full bg-slate-800 flex items-center justify-center text-[8px] font-black text-white tracking-widest uppercase">IA</div>
                        </div>
                        <div class="text-left leading-none">
                            <p class="text-white font-black uppercase tracking-widest text-[9px] mb-1">Team Indian Anchors</p>
                            <p class="text-slate-500 font-dm text-[8px] italic">Stage Wisdom</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area (Unified & Fully Responsive 8:4 Layout) -->
        <div class="container py-12 md:py-20 lg:py-24">
            
            <!-- Strategic Share Discovery Bar -->
            <div class="flex flex-wrap items-center gap-6 pb-12 mb-12 border-b border-slate-50" data-aos="fade-up">
                <span class="text-[9px] font-black uppercase tracking-[0.4em] text-slate-400">Masterclass Insights:</span>
                <div class="flex items-center gap-4">
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-slate-950 hover:text-white transition-all shadow-sm"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-slate-950 hover:text-white transition-all shadow-sm"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-400 hover:bg-slate-950 hover:text-white transition-all shadow-sm"><i class="bi bi-link-45deg text-lg"></i></a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 md:gap-12 lg:gap-16 items-start">
                
                <!-- Core Article Content (Perfect 8-Column Pillar) -->
                <main class="md:col-span-8 space-y-12 lg:space-y-16" data-aos="fade-up" data-aos-delay="100">
                    
                    @if($post->youtube_url)
                        <div class="rounded-[40px] overflow-hidden shadow-2xl bg-black border-4 border-white p-1">
                            <div class="aspect-video">
                                <iframe class="w-full h-full rounded-[34px]" 
                                        src="https://www.youtube.com/embed/{{ preg_replace('/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/', '$2', $post->youtube_url) }}" 
                                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif

                    <!-- Rich Content with Fluid Typography -->
                    <div class="article-body prose prose-slate max-w-none prose-h2:font-syne prose-h2:text-4xl prose-h2:font-black prose-h2:tracking-tighter prose-h2:text-slate-950 prose-h2:uppercase prose-p:text-slate-600 prose-p:text-lg md:text-xl prose-p:leading-relaxed prose-p:font-dm prose-strong:text-slate-950 prose-blockquote:border-l-4 prose-blockquote:border-[#c9a227] prose-blockquote:italic prose-blockquote:text-xl md:text-2xl prose-blockquote:bg-[#c9a227]/5 prose-blockquote:p-8 md:p-10 prose-blockquote:rounded-r-3xl">
                        {!! $post->content !!}
                    </div>

                    <!-- Post Tags Decor (Integrated Footer) -->
                    <div class="pt-12 border-t border-slate-100">
                        <div class="flex flex-wrap items-center gap-3">
                            <span class="text-[9px] font-black uppercase text-slate-400 tracking-widest mr-4">Story Themes:</span>
                            @foreach($post->tags as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="px-5 py-2 rounded-full bg-slate-50 border border-slate-100 text-[9px] font-black uppercase tracking-widest text-slate-500 hover:bg-[#c9a227] hover:text-slate-950 hover:border-[#c9a227] transition-all">
                                    #{{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                </main>

                <!-- Right Discovery Center (Perfect 4-Column Sidebar) -->
                <aside class="md:col-span-4 space-y-10 md:sticky md:top-32 mt-20 md:mt-0" data-aos="fade-left" data-aos-delay="200">
                    
                    <!-- Trending Categories Block (Expanded & Responsive) -->
                    <div class="bg-white p-8 md:p-10 rounded-[40px] border border-slate-100 shadow-sm overflow-hidden relative group">
                        <!-- Subtle Background Glow -->
                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-[#c9a227]/5 rounded-full blur-[80px] group-hover:bg-[#c9a227]/10 transition-all duration-700"></div>
                        
                        <h3 class="text-[10px] md:text-[11px] font-black uppercase tracking-[0.4em] text-slate-400 mb-8 flex items-center gap-3 relative z-10">
                             <span class="w-6 h-[1.5px] bg-[#c9a227]"></span> Categories
                        </h3>
                        <div class="space-y-2 max-h-[400px] overflow-y-auto custom-scrollbar pr-3">
                            @foreach($allCategories ?? [] as $cat)
                                <a href="{{ route('blog.category', $cat->slug) }}" class="flex items-center justify-between p-4 rounded-xl bg-slate-50 border border-slate-50 hover:border-[#c9a227] hover:bg-white transition-all group">
                                    <span class="text-[10px] font-black uppercase tracking-widest text-slate-950">{{ $cat->name }}</span>
                                    <span class="text-[8px] font-dm text-slate-400 group-hover:text-[#c9a227]">{{ $cat->posts_count ?? '' }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- Recommended Reading Center (Responsive) -->
                    <div class="bg-white p-8 md:p-10 rounded-[40px] border border-slate-100 shadow-sm overflow-hidden relative">
                        <h3 class="text-[10px] md:text-[11px] font-black uppercase tracking-[0.4em] text-slate-400 mb-8 flex items-center gap-3">
                             <span class="w-6 h-[1.5px] bg-[#c9a227]"></span> Featured
                        </h3>
                        <div class="space-y-6">
                            @forelse($relatedPosts ?? [] as $rp)
                                <a href="{{ route('blog.show', $rp->slug) }}" class="group block">
                                    <div class="flex items-center gap-4">
                                        @if($rp->featured_image)
                                            <div class="w-16 h-16 rounded-xl overflow-hidden flex-shrink-0 bg-slate-100">
                                                <img src="{{ Storage::url($rp->featured_image) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                                            </div>
                                        @endif
                                        <div>
                                            <h4 class="text-[10px] font-syne font-black text-slate-950 group-hover:text-[#c9a227] leading-tight transition-all uppercase tracking-tighter line-clamp-2">
                                                {{ $rp->title }}
                                            </h4>
                                            <p class="text-[7px] font-black uppercase tracking-widest text-slate-400 mt-1">{{ $rp->published_at->format('M Y') }}</p>
                                        </div>
                                    </div>
                                </a>
                            @empty
                                <p class="text-slate-400 italic text-[9px]">More soon...</p>
                            @endforelse
                        </div>
                    </div>

                    <!-- Discovery Cloud (Expanded & Responsive) -->
                    <div class="bg-white p-8 md:p-10 rounded-[40px] border border-slate-100 shadow-sm overflow-hidden relative group">
                        <div class="absolute -bottom-24 -left-24 w-48 h-48 bg-[#c9a227]/5 rounded-full blur-[80px] group-hover:bg-[#c9a227]/10 transition-all duration-700"></div>

                        <h3 class="text-[10px] md:text-[11px] font-black uppercase tracking-[0.4em] text-slate-400 mb-8 flex items-center gap-3 relative z-10">
                             <span class="w-6 h-[1.5px] bg-[#c9a227]"></span> Discovery
                        </h3>
                        <div class="flex flex-wrap gap-2 max-h-[350px] overflow-y-auto custom-scrollbar pr-3">
                            @foreach($allTags ?? [] as $tag)
                                <a href="{{ route('blog.tag', $tag->slug) }}" class="px-4 py-2 rounded-xl bg-slate-50 border border-slate-100 text-[9px] font-black uppercase tracking-widest text-slate-500 hover:bg-[#c9a227] hover:text-slate-950 hover:border-[#c9a227] transition-all">
                                    #{{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('blog.index') }}" class="flex items-center justify-center gap-3 w-full py-4 rounded-xl bg-slate-950 text-[9px] font-black uppercase tracking-widest text-white hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-xl">
                             Back to Index
                        </a>
                    </div>
                </aside>

            </div>
        </div>

        <!-- Cinematic Post-Article Discovery Ad (Full-Width Signature) -->
        <section class="py-24 md:py-32 bg-slate-950 overflow-hidden relative border-t border-[#c9a227]/10">
            <!-- Dynamic Background Elements -->
            <div class="absolute -top-48 -left-48 w-[800px] h-[800px] bg-[#c9a227]/5 rounded-full blur-[150px] animate-pulse"></div>
            <div class="absolute -bottom-48 -right-48 w-[800px] h-[800px] bg-[#c9a227]/5 rounded-full blur-[150px] animate-pulse"></div>
            
            <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 flex justify-center pointer-events-none select-none z-0 opacity-20 overflow-hidden">
                <span class="text-[35vw] md:text-[20vw] font-syne font-black text-white uppercase leading-none transform rotate-12">LEGACY</span>
            </div>

            <div class="container relative z-10 px-4 md:px-0">
                <div class="max-w-5xl mx-auto backdrop-blur-3xl bg-white/5 border border-white/10 rounded-[40px] md:rounded-[60px] p-10 md:p-24 text-center shadow-2xl overflow-hidden group">
                    <!-- Subtle Glow -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-[#c9a227]/20 rounded-full blur-3xl group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="inline-flex items-center gap-3 px-6 py-2.5 bg-[#c9a227]/10 border border-[#c9a227]/20 rounded-full text-[#c9a227] text-[10px] font-black uppercase tracking-[0.4em] mb-12">
                        Professional Engagement
                    </div>
                    
                    <h2 class="text-3xl md:text-5xl lg:text-7xl font-syne font-black text-white mb-12 uppercase leading-none tracking-tighter">
                        Elevate Your Next <br><span class="text-[#c9a227]">Global Event</span>
                    </h2>
                    
                    <p class="text-lg md:text-2xl text-slate-400 font-dm max-w-2xl mx-auto mb-16 leading-relaxed italic">
                        Experience the gold standard of stage mastery with India’s elite anchors and corporate presenters.
                    </p>
                    
                    <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                        <a href="{{ route('pages.book') }}" class="w-full md:w-auto px-12 py-5 rounded-2xl bg-[#c9a227] text-slate-950 font-syne font-black text-xs uppercase tracking-widest hover:bg-white transition-all shadow-2xl hover:-translate-y-2 text-center">
                            Secure The Stage
                        </a>
                        <a href="{{ route('pages.about') }}" class="w-full md:w-auto px-12 py-5 rounded-2xl border border-white/10 text-white font-syne font-black text-xs uppercase tracking-widest hover:bg-white hover:text-slate-950 transition-all text-center">
                            Our Story
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </article>

    <style>
        .article-body p:first-of-type {
            @apply text-2xl font-bold text-slate-950 leading-tight tracking-tighter uppercase mb-12 relative;
        }
        .article-body p:first-of-type::before {
            content: "";
            @apply absolute -left-4 top-0 w-1 h-full bg-[#c9a227] rounded-full;
        }
        .gradient-text {
            background: linear-gradient(135deg, #c9a227 0%, #d4af37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        /* Refined Slim Gold Sidebar Scrollbar */
        .custom-scrollbar::-webkit-scrollbar {
            width: 3px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            @apply bg-slate-50 rounded-full;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            @apply bg-[#c9a227]/40 rounded-full hover:bg-[#c9a227] transition-all;
        }
    </style>

    <script>
        document.addEventListener('scroll', () => {
            const h = document.documentElement, 
                  b = document.body,
                  st = 'scrollTop',
                  sh = 'scrollHeight';
            const percent = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
            document.getElementById('reading-progress').style.width = percent + '%';
        });
    </script>
@endsection
