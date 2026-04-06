@extends('layouts.main')

@section('title', 'Journal - Best Event Anchors & Emcees in India')

@section('content')
    <!-- Cinematic Blog Hero -->
    <section class="section-modern relative overflow-hidden flex items-center min-h-[60vh] py-32 bg-slate-900 border-b border-white/5">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-950 via-slate-900 to-black z-0"></div>
        
        <!-- Background Accents -->
        <div class="absolute -top-48 -right-48 w-[600px] h-[600px] bg-indigo-500/10 rounded-full blur-[120px] animate-pulse"></div>
        <div class="absolute -bottom-48 -left-48 w-[500px] h-[500px] bg-emerald-500/5 rounded-full blur-[100px] animate-pulse" style="animation-delay: 2s"></div>

        <div class="container relative z-10">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-400/20 text-indigo-400 text-xs font-black uppercase tracking-[0.2em] mb-8">
                    Discover Inner Excellence
                </span>
                <h1 class="text-5xl md:text-8xl font-syne font-extrabold text-white mb-8 tracking-tighter leading-[0.9]">
                    The <span class="gradient-text">Journal.</span>
                </h1>
                <p class="text-xl text-slate-400 font-dm max-w-2xl mx-auto mb-12 leading-relaxed">
                    Exclusive insights into the world of professional anchoring, event management, and the art of stage presence in India.
                </p>
                
                <!-- Category Filter Pills -->
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <a href="{{ route('blog.index') }}" 
                       class="px-6 py-2.5 rounded-full border {{ !isset($category) ? 'bg-white border-white text-slate-900' : 'bg-white/5 border-white/10 text-white/70 hover:bg-white/10 hover:text-white' }} transition-all font-bold text-xs uppercase tracking-widest backdrop-blur-md">
                        All Stories
                    </a>
                    @foreach($categories ?? [] as $cat)
                        <a href="{{ route('blog.category', $cat->slug) }}" 
                           class="px-6 py-2.5 rounded-full border {{ (isset($category) && $category->id == $cat->id) ? 'bg-white border-white text-slate-900' : 'bg-white/5 border-white/10 text-white/70 hover:bg-white/10 hover:text-white' }} transition-all font-bold text-xs uppercase tracking-widest backdrop-blur-md">
                            {{ $cat->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Post Grid Section -->
    <section class="section-modern py-32 bg-[#fafafa]">
        <div class="container">
            @if(isset($category))
                <div class="mb-20 text-center" data-aos="fade-up">
                    <h2 class="text-sm font-black text-slate-400 uppercase tracking-[0.3em] mb-4">Browsing Collection</h2>
                    <h3 class="text-4xl font-syne font-bold text-slate-900">{{ $category->name }}</h3>
                </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-16">
                @forelse($posts as $post)
                    <article class="group flex flex-col h-full rounded-[40px] overflow-hidden bg-white border border-slate-100 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.05)] hover:shadow-[0_48px_80px_-16px_rgba(79,70,229,0.12)] transition-all duration-700 hover:-translate-y-4" 
                             data-aos="fade-up" 
                             data-aos-delay="{{ 100 + ($loop->index * 50) }}">
                        
                        <a href="{{ route('blog.show', $post->slug) }}" class="block relative aspect-[16/11] overflow-hidden">
                            @if($post->featured_image)
                                <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[2s] ease-[cubic-bezier(0.16,1,0.3,1)]">
                            @else
                                <div class="w-full h-full bg-slate-100 flex items-center justify-center text-slate-300 italic font-syne">
                                    No Visual Provided
                                </div>
                            @endif
                            
                            <!-- Category Badge on Image -->
                            <div class="absolute top-6 right-6">
                                <span class="px-5 py-2 bg-black/60 backdrop-blur-xl border border-white/10 rounded-full text-[10px] font-black uppercase tracking-widest text-white">
                                    {{ $post->category->name ?? 'Update' }}
                                </span>
                            </div>
                        </a>

                        <div class="p-10 lg:p-12 flex flex-col flex-1">
                            <div class="flex items-center gap-4 text-[10px] font-black text-slate-400 mb-6 uppercase tracking-[0.2em]">
                                <span>{{ $post->published_at->format('d M Y') }}</span>
                                <span class="w-1 h-1 rounded-full bg-indigo-500"></span>
                                <span>{{ ceil(str_word_count(strip_tags($post->content)) / 200) }} Min</span>
                            </div>

                            <h3 class="text-2xl lg:text-3xl font-syne font-bold text-slate-900 mb-6 leading-[1.1] group-hover:text-indigo-600 transition-colors">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>

                            <p class="text-slate-500 font-dm text-base leading-relaxed mb-10 line-clamp-3">
                                {{ Str::limit(strip_tags($post->content), 140) }}
                            </p>
                            
                            <div class="mt-auto pt-10 border-t border-slate-50 flex items-center justify-between">
                                <a href="{{ route('blog.show', $post->slug) }}" class="inline-flex items-center gap-3 text-xs font-black text-slate-900 uppercase tracking-widest group/btn border-b-2 border-transparent hover:border-indigo-600 transition-all py-1">
                                    Full Story 
                                    <i class="bi bi-arrow-right text-xs transition-transform group-hover/btn:translate-x-2"></i>
                                </a>
                                
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-slate-900 flex items-center justify-center text-[10px] font-bold text-white uppercase tracking-tighter">IA</div>
                                </div>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-full py-32 text-center" data-aos="fade-up">
                        <div class="inline-flex items-center justify-center w-24 h-24 rounded-full bg-slate-100 text-slate-300 mb-8">
                            <i class="bi bi-journal-x text-4xl"></i>
                        </div>
                        <p class="text-3xl font-syne font-bold text-slate-400 italic">No stories have been told yet.</p>
                        <a href="{{ route('blog.index') }}" class="inline-block mt-8 text-indigo-600 font-black uppercase tracking-widest text-xs border-b-2 border-indigo-600 pb-1">Reset Collection</a>
                    </div>
                @endforelse
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
            @apply px-6 py-3 rounded-2xl font-black text-xs uppercase tracking-widest transition-all backdrop-blur-md;
        }
        .custom-pagination span[aria-current="page"] {
            @apply bg-slate-900 text-white shadow-xl;
        }
        .custom-pagination a {
            @apply bg-white text-slate-900 border border-slate-100 hover:bg-slate-50;
        }
        .gradient-text {
            background: linear-gradient(135deg, #818cf8 0%, #6366f1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
@endsection
