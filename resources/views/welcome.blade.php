@extends('layouts.main')

@section('title', config('site.name') . ' | ' . config('site.tagline'))

@section('seo')
    <meta name="description" content="{{ config('site.description') }}">
    <meta name="keywords" content="{{ config('site.keywords') }}">
@endsection

@section('content')
    @include('sections.hero')

    <!-- Brand Marquee (My Aesthetic Enhancement) -->
    <section class="py-16 bg-white border-b border-slate-100 overflow-hidden">
        <div class="container mx-auto px-6">
            <p class="text-center text-[10px] font-black uppercase tracking-[0.4em] text-slate-400 mb-10">Trusted By Global Brands</p>
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

    <!-- Professional Services Checklist (Snippet Inspired) -->
    <section id="what" class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-xs font-black uppercase text-indigo-500 tracking-[0.3em] mb-4 block">What I Offer</span>
                <h2 class="text-5xl font-syne font-black text-slate-900 leading-tight">Professional <span class="text-indigo-600">Services</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-8">
                <!-- Service Cards -->
                @foreach([
                    ['icon' => 'bi bi-building-fill', 'title' => 'Corporate Events', 'link' => '#corporate-event-anchors'],
                    ['icon' => 'bi bi-balloon-heart-fill', 'title' => 'Weddings', 'link' => '#wedding-anchors'],
                    ['icon' => 'bi bi-trophy-fill', 'title' => 'Award Shows', 'link' => '#award-show-hosts'],
                    ['icon' => 'bi bi-rocket-takeoff-fill', 'title' => 'Brand Launches', 'link' => '#brand-launch-hosts'],
                    ['icon' => 'bi bi-mic-fill', 'title' => 'Podcasts', 'link' => '#podcast-hosts'],
                    ['icon' => 'bi bi-broadcast', 'title' => 'Virtual Events', 'link' => '#virtual-event-anchors'],
                ] as $s)
                <a href="{{ $s['link'] }}" class="group p-8 rounded-[40px] bg-slate-50 border border-slate-100 flex flex-col items-center text-center hover:bg-slate-900 transition-all duration-500 hover:-translate-y-2">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-indigo-600 text-xl mb-6 shadow-sm group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="{{ $s['icon'] }}"></i>
                    </div>
                    <h3 class="text-sm font-syne font-black uppercase text-slate-900 group-hover:text-white transition-colors">{{ $s['title'] }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Service Detail Sections (Snippet Content) -->
    <section id="corporate-event-anchors" class="section-modern section-service-detail overflow-hidden py-32">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="service-detail-content" data-aos="fade-right">
                    <span class="section-label text-indigo-600 font-black uppercase tracking-widest text-xs mb-4 block">Services</span>
                    <h2 class="text-5xl md:text-6xl font-syne font-black text-slate-900 mb-10 leading-tight">Corporate Event <span class="gradient-text text-indigo-600">Anchors</span></h2>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed mb-6">From annual conferences to seminars, product launches to team offsites — Indian Anchors brings professional polish and engaging energy to every corporate gathering. Whether you need a formal keynote host or an interactive emcee who keeps the room alive, we tailor the tone to match your brand and audience.</p>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed mb-10">Our corporate hosting includes seamless coordination with your event team, custom scripts aligned to your agenda, and the ability to handle Q&A sessions, panel moderation, and award presentations with confidence and flair.</p>
                    <a href="#contact" class="px-10 py-5 bg-slate-900 text-white font-syne font-bold rounded-2xl hover:bg-indigo-600 transition-all">Book for Your Event</a>
                </div>
                <div class="relative group" data-aos="fade-left">
                    <img src="{{ asset('img/gallery/offer.jpeg') }}" class="rounded-[40px] shadow-2xl transition-transform duration-1000 group-hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <section id="wedding-anchors" class="section-modern section-service-detail section-service-alt overflow-hidden py-32 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                 <div class="order-2 lg:order-1 relative group" data-aos="fade-right">
                    <img src="{{ asset('img/gallery/client.jpeg') }}" class="rounded-[40px] shadow-2xl transition-transform duration-1000 group-hover:scale-105">
                </div>
                <div class="service-detail-content order-1 lg:order-2" data-aos="fade-left">
                    <span class="section-label text-indigo-600 font-black uppercase tracking-widest text-xs mb-4 block">Services</span>
                    <h2 class="text-5xl md:text-6xl font-syne font-black text-slate-900 mb-10 leading-tight">Wedding <span class="gradient-text text-indigo-600">Anchors</span></h2>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed mb-6">Make your big day unforgettable. Indian Anchors brings warmth, humour, and perfect flow to sangeets, receptions, and full wedding ceremonies. We ensure your guests feel included, the schedule runs smoothly, and every moment — from grand entrances to emotional exchanges — is handled with grace and energy.</p>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed mb-10">Fluent in English, Hindi, Haryanavi & Punjabi, we connect with families and friends of all ages. From traditional rituals to modern celebrations, we adapt our hosting style to reflect your vision and create memories that last a lifetime.</p>
                    <a href="#contact" class="px-10 py-5 bg-slate-900 text-white font-syne font-bold rounded-2xl hover:bg-indigo-600 transition-all">Book for Your Wedding</a>
                </div>
            </div>
        </div>
    </section>

    <section id="award-show-hosts" class="section-modern section-service-detail overflow-hidden py-32">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="service-detail-content" data-aos="fade-right">
                    <span class="section-label text-indigo-600 font-black uppercase tracking-widest text-xs mb-4 block">Services</span>
                    <h2 class="text-5xl md:text-6xl font-syne font-black text-slate-900 mb-10 leading-tight">Award Show <span class="gradient-text text-indigo-600">Hosts</span></h2>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed mb-6">Recognize excellence with style. Indian Anchors honours achievers with grace, energy, and impeccable timing. Whether it's an industry gala, internal recognition night, or a high-profile awards ceremony, we ensure every honoree feels celebrated and every moment resonates with the audience.</p>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed mb-10">We handle everything from opening remarks to trophy presentations, keeping the pace engaging and the atmosphere electric. Our experience with national and international award events means we deliver professionalism that matches the prestige of the occasion.</p>
                    <a href="#contact" class="px-10 py-5 bg-slate-900 text-white font-syne font-bold rounded-2xl hover:bg-indigo-600 transition-all">Host Your Award Night</a>
                </div>
                <div class="relative" data-aos="fade-left">
                    <img src="{{ asset('img/gallery/vidi.jpeg') }}" class="rounded-[40px] shadow-2xl h-[500px] w-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-32 bg-slate-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-950 to-slate-950 z-0 opacity-50"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-5xl font-syne font-black text-white mb-8">Numbers That <span class="text-indigo-400">Speak</span></h2>
            <p class="text-slate-400 font-dm text-lg max-w-2xl mx-auto mb-20 pb-12 border-b border-white/10">Numbers speak louder than words. A decade of presence, thousands of lives touched and countless successful shows globally.</p>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-24">
                @foreach(config('site.stats', []) as $stat)
                <div data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="text-6xl lg:text-8xl font-syne font-black text-white mb-4 tracking-tighter">{{ $stat['end'] }}<span class="text-indigo-500 text-3xl lg:text-5xl">{{ $stat['suffix'] ?? '' }}</span></div>
                    <div class="text-xs font-black uppercase tracking-widest text-slate-500">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video Showcase (Snippet Inclusion) -->
    <section class="section-modern section-videos py-32 bg-slate-50" id="videos">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="section-label text-indigo-600 font-black uppercase tracking-widest text-xs mb-4 block">Watch</span>
                <h2 class="text-5xl font-syne font-black text-slate-900 mb-6">In <span class="text-indigo-600">Action</span></h2>
                <p class="text-xl text-slate-500 font-dm">See {{ config('site.name') }} bring energy, charm & unforgettable moments to every stage.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                @foreach(config('videos.videos', []) as $video)
                <div class="bg-white p-4 rounded-[40px] shadow-sm border border-slate-100 group transition-all hover:shadow-2xl">
                    <div class="aspect-video relative overflow-hidden rounded-[30px] mb-6">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $video['id'] }}" title="{{ $video['title'] ?? config('site.name') }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-12">
                <a href="{{ config('site.social.youtube') }}" target="_blank" class="inline-flex items-center gap-3 px-10 py-5 bg-red-600 text-white font-syne font-bold rounded-2xl hover:bg-slate-900 transition-all shadow-xl shadow-red-500/20">
                    <i class="bi bi-youtube"></i> More on YouTube
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section id="why" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="text-xs font-black uppercase text-indigo-500 tracking-[0.3em] mb-4 block">Why Me</span>
                <h2 class="text-5xl font-syne font-black text-slate-900">Why Choose <span class="text-indigo-600">{{ config('site.name') }}</span>?</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['i' => 'bi-stars', 't' => 'Complete Hosting Solution', 'd' => 'Dynamic, captivating, and adaptable — beyond being a traditional host.'],
                    ['i' => 'bi-emoji-smile', 't' => 'Endless Entertainment', 'd' => 'Boundless enthusiasm, energetic environment — unforgettable times.'],
                    ['i' => 'bi-gem', 't' => 'Sharp & Fashionable', 'd' => 'Elegance, Wittiness, Eloquence, and Sophistication.'],
                    ['i' => 'bi-lightning-charge', 't' => 'Active Hosting', 'd' => 'Exciting, mesmerizing, immersive — a journey like no other.']
                ] as $b)
                <div class="group p-10 rounded-[50px] bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-2xl transition-all" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 text-xl mb-8 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="{{ $b['i'] }}"></i>
                    </div>
                    <h3 class="text-xl font-syne font-bold text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors uppercase tracking-tight">{{ $b['t'] }}</h3>
                    <p class="text-slate-500 font-dm leading-relaxed">{{ $b['d'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-32 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-end gap-10 mb-20" data-aos="fade-up">
                <div>
                   <span class="text-indigo-600 font-black uppercase tracking-[0.4em] text-[10px] mb-4 block">Gallery</span>
                   <h2 class="text-5xl font-syne font-black text-slate-900 leading-tight">Stage <span class="gradient-text italic">Chronicles</span></h2>
                </div>
                <p class="max-w-md text-slate-500 font-dm text-lg">From the Heartlands of India to International Arenas, capturing the raw energy and impeccable style of every event.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach(config('gallery.images', []) as $img)
                <div class="relative group overflow-hidden rounded-[30px]" data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                    <img src="{{ asset('img/gallery/' . $img['file']) }}" class="w-full h-80 object-cover transition-transform duration-1000 group-hover:scale-110">
                    <div class="absolute inset-0 bg-indigo-600/60 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-all">
                        <i class="bi bi-zoom-in text-white text-3xl"></i>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testi" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="section-label text-indigo-600 font-black uppercase tracking-widest text-xs mb-4 block">Testimonials</span>
                <h2 class="text-5xl font-syne font-black text-slate-900">What Partners Say</h2>
            </div>
            <div class="max-w-5xl mx-auto p-12 lg:p-20 rounded-[60px] bg-slate-50 border border-slate-100 shadow-sm flex flex-col md:flex-row items-center gap-12" data-aos="fade-up">
                <div class="w-48 h-48 rounded-[40px] overflow-hidden shrink-0 shadow-2xl relative group">
                    <img src="{{ asset('img/gallery/client.jpeg') }}" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-700">
                </div>
                <div>
                    <div class="flex gap-1 text-yellow-400 mb-6">
                        @for($i=0; $i<5; $i++) <i class="bi bi-star-fill text-xs"></i> @endfor
                    </div>
                    <p class="text-2xl text-slate-700 italic font-dm mb-8 leading-relaxed">"Beyond anchoring, Vidhu's talent as an entertainer is equally commendable. Her lively energy and knack for bringing an element of surprise to every event make her a crowd favorite. From humorous banter to heartfelt interactions, she ensures every moment is memorable."</p>
                    <cite class="not-italic block font-syne font-black text-slate-900 uppercase tracking-tighter text-xl">Natassha Sharma</cite>
                    <span class="text-xs font-black uppercase text-indigo-500 tracking-widest">Mumbai, Maharashtra</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-32 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="p-12 lg:p-24 rounded-[60px] bg-slate-900 shadow-2xl grid grid-cols-1 lg:grid-cols-2 gap-20 items-center overflow-hidden">
                <div class="absolute top-0 right-0 w-80 h-80 bg-indigo-600/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <div class="relative z-10" data-aos="fade-right">
                    <span class="section-label light text-indigo-400 font-black uppercase tracking-[0.4em] text-[10px] mb-6 block">Get In Touch</span>
                    <h2 class="text-7xl font-syne font-black text-white mb-10 tracking-tighter">Ready to <span class="gradient-text italic text-indigo-500">Talk</span>?</h2>
                    <p class="text-xl text-slate-400 font-dm mb-12 max-w-sm leading-relaxed">Let's create an unforgettable experience for your next event. Share your vision and we'll make it happen together.</p>
                    <div class="space-y-10 border-t border-white/10 pt-10">
                        <a href="tel:{{ config('site.phone') }}" class="flex items-center gap-6 group">
                            <div class="w-16 h-16 rounded-2xl bg-white/5 flex items-center justify-center text-white text-2xl group-hover:bg-indigo-600 transition-all"><i class="bi bi-telephone-fill"></i></div>
                            <div>
                                <span class="text-2xl font-syne font-black text-white tracking-widest">{{ config('site.phone_display') }}</span>
                            </div>
                        </a>
                        <a href="mailto:{{ config('site.email') }}" class="flex items-center gap-6 group">
                            <div class="w-16 h-16 rounded-2xl bg-white/5 flex items-center justify-center text-white text-2xl group-hover:bg-indigo-600 transition-all"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <span class="text-2xl font-syne font-black text-white break-all tracking-widest">{{ config('site.email') }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="relative z-10" data-aos="fade-left">
                    <div class="bg-white p-12 rounded-[50px] shadow-2xl relative overflow-hidden">
                        <form action="{{ route('book.submit') }}" method="POST" class="relative z-10 space-y-6">
                            @csrf
                            <input type="text" name="name" placeholder="Your Name" required class="w-full px-8 py-6 rounded-3xl bg-slate-50 border-none focus:ring-2 focus:ring-indigo-600 outline-none transition-all placeholder:text-slate-400 font-dm">
                            <input type="email" name="email" placeholder="Email Address" required class="w-full px-8 py-6 rounded-3xl bg-slate-50 border-none focus:ring-2 focus:ring-indigo-600 outline-none transition-all placeholder:text-slate-400 font-dm">
                            <input type="tel" name="phone" placeholder="Phone Number" required class="w-full px-8 py-6 rounded-3xl bg-slate-50 border-none focus:ring-2 focus:ring-indigo-600 outline-none transition-all placeholder:text-slate-400 font-dm">
                            <textarea name="message" rows="4" placeholder="Briefly describe your event..." required class="w-full px-8 py-6 rounded-3xl bg-slate-50 border-none focus:ring-2 focus:ring-indigo-600 outline-none transition-all placeholder:text-slate-400 font-dm"></textarea>
                            <button type="submit" class="w-full py-6 bg-slate-900 text-white font-syne font-black uppercase tracking-[0.2em] text-xs rounded-3xl hover:bg-indigo-600 hover:shadow-2xl transition-all active:scale-95">Send Message</button>
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
            duration: 1200,
            easing: 'ease-out-quint',
            once: true,
            offset: 100
        });
    });
</script>
@endpush
