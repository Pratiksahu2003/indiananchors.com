@php $hero = config('site.hero', []); @endphp
<section id="hero" class="relative min-h-[95vh] lg:min-h-screen flex items-center pt-32 lg:pt-0 overflow-hidden bg-slate-950">
    <!-- Animated Orbs (Restored to Gold theme) -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-[#c9a227]/5 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/3 z-0 animate-pulse"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left: Content -->
            <div class="space-y-10" data-aos="fade-right">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full bg-white/5 border border-white/10 text-[#c9a227] font-bold text-xs uppercase tracking-[0.3em] shadow-2xl backdrop-blur-md">
                    <i class="bi bi-trophy-fill animate-bounce"></i>
                    {{ $hero['badge'] ?? 'National Award Winner' }}
                </div>

                <h1 class="text-6xl md:text-8xl lg:text-[110px] font-syne font-black text-white leading-[0.85] tracking-tighter">
                    India's Most <span class="text-transparent bg-clip-text bg-gradient-to-br from-[#c9a227] to-[#d4af37] italic">Celebrated</span><br>Event Anchor
                </h1>

                <p class="text-xl md:text-2xl text-slate-400 font-dm leading-relaxed max-w-xl">
                    {{ $hero['tagline'] ?? 'Best Anchor & Entertainer' }} — bringing energy, elegance, and unforgettable moments to every stage across India.
                </p>

                <div class="flex flex-wrap items-center gap-6">
                    <span class="flex items-center gap-3 px-5 py-2.5 bg-white/5 rounded-2xl border border-white/5 text-slate-300 text-[10px] font-black uppercase tracking-widest font-syne">
                        <i class="bi bi-building text-[#c9a227]"></i> Corporate
                    </span>
                    <span class="flex items-center gap-3 px-5 py-2.5 bg-white/5 rounded-2xl border border-white/5 text-slate-300 text-[10px] font-black uppercase tracking-widest font-syne">
                        <i class="bi bi-hearts text-[#c9a227]"></i> Weddings
                    </span>
                    <span class="flex items-center gap-3 px-5 py-2.5 bg-white/5 rounded-2xl border border-white/5 text-slate-300 text-[10px] font-black uppercase tracking-widest font-syne">
                        <i class="bi bi-trophy text-[#c9a227]"></i> Award Shows
                    </span>
                    <span class="flex items-center gap-3 px-5 py-2.5 bg-white/5 rounded-2xl border border-white/5 text-slate-300 text-[10px] font-black uppercase tracking-widest font-syne">
                        <i class="bi bi-broadcast text-[#c9a227]"></i> Virtual Events
                    </span>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-6 pt-4">
                    <a href="#contact" class="w-full sm:w-auto px-12 py-5 bg-[#c9a227] text-slate-950 font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-white hover:text-slate-900 transition-all shadow-2xl shadow-[#c9a227]/20 active:scale-95 text-center">
                        <i class="bi bi-calendar-check-fill mr-3"></i>
                        Book Now
                    </a>
                    <a href="tel:{{ config('site.phone') }}" class="w-full sm:w-auto px-12 py-5 bg-white/5 border border-white/10 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-white/10 transition-all text-center">
                        <i class="bi bi-telephone-fill mr-3"></i>
                        {{ config('site.phone_display') }}
                    </a>
                </div>

                <!-- Simple Stats Grid -->
                <div class="grid grid-cols-3 gap-10 pt-16 border-t border-white/5">
                    <div>
                        <div class="text-3xl md:text-4xl font-syne font-black text-white mb-1">500<span class="text-[#c9a227]">+</span></div>
                        <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Events Hosted</div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-syne font-black text-white mb-1">15<span class="text-[#c9a227]">+</span></div>
                        <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Years Exp</div>
                    </div>
                    <div>
                        <div class="text-3xl md:text-4xl font-syne font-black text-white mb-1">50<span class="text-[#c9a227]">+</span></div>
                        <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Cities</div>
                    </div>
                </div>

            </div>

            <!-- Right: Media -->
            <div class="relative group" data-aos="fade-left">
                <div class="absolute -inset-4 bg-[#c9a227]/10 rounded-[60px] lg:rounded-[100px] blur-3xl group-hover:bg-[#c9a227]/20 transition-all duration-1000"></div>
                <div class="relative rounded-[60px] lg:rounded-[100px] overflow-hidden aspect-[4/5] shadow-2xl border border-white/10 bg-slate-900">
                    <img 
                        src="{{ asset($hero['image'] ?? 'img/gallery/vidhu_front.jpeg') }}" 
                        class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110" 
                        alt="{{ config('site.name') }}"
                    >
                    
                    <!-- Glass Floating Card -->
                    <div class="absolute bottom-10 left-10 right-10 p-8 bg-slate-900/40 backdrop-blur-2xl border border-white/10 rounded-[40px] shadow-2xl transform transition-transform duration-700 group-hover:-translate-y-2">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 rounded-2xl bg-[#c9a227] flex items-center justify-center text-slate-950 text-3xl shadow-xl">
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <div>
                                <h3 class="text-white font-syne font-black text-lg mb-1 tracking-tight">Youth Icon Award</h3>
                                <p class="text-[#c9a227] text-[10px] font-black uppercase tracking-widest italic">Best Female Anchor — Jammu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
