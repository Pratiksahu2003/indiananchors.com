@extends('layouts.main')

@section('title', config('site.name') . ' | ' . config('site.tagline'))

@section('seo')
    <meta name="description" content="{{ config('site.description') }}">
    <meta name="keywords" content="{{ config('site.keywords') }}">
@endsection

@section('content')
    @include('sections.hero')

    <!-- Brand Marquee Expansion -->
    <section class="py-20 bg-white border-b border-slate-100 overflow-hidden">
        <div class="container mx-auto px-6">
            <p class="text-center text-[10px] font-black uppercase tracking-[0.4em] text-slate-400 mb-12">Trusted By Global Brands</p>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-40 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-700">
                <div class="text-2xl font-black font-syne text-slate-400">GOOGLE</div>
                <div class="text-2xl font-black font-syne text-slate-400">AMAZON</div>
                <div class="text-2xl font-black font-syne text-slate-400">BMW</div>
                <div class="text-2xl font-black font-syne text-slate-400">TATA</div>
                <div class="text-2xl font-black font-syne text-slate-400">RELIANCE</div>
                <div class="text-2xl font-black font-syne text-slate-400">VIETJET</div>
            </div>
        </div>
    </section>

    <!-- Professional Services Grid -->
    <section id="what" class="py-32 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24" data-aos="fade-up">
                <span class="text-xs font-black uppercase text-indigo-500 tracking-[0.4em] mb-4 block">Our Specialties</span>
                <h2 class="text-5xl md:text-7xl font-syne font-black text-slate-900 tracking-tighter leading-tight">Professional <span class="text-indigo-600 italic">Offerings</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Card 1: Corporate -->
                <a href="#corporate-event-anchors" class="group p-12 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-slate-900 hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-2xl mb-8 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-building-fill"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tight mb-4 leading-none">Corporate Events</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 font-dm leading-relaxed text-sm">Elevating executive conferences and global summits with professional poise and brand-aligned hosting.</p>
                </a>
                <!-- Card 2: Weddings -->
                <a href="#wedding-anchors" class="group p-12 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-slate-900 hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-2xl mb-8 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-balloon-heart-fill"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tight mb-4 leading-none">Wedding Anchors</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 font-dm leading-relaxed text-sm">Transforming celebrations into magical experiences with unmatched energy and cultural fluency.</p>
                </a>
                <!-- Card 3: Award Shows -->
                <a href="#award-show-hosts" class="group p-12 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-slate-900 hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-2xl mb-8 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-trophy-fill"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tight mb-4 leading-none">Award Nights</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 font-dm leading-relaxed text-sm">Honouring achievers with high-definition timing and elegant stage presence globally.</p>
                </a>
                <!-- Card 4: Brand Launch -->
                <a href="#brand-launch-hosts" class="group p-12 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-slate-900 hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-2xl mb-8 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-rocket-takeoff-fill"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tight mb-4 leading-none">Brand Launches</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 font-dm leading-relaxed text-sm">Giving your product the spotlight it deserves with high-impact storytelling and buzz.</p>
                </a>
                <!-- Card 5: Podcast -->
                <a href="#podcast-hosts" class="group p-12 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-slate-900 hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-2xl mb-8 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-mic-fill"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tight mb-4 leading-none">Podcast Mastery</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 font-dm leading-relaxed text-sm">Conversational expertise and professional voice artistry for high-reach digital platforms.</p>
                </a>
                <!-- Card 6: Virtual -->
                <a href="#virtual-event-anchors" class="group p-12 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-slate-900 hover:shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-2xl mb-8 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tight mb-4 leading-none">Virtual Hosting</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 font-dm leading-relaxed text-sm">Connecting digital audiences across screens with the same energy as a live stadium.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Content Sections: Preserved Verbatim but with Tailwind UI -->
    
    <!-- Corporate Section -->
    <section id="corporate-event-anchors" class="py-32 bg-slate-950 text-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div data-aos="fade-right">
                    <span class="text-indigo-500 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Elite Professionalism</span>
                    <h2 class="text-5xl md:text-7xl font-syne font-black mb-10 tracking-tighter leading-[0.85]">Corporate Event <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-indigo-600 italic">Anchors</span></h2>
                    <p class="text-lg md:text-xl text-slate-400 font-dm leading-relaxed mb-6">From annual conferences to seminars, product launches to team offsites — Indian Anchors brings professional polish and engaging energy to every corporate gathering. Whether you need a formal keynote host or an interactive emcee who keeps the room alive, we tailor the tone to match your brand and audience.</p>
                    <p class="text-lg md:text-xl text-slate-400 font-dm leading-relaxed mb-10">Our corporate hosting includes seamless coordination with your event team, custom scripts aligned to your agenda, and the ability to handle Q&A sessions, panel moderation, and award presentations with confidence and flair.</p>
                    <a href="#contact" class="inline-block px-12 py-5 bg-indigo-600 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-white hover:text-slate-900 transition-all shadow-xl active:scale-95">Book for Your Event</a>
                </div>
                <div class="relative group" data-aos="fade-left">
                    <div class="absolute -inset-4 bg-indigo-600/20 rounded-[50px] blur-3xl group-hover:bg-indigo-600/30 transition-all duration-700"></div>
                    <img src="{{ asset('img/gallery/offer.jpeg') }}" class="relative z-10 rounded-[60px] shadow-2xl transition-transform duration-1000 group-hover:scale-105 border border-white/5">
                </div>
            </div>
        </div>
    </section>

    <!-- Wedding Section -->
    <section id="wedding-anchors" class="py-32 bg-slate-50 overflow-hidden text-slate-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                 <div class="order-2 lg:order-1 relative group" data-aos="fade-right">
                    <div class="absolute -inset-4 bg-indigo-200/50 rounded-[50px] blur-3xl group-hover:bg-indigo-300 transition-all duration-700"></div>
                    <img src="{{ asset('img/gallery/client.jpeg') }}" class="relative z-10 rounded-[60px] shadow-2xl transition-transform duration-1000 group-hover:scale-105 border border-white/10">
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <span class="text-indigo-600 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Magical Celebrations</span>
                    <h2 class="text-5xl md:text-7xl font-syne font-black mb-10 tracking-tighter leading-[0.85]">Wedding <br><span class="text-indigo-600 italic">Anchors</span></h2>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed mb-6">Make your big day unforgettable. Indian Anchors brings warmth, humour, and perfect flow to sangeets, receptions, and full wedding ceremonies. We ensure your guests feel included, the schedule runs smoothly, and every moment — from grand entrances to emotional exchanges — is handled with grace and energy.</p>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed mb-12 italic">Fluent in English, Hindi, Haryanavi & Punjabi, we connect with families and friends of all ages. From traditional rituals to modern celebrations, we adapt our hosting style to reflect your vision and create memories that last a lifetime.</p>
                    <a href="#contact" class="inline-block px-12 py-5 bg-slate-900 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-indigo-600 transition-all shadow-xl active:scale-95">Book for Your Wedding</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Award Show Section -->
    <section id="award-show-hosts" class="py-32 bg-white overflow-hidden text-slate-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div data-aos="fade-right">
                    <span class="text-indigo-600 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Elite Hosting</span>
                    <h2 class="text-5xl md:text-7xl font-syne font-black mb-10 tracking-tighter leading-[0.85]">Award Show <br><span class="text-indigo-600 italic">Hosts</span></h2>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed mb-6">Recognize excellence with style. Indian Anchors honours achievers with grace, energy, and impeccable timing. Whether it's an industry gala, internal recognition night, or a high-profile awards ceremony, we ensure every honoree feels celebrated and every moment resonates with the audience.</p>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed mb-10">We handle everything from opening remarks to trophy presentations, keeping the pace engaging and the atmosphere electric. Our experience with national and international award events means we deliver professionalism that matches the prestige of the occasion.</p>
                    <a href="#contact" class="inline-block px-12 py-5 bg-slate-900 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-indigo-600 transition-all shadow-xl active:scale-95">Host Your Award Night</a>
                </div>
                <div class="relative group" data-aos="fade-left">
                    <img src="{{ asset('img/gallery/vidi.jpeg') }}" class="rounded-[60px] shadow-2xl h-[550px] w-full object-cover border border-slate-100 transition-transform duration-1000 group-hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-40 bg-slate-950 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-950/40 via-slate-950 to-indigo-900/10 z-0"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-6xl md:text-8xl font-syne font-black text-white mb-2 tracking-tighter">Numbers That <span class="text-indigo-500 italic">Speak</span></h2>
            <p class="text-slate-400 font-dm text-lg md:text-xl max-w-2xl mx-auto mb-24 pb-12 border-b border-white/5 opacity-80">A decade of presence, thousands of lives touched and countless successful shows globally.</p>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-16 lg:gap-32">
                @foreach(config('site.stats', []) as $stat)
                <div data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="text-7xl md:text-[120px] font-syne font-black text-white mb-4 tracking-tighter leading-none">{{ $stat['end'] }}<span class="text-indigo-500 text-3xl md:text-6xl">{{ $stat['suffix'] ?? '' }}</span></div>
                    <div class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Watch In Action Section -->
    <section class="py-32 bg-slate-50 overflow-hidden" id="videos">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24" data-aos="fade-up">
                <span class="text-xs font-black uppercase text-indigo-500 tracking-[0.4em] mb-4 block">Action on Stage</span>
                <h2 class="text-5xl md:text-7xl font-syne font-black text-slate-900 tracking-tighter">Live Stage <span class="text-indigo-600 italic">Moments</span></h2>
                <p class="text-slate-500 font-dm text-lg md:text-xl mt-6 max-w-2xl mx-auto">See {{ config('site.name') }} bring energy, charm & unforgettable moments to every global audience.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" data-aos="fade-up">
                @foreach(config('videos.videos', []) as $video)
                <div class="bg-white p-5 rounded-[50px] shadow-sm border border-slate-100 hover:shadow-2xl transition-all group overflow-hidden">
                    <div class="aspect-video relative overflow-hidden rounded-[35px] bg-slate-900">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $video['id'] }}" title="{{ $video['title'] ?? config('site.name') }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-16 text-center">
                <a href="{{ config('site.social.youtube') }}" target="_blank" class="inline-flex items-center gap-4 px-12 py-5 bg-red-600 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-slate-900 transition-all shadow-xl shadow-red-500/20 active:scale-95 leading-none">
                    <i class="bi bi-youtube text-lg"></i> Official YouTube Channel
                </a>
            </div>
        </div>
    </section>

    <!-- Content Sections Continued -->

    <!-- Brand Launch Hosts -->
    <section id="brand-launch-hosts" class="py-32 bg-white overflow-hidden text-slate-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="order-2 lg:order-1 relative group" data-aos="fade-right">
                    <img src="{{ asset('img/gallery/offer.jpeg') }}" class="rounded-[60px] shadow-2xl h-[550px] w-full object-cover border border-slate-100 transition-transform duration-[1500ms] group-hover:scale-105">
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <span class="text-indigo-600 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Product Innovation</span>
                    <h2 class="text-5xl md:text-7xl font-syne font-black mb-10 tracking-tighter leading-[0.85]">Brand Launch <br><span class="text-indigo-600 italic">Hosts</span></h2>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed mb-6">Give your brand the spotlight it deserves. Indian Anchors turns product launches, rebrand reveals, and corporate milestones into memorable experiences. We work closely with your marketing and events team to craft a script and flow that amplifies your message and creates buzz.</p>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed">From intimate press gatherings to large-scale launch parties, we bring energy, sophistication, and the ability to adapt on the fly. Your brand story deserves a host who can tell it with impact — and we're here to deliver.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Podcast Hosts -->
    <section id="podcast-hosts" class="py-32 bg-slate-50 overflow-hidden text-slate-900">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div data-aos="fade-right">
                    <span class="text-indigo-600 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Voice Artistry</span>
                    <h2 class="text-5xl md:text-7xl font-syne font-black mb-10 tracking-tighter leading-[0.85]">Podcast <br><span class="text-indigo-600 italic">Hosts</span></h2>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed mb-6">Bring your podcast to life with a host who knows how to hold attention. Indian Anchors brings clarity, warmth, and conversational flow to audio and video podcasts. Whether you need a permanent host, a guest episode host, or someone to moderate panel discussions, we help your content stand out.</p>
                    <p class="text-lg md:text-xl text-slate-500 font-dm leading-relaxed">Our multilingual capability and experience with diverse audiences make us ideal for podcasts targeting Indian and global listeners. From tech and business to culture and entertainment — we adapt our tone to match your brand and keep listeners engaged.</p>
                </div>
                <div class="relative group" data-aos="fade-left">
                    <img src="{{ asset('img/gallery/vidi.jpeg') }}" class="rounded-[60px] shadow-2xl h-[550px] w-full object-cover border border-slate-100 transition-transform duration-[1500ms] group-hover:scale-110 grayscale hover:grayscale-0 duration-1000">
                </div>
            </div>
        </div>
    </section>

    <!-- Virtual Event Anchors -->
    <section id="virtual-event-anchors" class="py-32 bg-slate-950 text-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="order-2 lg:order-1 relative group" data-aos="fade-right">
                    <div class="absolute -inset-4 bg-indigo-500/10 rounded-[60px] blur-3xl"></div>
                    <img src="{{ asset('img/gallery/vidhu_front.jpeg') }}" class="relative z-10 rounded-[60px] shadow-2xl h-[600px] w-full object-cover border border-white/5 transition-transform duration-[2000ms] group-hover:scale-105">
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <span class="text-indigo-500 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Digital Reach</span>
                    <h2 class="text-5xl md:text-7xl font-syne font-black mb-10 tracking-tighter leading-[0.85]">Virtual Event <br><span class="text-indigo-500 italic text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-indigo-600">Anchors</span></h2>
                    <p class="text-lg md:text-xl text-slate-400 font-dm leading-relaxed mb-6">Virtual doesn't mean impersonal. Indian Anchors brings the same energy and connection to online events — webinars, virtual conferences, hybrid gatherings, and live-streamed celebrations. We keep remote audiences engaged, manage transitions smoothly, and create moments that feel real even across screens.</p>
                    <p class="text-lg md:text-xl text-slate-400 font-dm leading-relaxed">With experience in both in-person and virtual hosting, we understand the nuances of camera presence, timing, and interactive elements like Q&A and polls. Whether your audience is in the room or across the globe, we ensure they stay connected and invested.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Why Choose Us -->
    <section id="why" class="py-32 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24" data-aos="fade-up">
                 <span class="text-xs font-black uppercase text-indigo-600 tracking-[0.4em] mb-4 block">The Advantage</span>
                 <h2 class="text-5xl md:text-7xl font-syne font-black text-slate-900 tracking-tighter leading-tight">Why Choose <span class="text-indigo-600 italic">Me</span>?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['i' => 'bi-stars', 't' => 'Complete Hosting Solution', 'd' => 'Dynamic, captivating, and adaptable — beyond being a traditional host.'],
                    ['i' => 'bi-emoji-smile', 't' => 'Endless Entertainment', 'd' => 'Boundless enthusiasm, energetic environment — unforgettable times.'],
                    ['i' => 'bi-gem', 't' => 'Sharp & Fashionable', 'd' => 'Elegance, Wittiness, Eloquence, and Sophistication.'],
                    ['i' => 'bi-lightning-charge', 't' => 'Active Hosting', 'd' => 'Exciting, mesmerizing, immersive — a journey like no other.']
                ] as $b)
                <div class="group p-10 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-slate-900 hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="w-16 h-16 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-2xl mb-8 group-hover:bg-indigo-600 group-hover:text-white transition-all shadow-sm">
                        <i class="{{ $b['i'] }}"></i>
                    </div>
                    <h3 class="text-xl font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tight mb-4 leading-none">{{ $b['t'] }}</h3>
                    <p class="text-slate-500 group-hover:text-slate-400 font-dm leading-relaxed text-sm">{{ $b['d'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section About -->
    <section id="about" class="py-32 bg-slate-50 overflow-hidden text-slate-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row items-center gap-16 md:gap-24">
                    <div class="w-64 h-64 md:w-80 md:h-80 shrink-0 relative group" data-aos="fade-right">
                        <div class="absolute -inset-4 bg-indigo-600/20 rounded-full blur-2xl group-hover:bg-indigo-600/30 transition-all"></div>
                        <img src="{{ asset(config('site.about_image')) }}" class="relative z-10 w-full h-full object-cover rounded-full border-8 border-white shadow-2xl grayscale hover:grayscale-0 transition-all duration-1000">
                    </div>
                    <div data-aos="fade-left">
                         <span class="text-xs font-black uppercase text-indigo-600 tracking-[0.4em] mb-4 block">Personal Story</span>
                         <h2 class="text-5xl md:text-7xl font-syne font-black mb-10 tracking-tighter uppercase leading-[0.85]">I'm <span class="text-indigo-600 italic small-caps">{{ config('site.name') }}</span></h2>
                         <p class="text-xl font-syne font-bold text-slate-700 leading-snug mb-8">A Defining Moment: Indian Anchors Honored as Best Female Anchor (Jammu) at Youth Icon Awards</p>
                         <p class="text-lg text-slate-500 font-dm leading-relaxed mb-6">Success is not built overnight — it is earned through consistency, confidence, and courage to stand out. For Indian Anchors, that defining moment came at the prestigious Youth Icon Awards, hosted during the grand SPL Cricket Trophy Unveiling Ceremony at the iconic Constitution Club of India.</p>
                         <p class="text-lg text-slate-500 font-dm leading-relaxed italic border-l-4 border-indigo-600 pl-8 my-10">In the presence of respected spiritual leader Devkinandan Thakur and internationally renowned motivational speaker Vivek Bindra, Indian Anchors was proudly honored with the title of <strong class="text-slate-900">Best Female Anchor (Jammu)</strong> — a recognition that celebrates not just talent, but impact.</p>
                         <p class="text-lg text-slate-500 font-dm leading-relaxed mb-10">Anchoring is not merely about speaking into a microphone; it is about owning the stage, setting the tone of an event, and creating a connection that resonates with every individual in the audience. Her voice carries clarity and authority. Her presence commands attention without demanding it.</p>
                         <a href="tel:{{ config('site.phone') }}" class="inline-flex px-12 py-5 bg-slate-900 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-2xl hover:bg-indigo-600 transition-all shadow-xl active:scale-95 leading-none">Connect with Vidhu</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-40 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end gap-10 mb-20" data-aos="fade-up">
                <div>
                   <span class="text-indigo-600 font-black uppercase tracking-[0.4em] text-[10px] mb-4 block">Visual Chronicles</span>
                   <h2 class="text-5xl md:text-8xl font-syne font-black text-slate-900 leading-[0.85] tracking-tighter uppercase italic">Stage <br><span class="text-indigo-600 lowercase tracking-tight">Presence</span></h2>
                </div>
                <p class="max-w-md text-slate-500 font-dm text-lg opacity-80">From the Heartlands of India to International Arenas, capturing the raw energy and impeccable style that defines every global stage production.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach(config('gallery.images', []) as $img)
                <div class="relative group overflow-hidden rounded-[40px] aspect-[4/5] bg-slate-900" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                    <img src="{{ asset('img/gallery/' . $img['file']) }}" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-110 group-hover:rotate-1 opacity-90 group-hover:opacity-100">
                    <div class="absolute inset-0 bg-indigo-900/60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-all duration-700 backdrop-blur-sm">
                        <div class="w-16 h-16 rounded-full bg-white flex items-center justify-center text-slate-900 text-2xl transform translate-y-10 group-hover:translate-y-0 transition-all duration-700 shadow-2xl">
                             <i class="bi bi-zoom-in"></i>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testi" class="py-32 bg-slate-50 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-28" data-aos="fade-up">
                <span class="text-[10px] font-black uppercase text-indigo-600 tracking-[0.6em] mb-4 block">Wall of Fame</span>
                <h2 class="text-6xl md:text-7xl font-syne font-black text-slate-900 tracking-tighter">What Partners <span class="text-indigo-600 italic">Say</span></h2>
            </div>
            <div class="max-w-6xl mx-auto p-12 lg:p-24 rounded-[70px] bg-white border border-slate-100 shadow-2xl flex flex-col md:flex-row items-center gap-16 relative overflow-hidden" data-aos="fade-up">
                <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-full translate-x-1/2 -translate-y-1/2"></div>
                <div class="w-56 h-72 lg:w-72 lg:h-[400px] rounded-[50px] overflow-hidden shrink-0 shadow-2xl border-4 border-indigo-50 relative group">
                    <img src="{{ asset('img/gallery/client.jpeg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-[2000ms]">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="relative z-10">
                    <div class="flex gap-2 text-yellow-400 mb-10">
                        @for($i=0; $i<5; $i++) <i class="bi bi-star-fill text-lg"></i> @endfor
                    </div>
                    <p class="text-3xl md:text-4xl text-slate-800 italic font-dm mb-12 leading-tight tracking-tight">"Beyond anchoring, Vidhu's talent as an entertainer is equally commendable. Her lively energy and knack for bringing an element of surprise to every event make her a crowd favorite. She ensures every moment is memorable."</p>
                    <div class="flex items-center gap-6 pt-10 border-t border-slate-100">
                        <div>
                            <cite class="not-italic block font-syne font-black text-slate-900 uppercase tracking-tighter text-2xl">Natassha Sharma</cite>
                            <span class="text-[10px] font-black uppercase text-indigo-500 tracking-[0.4em] mt-1 block">Mumbai, Maharashtra</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-40 bg-white overflow-hidden">
        <div class="container mx-auto px-6 max-w-5xl">
            <div class="text-center mb-24" data-aos="fade-up">
                <span class="text-xs font-black uppercase text-indigo-500 tracking-[0.4em] mb-4 block">Knowledge Base</span>
                <h2 class="text-5xl md:text-8xl font-syne font-black text-slate-900 tracking-tighter leading-[0.85]">Common <br><span class="text-indigo-600 italic">Queries</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach([
                    ['q' => 'What events do you host?', 'a' => 'Specialize in weddings, corporate galas, award ceremonies, product launches, and private celebrity events with high-octane energy.'],
                    ['q' => 'What sets you apart?', 'a' => 'Combines charm, wit, and professionalism with a National Award-winning skill set and multilingual fluency (English, Hindi, Punjabi).'],
                    ['q' => 'Do you customize hosting?', 'a' => 'Absolutely. Every script and tone is tailored to match your specific event theme, brand values, and guest demographics.'],
                    ['q' => 'How to book?', 'a' => 'Directly via the contact form or call +91-7838663434. Early booking is advised as the calendar fills months in advance.'],
                    ['q' => 'Multilingual hosting?', 'a' => 'Yes, proficient in English, Hindi, Haryanavi & Punjabi, enabling deep connection with diverse audiences.'],
                    ['q' => 'Travel capabilities?', 'a' => 'Available for bookings all over India and internationally for premier destination events.'],
                ] as $f)
                <div class="p-10 rounded-[40px] bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-2xl transition-all duration-500 group" data-aos="fade-up">
                    <h3 class="text-xl font-syne font-black text-slate-900 group-hover:text-indigo-600 transition-colors mb-4 uppercase tracking-tighter">{{ $f['q'] }}</h3>
                    <p class="text-slate-500 font-dm leading-relaxed text-sm opacity-80 group-hover:opacity-100 transition-opacity">{{ $f['a'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="p-12 lg:p-24 rounded-[80px] bg-slate-950 shadow-2xl grid grid-cols-1 lg:grid-cols-2 gap-20 items-center overflow-hidden border border-white/5 relative">
                <div class="absolute -top-40 -right-40 w-96 h-96 bg-indigo-600/20 rounded-full blur-[100px] animate-pulse"></div>
                <div class="relative z-10" data-aos="fade-right">
                    <span class="text-indigo-500 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block font-syne">Collaboration</span>
                    <h2 class="text-7xl font-syne font-black text-white mb-10 tracking-tighter leading-[0.85]">Ready to <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-indigo-600 italic">Conversate</span>?</h2>
                    <p class="text-xl text-slate-400 font-dm mb-16 max-w-sm leading-relaxed opacity-80">Share your vision and we'll create a stage experience that defines your event's success.</p>
                    <div class="space-y-12 border-t border-white/10 pt-12">
                        <a href="tel:{{ config('site.phone') }}" class="flex items-center gap-8 group">
                            <div class="w-16 h-16 rounded-2xl bg-white/5 flex items-center justify-center text-white text-2xl group-hover:bg-indigo-600 transition-all shadow-xl shadow-black/50"><i class="bi bi-telephone-fill"></i></div>
                            <div>
                                <span class="text-sm font-syne font-black text-white tracking-[0.2em] uppercase">{{ config('site.phone_display') }}</span>
                            </div>
                        </a>
                        <a href="mailto:{{ config('site.email') }}" class="flex items-center gap-8 group">
                            <div class="w-16 h-16 rounded-2xl bg-white/5 flex items-center justify-center text-white text-2xl group-hover:bg-indigo-600 transition-all shadow-xl shadow-black/50"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <span class="text-sm font-syne font-black text-white tracking-[0.2em] uppercase break-all">{{ config('site.email') }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="relative z-10" data-aos="fade-left">
                    <div class="bg-white p-12 md:p-16 rounded-[40px] md:rounded-[70px] shadow-2xl relative overflow-hidden group">
                        <form action="{{ route('book.submit') }}" method="POST" class="relative z-10 space-y-8">
                            @csrf
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-6">Full Name</label>
                                <input type="text" name="name" placeholder="Ex. Natasha Sharma" required class="w-full px-10 py-6 rounded-3xl bg-slate-50 border-none focus:ring-4 focus:ring-indigo-600/10 outline-none transition-all placeholder:text-slate-300 font-syne font-bold uppercase text-xs tracking-widest">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-6">Email Address</label>
                                <input type="email" name="email" placeholder="example@email.com" required class="w-full px-10 py-6 rounded-3xl bg-slate-50 border-none focus:ring-4 focus:ring-indigo-600/10 outline-none transition-all placeholder:text-slate-300 font-syne font-bold uppercase text-xs tracking-widest">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-black uppercase tracking-widest text-slate-400 ml-6">Event Details</label>
                                <textarea name="message" rows="4" placeholder="Briefly describe your event requirements..." required class="w-full px-10 py-6 rounded-3xl bg-slate-50 border-none focus:ring-4 focus:ring-indigo-600/10 outline-none transition-all placeholder:text-slate-300 font-dm text-sm leading-relaxed"></textarea>
                            </div>
                            <button type="submit" class="w-full py-7 bg-slate-950 text-white font-syne font-black uppercase tracking-[0.3em] text-[10px] rounded-3xl hover:bg-indigo-600 hover:shadow-2xl hover:shadow-indigo-600/30 transition-all active:scale-95 shadow-xl shadow-black/20">Send Booking Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1500,
            easing: 'ease-out-quint',
            once: true,
            offset: 100
        });
    });
</script>
@endpush
