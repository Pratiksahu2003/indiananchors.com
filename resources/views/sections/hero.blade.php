@php $hero = config('site.hero', []); @endphp
<section id="hero" class="relative min-h-[90vh] md:min-h-screen flex items-center pt-28 md:pt-36 pb-20 overflow-hidden bg-slate-950">
    <!-- Animated Gradients -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-indigo-600/20 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/3 z-0 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-indigo-900/10 rounded-full blur-[120px] translate-y-1/2 -translate-x-1/4 z-0"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            <!-- Content -->
            <div data-aos="fade-right">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white/5 border border-white/10 text-indigo-400 font-bold text-xs uppercase tracking-[0.2em] mb-10 shadow-2xl backdrop-blur-md">
                    <i class="bi bi-trophy-fill animate-bounce"></i>
                    {{ $hero['badge'] ?? 'National Award Winner' }}
                </div>

                <h1 class="text-6xl md:text-8xl lg:text-[100px] font-syne font-black text-white leading-[0.9] tracking-tighter mb-10">
                    India's <span class="text-transparent bg-clip-text bg-gradient-to-br from-indigo-400 to-indigo-600">Legendary</span><br>Voice
                </h1>

                <p class="text-xl md:text-2xl text-slate-400 font-dm leading-relaxed mb-12 max-w-xl">
                    {{ $hero['tagline'] ?? 'Best Anchor & Entertainer' }} — the gold standard in premium event hosting across global stages.
                </p>

                <div class="flex flex-wrap items-center gap-6 mb-16">
                    <div class="flex items-center gap-3 px-4 py-2 bg-white/5 rounded-xl border border-white/5 text-slate-300 text-sm font-bold font-syne uppercase tracking-wider">
                        <i class="bi bi-building text-indigo-500"></i> Corporate
                    </div>
                    <div class="flex items-center gap-3 px-4 py-2 bg-white/5 rounded-xl border border-white/5 text-slate-300 text-sm font-bold font-syne uppercase tracking-wider">
                        <i class="bi bi-hearts text-indigo-500"></i> Weddings
                    </div>
                    <div class="flex items-center gap-3 px-4 py-2 bg-white/5 rounded-xl border border-white/5 text-slate-300 text-sm font-bold font-syne uppercase tracking-wider">
                        <i class="bi bi-trophy text-indigo-500"></i> Awards
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-6">
                    <a href="#contact" class="w-full sm:w-auto px-12 py-5 bg-indigo-600 text-white font-syne font-black uppercase tracking-widest text-xs rounded-2xl hover:bg-white hover:text-slate-900 transition-all shadow-2xl shadow-indigo-500/20 active:scale-95 text-center">
                        Secure Your Dates
                    </a>
                    <a href="tel:{{ config('site.phone') }}" class="w-full sm:w-auto px-12 py-5 bg-white/5 border border-white/10 text-white font-syne font-black uppercase tracking-widest text-xs rounded-2xl hover:bg-white/10 transition-all text-center">
                        <i class="bi bi-telephone-fill mr-3"></i> Quick Inquiry
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-10 mt-20 pt-10 border-t border-white/5">
                    <div>
                        <div class="text-3xl font-syne font-black text-white mb-1">500<span class="text-indigo-500">+</span></div>
                        <div class="text-[10px] font-black uppercase tracking-widest text-slate-500">Masterpieces</div>
                    </div>
                    <div>
                        <div class="text-3xl font-syne font-black text-white mb-1">15<span class="text-indigo-500">+</span></div>
                        <div class="text-[10px] font-black uppercase tracking-widest text-slate-500">Years On Stage</div>
                    </div>
                    <div>
                        <div class="text-3xl font-syne font-black text-white mb-1">50<span class="text-indigo-500">+</span></div>
                        <div class="text-[10px] font-black uppercase tracking-widest text-slate-500">Global Cities</div>
                    </div>
                </div>
            </div>

            <!-- Media -->
            <div class="relative group" data-aos="zoom-in" data-aos-delay="200">
                <div class="absolute -inset-4 bg-indigo-600/20 rounded-[80px] blur-2xl group-hover:bg-indigo-600/30 transition-all duration-700"></div>
                <div class="relative overflow-hidden rounded-[60px] lg:rounded-[100px] aspect-[4/5] shadow-2xl border border-white/10">
                    <img src="{{ asset($hero['image'] ?? 'img/gallery/vidhu_front.jpeg') }}" 
                         class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" 
                         alt="{{ config('site.name') }}">
                    
                    <!-- Glass Floating Card -->
                    <div class="absolute bottom-10 left-10 right-10 p-8 glass-morphism rounded-[30px] border border-white/10 shadow-2xl backdrop-blur-xl bg-white/5">
                        <div class="flex items-center gap-6">
                            <div class="w-14 h-14 rounded-2xl bg-indigo-600 flex items-center justify-center text-white text-2xl shadow-lg">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-syne font-bold text-lg mb-1 tracking-tight">Youth Icon Award</h3>
                                <p class="text-indigo-300 text-xs font-black uppercase tracking-widest">Best Female Anchor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
