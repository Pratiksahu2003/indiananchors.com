@extends('layouts.main')

@section('title', 'Journal - Best Event Anchors & Emcees in India')

@section('content')
    <!-- Cinematic Blog Hero -->
    <section class="relative overflow-hidden flex items-center min-h-[50vh] py-24 bg-slate-950 border-b border-white/5">
        <!-- Background Hero Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/blog.avif') }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900/90 to-black/80"></div>
        </div>
        
        <!-- Background Accents -->
        <div class="absolute -top-48 -right-48 w-[600px] h-[600px] bg-[#c9a227]/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute -bottom-48 -left-48 w-[500px] h-[500px] bg-slate-400/5 rounded-full blur-[100px] animate-pulse" style="animation-delay: 2s"></div>

        <div class="container relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-1.5 rounded-full bg-[#c9a227]/10 border border-[#c9a227]/20 text-[#c9a227] text-xs font-black uppercase tracking-[0.3em] mb-8">
                    Stage Success Stories
                </span>
                <h1 class="text-5xl md:text-8xl font-syne font-black text-white mb-8 tracking-tighter leading-[0.9] uppercase">
                    The <span class="text-[#c9a227] italic">Journal.</span>
                </h1>
                <p class="text-xl text-slate-400 font-dm max-w-2xl mx-auto mb-1 leading-relaxed">
                    Exclusive insights into the world of professional anchoring, event management, and the art of stage presence in India.
                </p>
            </div>
        </div>
    </section>

    <!-- Horizontal Scroll Category Bar (Post-Banner) -->
    <nav class="sticky top-20 z-40 bg-white/80 backdrop-blur-2xl border-b border-slate-100 py-4">
        <div class="container overflow-x-auto no-scrollbar scroll-smooth">
            <div class="flex items-center justify-center gap-2 whitespace-nowrap min-w-max px-6">
                <a href="{{ route('blog.index') }}" 
                   class="px-6 py-2.5 rounded-xl border {{ !isset($category) && !isset($tag) ? 'bg-slate-950 text-[#c9a227] border-slate-950' : 'bg-slate-50 border-slate-100 text-slate-400 hover:bg-white hover:border-[#c9a227] hover:text-[#c9a227]' }} transition-all font-syne font-black text-[9px] uppercase tracking-widest shadow-sm">
                    All Masterclasses
                </a>
                @foreach($categories ?? $allCategories ?? [] as $cat)
                    <a href="{{ route('blog.category', $cat->slug) }}" 
                       class="px-6 py-2.5 rounded-xl border {{ (isset($category) && $category->id == $cat->id) ? 'bg-slate-950 text-[#c9a227] border-slate-950 shadow-lg' : 'bg-slate-50 border-slate-100 text-slate-400 hover:bg-white hover:border-[#c9a227] hover:text-[#c9a227]' }} transition-all font-syne font-black text-[9px] uppercase tracking-widest shadow-sm">
                        {{ $cat->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>
            </div>
        </div>
    </section>

    <!-- Post Grid Section -->
    <section class="section-modern py-32 bg-[#fafafa]">
        <div class="container">
            @if(isset($category) || isset($tag))
                <div class="mb-20 text-center" data-aos="fade-up">
                    <div class="inline-flex items-center gap-3 px-5 py-2.5 bg-slate-100 rounded-full text-slate-500 text-[10px] font-black uppercase tracking-[0.3em] mb-6">
                        <i class="bi bi-collection-fill text-[#c9a227]"></i>
                        {{ isset($category) ? 'Category Collection' : 'Tagged Stories' }}
                    </div>
                    <h3 class="text-4xl lg:text-5xl font-syne font-black text-slate-950 uppercase tracking-tighter italic">
                        {{ isset($category) ? $category->name : '#'.$tag->name }}
                    </h3>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16">
                
                <!-- Main Grid (9 Columns) -->
                <div class="lg:col-span-9">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-12">
                        @forelse($posts as $post)
                            <article class="group flex flex-col h-full rounded-[40px] overflow-hidden bg-white border border-slate-100 shadow-sm hover:shadow-[0_48px_80px_-16px_rgba(201,162,39,0.12)] transition-all duration-700 hover:-translate-y-4" 
                                     data-aos="fade-up" 
                                     data-aos-delay="{{ 100 + ($loop->index * 50) }}">
                                
                                <a href="{{ route('blog.show', $post->slug) }}" class="block relative aspect-[16/11] overflow-hidden">
                                    @if($post->featured_image)
                                        <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[2s] ease-[cubic-bezier(0.16,1,0.3,1)]">
                                    @else
                                        <div class="w-full h-full bg-slate-100 flex items-center justify-center text-slate-300 italic font-syne">
                                            IA Insights
                                        </div>
                                    @endif
                                    
                                    <div class="absolute top-6 right-6">
                                        <span class="px-5 py-2 bg-black/60 backdrop-blur-xl border border-white/10 rounded-full text-[10px] font-black uppercase tracking-widest text-white">
                                            {{ $post->category->name ?? 'Story' }}
                                        </span>
                                    </div>
                                </a>

                                <div class="p-8 lg:p-10 flex flex-col flex-1">
                                    <div class="flex items-center gap-4 text-[10px] font-black text-slate-400 mb-6 uppercase tracking-[0.2em]">
                                        <span>{{ $post->published_at->format('M Y') }}</span>
                                    </div>

                                    <h3 class="text-2xl font-syne font-black text-slate-950 mb-6 leading-[1.1] group-hover:text-[#c9a227] transition-all tracking-tighter uppercase">
                                        <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                                    </h3>

                                    <p class="text-slate-500 font-dm text-sm leading-relaxed mb-10 line-clamp-3 italic">
                                        {{ Str::limit(strip_tags($post->content), 120) }}
                                    </p>
                                    
                                    <div class="mt-auto pt-8 border-t border-slate-50 flex items-center justify-between">
                                        <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center gap-3 text-[10px] font-black text-slate-950 uppercase tracking-[0.2em] group/btn border-b border-transparent hover:border-[#c9a227] hover:text-[#c9a227] transition-all py-1">
                                            Deep Dive <i class="bi bi-arrow-right text-xs transition-transform group-hover/btn:translate-x-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @empty
                            <div class="col-span-full py-32 text-center" data-aos="fade-up">
                                <div class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-slate-50 text-[#c9a227] mb-8">
                                    <i class="bi bi-journal-x text-4xl"></i>
                                </div>
                                <p class="text-3xl font-syne font-black text-slate-400 italic uppercase">More stories coming soon.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Tags Sidebar (3 Columns) -->
                <aside class="lg:col-span-3 space-y-10 order-first lg:order-last" data-aos="fade-left">
                    <div class="bg-white p-8 rounded-[40px] border border-slate-100 shadow-sm sticky top-40">
                         <h4 class="text-[9px] font-black uppercase tracking-[0.4em] text-slate-400 mb-8 flex items-center gap-3">
                             <span class="w-6 h-[2px] bg-[#c9a227]"></span> Discovery
                         </h4>
                         <div class="flex flex-wrap gap-2 max-h-[500px] overflow-y-auto custom-scrollbar pr-2">
                            @foreach($tags ?? $allTags ?? [] as $t)
                                <a href="{{ route('blog.tag', $t->slug) }}" 
                                   class="px-4 py-2 rounded-xl border {{ (isset($tag) && $tag->id == $t->id) ? 'bg-[#c9a227] border-[#c9a227] text-slate-950 shadow-md' : 'bg-slate-50 border-slate-50 text-slate-400 hover:bg-white hover:border-[#c9a227] hover:text-[#c9a227]' }} transition-all text-[9px] font-black uppercase tracking-widest">
                                    #{{ $t->name }}
                                </a>
                            @endforeach
                         </div>
                    </div>
                </aside>

            </div>

            <div class="mt-24 flex justify-center custom-pagination" data-aos="fade-up">
                {{ $posts->links() }}
            </div>
        </div>
    </section>

    <!-- Style Override for Syne Font and Special Elements -->
    <style>
        .custom-pagination nav {
            @apply flex gap-3;
        }
        .custom-pagination span, .custom-pagination a {
            @apply px-4 py-2.5 rounded-xl font-black text-[10px] uppercase tracking-widest transition-all backdrop-blur-md;
        }
        .custom-pagination span[aria-current="page"] {
            @apply bg-slate-950 text-[#c9a227] shadow-xl;
        }
        .custom-pagination a {
            @apply bg-white text-slate-950 border border-slate-100 hover:bg-slate-50;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            @apply bg-slate-50 rounded-full;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            @apply bg-[#c9a227]/30 rounded-full hover:bg-[#c9a227]/60 transition-all;
        }
    </style>
@endsection
