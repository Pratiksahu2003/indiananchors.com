@extends('layouts.main')

@section('title', 'About Us | ' . config('site.name'))

@section('seo')
    <meta name="description" content="Learn about the journey, awards, and professional excellence of {{ config('site.name') }}, India's most celebrated event anchor.">
    <meta name="keywords" content="about vidhu, best female anchor jammu, youth icon award winner, professional emcee india">
@endsection

@section('content')
    <!-- About Hero -->
    <section class="relative min-h-[70vh] flex items-center pt-32 pb-20 overflow-hidden bg-slate-950 text-white">
        <!-- Background accents (Gold) -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#c9a227]/5 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/4 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-[#c9a227]/5 rounded-full blur-[100px] translate-y-1/2 -translate-x-1/4"></div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <span class="inline-block px-6 py-2 rounded-full bg-white/5 border border-white/10 text-[#c9a227] font-syne font-black uppercase text-[10px] tracking-[0.4em] mb-10" data-aos="fade-up">The Voice Behind the Mic</span>
            <h1 class="text-6xl md:text-8xl lg:text-[120px] font-syne font-black tracking-tighter leading-[0.85] mb-12 uppercase" data-aos="fade-up" data-aos-delay="100">
                Our <span class="text-transparent bg-clip-text bg-gradient-to-br from-[#c9a227] to-[#d4af37] italic">Signature</span><br>Legacy
            </h1>
            <p class="text-xl md:text-2xl text-slate-400 font-dm max-w-3xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                More than just an anchor — {{ config('site.name') }} is a movement of elegance, energy, and unmatched professional excellence across global stages.
            </p>
        </div>
    </section>

    <!-- The Journey / Story -->
    <section class="py-32 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative group" data-aos="fade-right">
                    <div class="absolute -inset-4 bg-slate-50 rounded-[60px] blur-2xl group-hover:bg-[#c9a227]/5 transition-all duration-700"></div>
                    <img src="{{ asset('img/gallery/offer.jpeg') }}" class="relative z-10 rounded-[50px] shadow-2xl border border-slate-100">
                    <!-- Floating Stat Badge -->
                    <div class="absolute -bottom-10 -right-10 p-8 bg-slate-950 rounded-[40px] text-white shadow-2xl z-20 hidden md:block">
                        <div class="text-4xl font-syne font-black mb-1">15<span class="text-[#c9a227]">+</span></div>
                        <div class="text-[10px] font-black uppercase tracking-widest text-slate-500">Years of Growth</div>
                    </div>
                </div>
                <div class="space-y-10" data-aos="fade-left">
                    <span class="text-xs font-black uppercase text-[#c9a227] tracking-[0.4em] block">How it Started</span>
                    <h2 class="text-5xl font-syne font-black text-slate-900 tracking-tighter uppercase leading-tight">From a Vision to <br><span class="text-[#c9a227] italic lowercase">the national stage</span></h2>
                    <div class="space-y-6 text-lg text-slate-500 font-dm leading-relaxed italic">
                        <p>Success is not built overnight — it is earned through consistency, confidence, and courage to stand out. The journey of Indian Anchors began with a simple passion for the microphone and has evolved into an award-winning career defining professional hosting in India.</p>
                        <p>At the prestigious Youth Icon Awards, hosted at the Constitution Club of India, Indian Anchors was honored as the <strong class="text-slate-950">Best Female Anchor (Jammu)</strong>. This milestone was witnessed by spiritual leaders and motivational icons like Vivek Bindra, cementing our place as leaders in the industry.</p>
                        <p>Our philosophy is simple: Anchoring is not merely about speaking; it is about owning the stage, setting the unique tone of an event, and creating a connection that resonates with every individual in the audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="py-32 bg-slate-50 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text-xs font-black uppercase text-[#c9a227] tracking-[0.4em] mb-4 block" data-aos="fade-up">Our DNA</span>
                <h2 class="text-5xl font-syne font-black text-slate-900 tracking-tighter" data-aos="fade-up" data-aos-delay="100">The Values We <span class="text-[#c9a227] italic">Stand By</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                @foreach([
                    ['i' => 'bi-lightning-fill', 't' => 'High Energy', 'd' => 'We believe an anchor is the battery of every event. We bring a pulse that never fades.'],
                    ['i' => 'bi-shield-check-fill', 't' => 'Professional Integrity', 'd' => 'Punctuality, precision, and preparedness are the cornerstones of our brand.'],
                    ['i' => 'bi-magic', 't' => 'Fluid Adaptation', 'd' => 'Whether corporate or wedding, we adapt our tone, language and style instantly.']
                ] as $v)
                <div class="p-12 rounded-[50px] bg-white border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="w-16 h-16 rounded-2xl bg-slate-50 flex items-center justify-center text-[#c9a227] text-2xl mb-8 group-hover:bg-[#c9a227] group-hover:text-slate-950 transition-all shadow-sm">
                        <i class="{{ $v['i'] }}"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-black text-slate-900 mb-4 uppercase tracking-tighter leading-none">{{ $v['t'] }}</h3>
                    <p class="text-slate-500 font-dm leading-relaxed text-sm">{{ $v['d'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Detailed Accomplishments -->
    <section class="py-32 bg-slate-950 text-white overflow-hidden relative">
        <div class="absolute inset-0 bg-[#c9a227]/5 opacity-20 animate-pulse"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-5xl md:text-7xl font-syne font-black tracking-tighter uppercase mb-16" data-aos="fade-up">Global <span class="text-[#c9a227] italic lowercase">reach</span></h2>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-20">
                <div data-aos="zoom-in">
                    <div class="text-6xl font-syne font-black text-[#c9a227] mb-2 tracking-tighter">500+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Events Hosted</div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-6xl font-syne font-black text-[#c9a227] mb-2 tracking-tighter">50+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">World-Class Clients</div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-6xl font-syne font-black text-[#c9a227] mb-2 tracking-tighter">15+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Years of Experience</div>
                </div>
                <div data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-6xl font-syne font-black text-[#c9a227] mb-2 tracking-tighter">1MM+</div>
                    <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">Audience Reached</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Connect CTA -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="p-16 lg:p-24 rounded-[60px] bg-slate-950 relative overflow-hidden text-center group" data-aos="zoom-in">
                 <div class="absolute -top-20 -left-20 w-80 h-80 bg-[#c9a227]/5 rounded-full blur-3xl group-hover:bg-[#c9a227]/10 transition-all duration-1000"></div>
                 <h2 class="text-4xl md:text-6xl font-syne font-black text-white mb-10 tracking-tighter relative z-10 leading-tight">Bring the <span class="text-[#c9a227] italic">Master</span> of Stage <br>to Your Event</h2>
                 <div class="flex flex-col sm:flex-row items-center justify-center gap-6 relative z-10">
                    <a href="{{ route('home') }}#contact" class="px-12 py-5 bg-[#c9a227] text-slate-950 font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-white hover:text-slate-900 transition-all shadow-xl active:scale-95 shadow-[#c9a227]/20">Inquire Now</a>
                    <a href="tel:{{ config('site.phone') }}" class="px-12 py-5 bg-white/5 border border-white/10 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-white/10 transition-all">Support Call</a>
                 </div>
            </div>
        </div>
    </section>
@endsection
