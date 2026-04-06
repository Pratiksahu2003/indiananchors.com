@php $hero = config('site.hero', []); @endphp
<section id="hero" class="relative min-h-[90vh] flex items-center pt-32 pb-16 lg:pt-0 overflow-hidden bg-white">
    <!-- Sophisticated Light Accents -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#c9a227]/5 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 z-0 animate-pulse"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-slate-100 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/4 z-0"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            
            <!-- Left: Content (Magazine Style) -->
            <div class="space-y-8" data-aos="fade-right">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-slate-50 border border-slate-100 text-[#c9a227] font-syne font-black text-[9px] uppercase tracking-[0.4em] shadow-sm">
                    <i class="bi bi-trophy-fill"></i>
                    {{ $hero['badge'] ?? 'National Award Winner' }}
                </div>

                <h1 class="text-6xl md:text-8xl lg:text-[100px] font-syne font-black text-slate-950 leading-[0.85] tracking-tighter uppercase">
                    India's Most <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-[#c9a227] to-[#d4af37] italic font-normal">Celebrated</span><br>Event Anchor
                </h1>

                <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed max-w-xl italic">
                    {{ $hero['tagline'] ?? 'Best Anchor & Entertainer' }} — weaving elegance, energy, and cinematic storytelling into every high-profile stage across the nation.
                </p>

                <div class="flex flex-wrap items-center gap-3">
                    @foreach(['Corporate', 'Weddings', 'Award Shows', 'Virtual'] as $cat)
                    <span class="px-4 py-2 bg-slate-50 rounded-xl border border-slate-100 text-slate-400 text-[8px] font-black uppercase tracking-[0.2em] font-syne">
                        {{ $cat }}
                    </span>
                    @endforeach
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-4 pt-6">
                    <a href="#contact" class="w-full sm:w-auto px-10 py-4 bg-slate-950 text-[#c9a227] font-syne font-black uppercase tracking-[0.3em] text-[9px] rounded-2xl hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-2xl active:scale-95 text-center">
                        Secure Your Date
                    </a>
                    <a href="tel:{{ config('site.phone') }}" class="w-full sm:w-auto px-10 py-4 bg-white border border-slate-200 text-slate-950 font-syne font-black uppercase tracking-[0.3em] text-[9px] rounded-2xl hover:bg-slate-50 transition-all text-center">
                        {{ config('site.phone_display') }}
                    </a>
                </div>

                <!-- Stats Grid (Compact) -->
                <div class="grid grid-cols-3 gap-8 pt-12 border-t border-slate-100">
                    <div>
                        <div class="text-2xl md:text-3xl font-syne font-black text-slate-950 mb-1 leading-none">500<span class="text-[#c9a227]">+</span></div>
                        <div class="text-[8px] font-black uppercase tracking-[0.3em] text-slate-400">Events</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-3xl font-syne font-black text-slate-950 mb-1 leading-none">15<span class="text-[#c9a227]">+</span></div>
                        <div class="text-[8px] font-black uppercase tracking-[0.3em] text-slate-400">Years</div>
                    </div>
                    <div>
                        <div class="text-2xl md:text-3xl font-syne font-black text-slate-950 mb-1 leading-none">50<span class="text-[#c9a227]">+</span></div>
                        <div class="text-[8px] font-black uppercase tracking-[0.3em] text-slate-400">Cities</div>
                    </div>
                </div>

            </div>

            <!-- Right: Media (Clean Frame) -->
            <div class="relative group" data-aos="fade-left">
                <div class="absolute -inset-4 bg-[#c9a227]/5 rounded-[60px] blur-2xl group-hover:bg-[#c9a227]/10 transition-all duration-1000"></div>
                <div class="relative rounded-[60px] overflow-hidden aspect-[4/5] shadow-[0_50px_100px_-20px_rgba(0,0,0,0.15)] border border-slate-100 bg-slate-50">
                    <img 
                        src="{{ asset($hero['image'] ?? 'img/gallery/vidhu_front.jpeg') }}" 
                        class="w-full h-full object-cover transition-transform duration-[3000ms] group-hover:scale-105" 
                        alt="{{ config('site.name') }}"
                    >
                    
                    <!-- Floating Recognition Card -->
                    <div class="absolute bottom-8 left-8 right-8 p-6 bg-white/40 backdrop-blur-3xl border border-white/20 rounded-[35px] shadow-2xl transform transition-all duration-700 group-hover:-translate-y-2">
                        <div class="flex items-center gap-5">
                            <div class="w-14 h-14 rounded-2xl bg-[#c9a227] flex items-center justify-center text-slate-950 text-2xl shadow-xl">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <div>
                                <h3 class="text-slate-950 font-syne font-black text-md leading-none mb-1 tracking-tight uppercase">Youth Icon</h3>
                                <p class="text-[#c9a227] text-[9px] font-black uppercase tracking-widest italic">Best Female Anchor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
