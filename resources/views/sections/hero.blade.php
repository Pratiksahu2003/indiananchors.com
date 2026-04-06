@php $hero = config('site.hero', []); @endphp
<section id="hero" class="relative min-h-screen flex items-center pt-32 pb-24 lg:pt-0 overflow-hidden bg-white">
    
    <!-- Ultra-Modern Background Signature (Outline Text) -->
    <div class="absolute inset-x-0 top-1/2 -translate-y-1/2 flex justify-center pointer-events-none select-none overflow-hidden z-0">
        <span class="text-[20vw] font-syne font-black text-slate-50 uppercase leading-none mt-20 opacity-40">STAGE</span>
    </div>

    <!-- Sophisticated Ambient Glows -->
    <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-[#c9a227]/5 rounded-full blur-[150px] -translate-y-1/2 translate-x-1/3 z-0"></div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <!-- Left: High-End Content -->
            <div class="space-y-10" data-aos="fade-right">
                <div class="inline-flex items-center gap-4 px-6 py-2.5 rounded-full bg-slate-50 border border-slate-100 text-[#c9a227] font-syne font-black text-[10px] uppercase tracking-[0.5em] shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-[#c9a227] animate-ping"></span>
                    {{ $hero['badge'] ?? 'National Award Winner' }}
                </div>

                <h1 class="text-6xl md:text-8xl lg:text-[110px] font-syne font-black text-slate-950 leading-[0.85] tracking-tighter uppercase relative">
                    India's Most <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#c9a227] to-[#d4af37] italic font-normal inline-block transform -rotate-1 origin-left">Celebrated</span><br>
                    Event Anchor
                </h1>

                <p class="text-xl md:text-2xl text-slate-400 font-dm leading-relaxed max-w-xl italic">
                    {{ $hero['tagline'] ?? 'Best Anchor & Entertainer' }} — weaving elegance, high-octane energy, and cinematic storytelling into every luxury stage.
                </p>

                <!-- Modern Service Pill Grid -->
                <div class="flex flex-wrap items-center gap-4">
                    @foreach(['Corporate', 'Weddings', 'Award Shows', 'Virtual'] as $cat)
                    <div class="group cursor-default">
                        <span class="px-5 py-2.5 bg-white rounded-2xl border border-slate-100 text-slate-400 text-[9px] font-black uppercase tracking-[0.3em] font-syne group-hover:border-[#c9a227] group-hover:text-slate-900 transition-all duration-500 shadow-sm">
                            {{ $cat }}
                        </span>
                    </div>
                    @endforeach
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-6 pt-10">
                    <a href="#contact" class="w-full sm:w-auto px-12 py-5 bg-slate-950 text-[#c9a227] font-syne font-black uppercase tracking-[0.4em] text-[10px] rounded-[20px] hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-[0_20px_50px_-10px_rgba(0,0,0,0.3)] active:scale-95 text-center">
                        Request Availability
                    </a>
                    <a href="tel:{{ config('site.phone') }}" class="w-full sm:w-auto px-12 py-5 bg-white border-2 border-slate-950/5 text-slate-950 font-syne font-black uppercase tracking-[0.4em] text-[10px] rounded-[20px] hover:bg-slate-50 transition-all text-center">
                        {{ config('site.phone_display') }}
                    </a>
                </div>

                <!-- Minimalist Signature Stats -->
                <div class="flex items-center gap-16 pt-16 border-t border-slate-100">
                    <div>
                        <div class="text-3xl font-syne font-black text-slate-950 mb-1 leading-none tracking-tighter">500<span class="text-[#c9a227]">/</span></div>
                        <p class="text-[8px] font-black uppercase tracking-[0.4em] text-slate-300">Global Events</p>
                    </div>
                    <div>
                        <div class="text-3xl font-syne font-black text-slate-950 mb-1 leading-none tracking-tighter">15<span class="text-[#c9a227]">/</span></div>
                        <p class="text-[8px] font-black uppercase tracking-[0.4em] text-slate-300">Stage Years</p>
                    </div>
                    <div>
                        <div class="text-3xl font-syne font-black text-slate-950 mb-1 leading-none tracking-tighter">50<span class="text-[#c9a227]">/</span></div>
                        <p class="text-[8px] font-black uppercase tracking-[0.4em] text-slate-300">Cities Hosted</p>
                    </div>
                </div>

            </div>

            <!-- Right: Media (Cinematic Floating Frame) -->
            <div class="relative group" data-aos="fade-left" data-aos-delay="200">
                <div class="absolute -inset-8 bg-slate-100 rounded-[80px] scale-95 group-hover:scale-100 transition-all duration-1000 opacity-50"></div>
                
                <div class="relative rounded-[70px] overflow-hidden aspect-[4/5] shadow-[0_80px_100px_-30px_rgba(0,0,0,0.2)] border border-white bg-slate-50">
                    <img 
                        src="{{ asset($hero['image'] ?? 'img/gallery/vidhu_front.jpeg') }}" 
                        class="w-full h-full object-cover transition-transform duration-[4000ms] group-hover:scale-110" 
                        alt="{{ config('site.name') }}"
                    >
                    
                    <!-- Floating Recognition Badge (Minimal) -->
                    <div class="absolute bottom-10 left-10 right-10">
                         <div class="p-8 bg-white/40 backdrop-blur-3xl border border-white/20 rounded-[40px] shadow-2xl transform transition-all duration-700 group-hover:-translate-y-2">
                            <div class="flex items-center gap-6">
                                <div class="w-16 h-16 rounded-[22px] bg-[#c9a227] flex items-center justify-center text-slate-950 text-3xl shadow-xl transform -rotate-12 group-hover:rotate-0 transition-transform duration-700">
                                    <i class="bi bi-star-fill"></i>
                                </div>
                                <div>
                                    <h3 class="text-slate-950 font-syne font-black text-lg leading-tight mb-1 tracking-tighter uppercase whitespace-nowrap">Youth Icon India</h3>
                                    <p class="text-[#c9a227] text-[10px] font-black uppercase tracking-[0.2em] italic">Best Female Anchor</p>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>

                <!-- Floating Decor Elements -->
                <div class="absolute -top-10 -right-10 w-24 h-24 bg-[#c9a227] rounded-[30px] -rotate-12 z-0 animate-pulse"></div>
            </div>

        </div>
    </div>
</section>
>
