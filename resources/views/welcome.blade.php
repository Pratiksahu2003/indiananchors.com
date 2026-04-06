@extends('layouts.main')

@section('title', config('site.name') . ' | ' . config('site.tagline'))

@section('seo')
    <meta name="description" content="{{ config('site.description') }}">
    <meta name="keywords" content="{{ config('site.keywords') }}">
@endsection

@section('content')
    @include('sections.hero')

    <!-- Brand Marquee (Using Client Images) -->
    <section class="py-12 bg-white border-b border-slate-50 overflow-hidden">
        <div class="container mx-auto px-6">
            <p class="text-center text-[10px] font-black uppercase tracking-[0.4em] text-slate-400 mb-12">Trusted By Global Brands</p>
            <div class="flex flex-wrap justify-center items-center gap-10 md:gap-16 opacity-40 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-700 h-20 md:h-20">
                @foreach(range(1, 10) as $i)
                    <img src="{{ asset('brand/' . $i . '.png') }}" alt="Client Brand {{ $i }}" class="h-full w-auto object-contain transition-transform duration-500 hover:scale-110">
                @endforeach
            </div>
        </div>
    </section>

    <!-- Professional Services (Restored Gold) -->
    <section id="what" class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="px-5 py-2 rounded-full bg-slate-50 text-[#c9a227] font-syne font-black uppercase text-[10px] tracking-[0.3em] mb-4 inline-block border border-slate-100">Our Specialties</span>
                <h2 class="text-5xl md:text-6xl font-syne font-black text-slate-900 tracking-tighter uppercase sm:lowercase">What we <span class="text-[#c9a227] italic">bring</span> to stage</h2>
            </div>
            
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([
                    ['i' => 'bi-building-fill', 't' => 'Corporate', 'l' => '#corporate-event-anchors', 'd' => 'Annual Meets & Global Summits'],
                    ['i' => 'bi-balloon-heart-fill', 't' => 'Weddings', 'l' => '#wedding-anchors', 'd' => 'Sangeets & Destination Weddings'],
                    ['i' => 'bi-trophy-fill', 't' => 'Award Shows', 'l' => '#award-show-hosts', 'd' => 'Gala Nights & Recognition'],
                    ['i' => 'bi-rocket-takeoff-fill', 't' => 'Launches', 'l' => '#brand-launch-hosts', 'd' => 'Product Unveiling & Buzz'],
                    ['i' => 'bi-mic-fill', 't' => 'Podcasts', 'l' => '#podcast-hosts', 'd' => 'Conversational Voice mastery'],
                    ['i' => 'bi-broadcast', 't' => 'Virtual', 'l' => '#virtual-event-anchors', 'd' => 'Engaging Digital Audiences'],
                    ['i' => 'bi-stars', 't' => 'Concerts', 'l' => '#contact', 'd' => 'High-octane Stage Presence'],
                    ['i' => 'bi-lightning-charge', 't' => 'Socials', 'l' => '#contact', 'd' => 'Private Celebrity gatherings']
                ] as $s)
                <a href="{{ $s['l'] }}" class="group p-8 rounded-[40px] bg-slate-50 border border-slate-100 hover:bg-slate-900 transition-all duration-500 hover:-translate-y-2 text-center">
                    <div class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-[#c9a227] text-xl mb-6 shadow-sm group-hover:bg-[#c9a227] group-hover:text-slate-950 transition-all mx-auto">
                        <i class="{{ $s['i'] }}"></i>
                    </div>
                    <h3 class="text-lg font-syne font-black text-slate-900 group-hover:text-white transition-all uppercase tracking-tighter leading-tight mb-2">{{ $s['t'] }}</h3>
                    <p class="text-[10px] font-dm text-slate-500 group-hover:text-slate-400 uppercase tracking-widest leading-relaxed">{{ $s['d'] }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Compact Detail Blocks (Standard White Background for Clarity) -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="space-y-32">
                <!-- Corporate -->
                <div id="corporate-event-anchors" class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div data-aos="fade-right">
                        <span class="text-[#c9a227] font-black uppercase text-[10px] tracking-[0.4em] mb-4 block italic">Professional Poise</span>
                        <h2 class="text-4xl md:text-5xl font-syne font-black mb-8 tracking-tighter uppercase leading-none text-slate-950">Corporate <span class="text-[#c9a227]">Events</span></h2>
                        <p class="text-slate-500 font-dm text-lg leading-relaxed mb-6 italic">From seminars to product launches, Indian Anchors brings professional polish and engaging energy. Whether formal keynote hosting or interactive hosting that keeps the room alive, we tailor the tone to match your brand and audience.</p>
                        <ul class="space-y-4 mb-10">
                            @foreach(['Annual Conferences','Product Launches','Team Building','Award Galas'] as $p)
                                <li class="flex items-center gap-3 text-slate-600 text-sm font-dm"><i class="bi bi-check2-circle text-[#c9a227]"></i> {{ $p }}</li>
                            @endforeach
                        </ul>
                        <a href="#contact" class="inline-flex px-8 py-3.5 bg-slate-950 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-xl hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-xl active:scale-95 leading-none">Book Corporate</a>
                    </div>
                    <div class="relative group h-[350px] md:h-[420px] lg:h-[480px]" data-aos="fade-left">
                         <div class="absolute -inset-4 bg-[#c9a227]/5 rounded-[50px] blur-3xl"></div>
                        <img src="{{ asset('img/gallery/offer.jpeg') }}" class="relative w-full h-full object-cover rounded-[40px] shadow-2xl transition-transform duration-1000 group-hover:scale-105 border border-slate-100 grayscale hover:grayscale-0 transition-all">
                    </div>
                </div>

                <!-- Wedding -->
                <div id="wedding-anchors" class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="order-2 lg:order-1 relative group h-[350px] md:h-[420px] lg:h-[480px]" data-aos="fade-right">
                         <div class="absolute -inset-4 bg-[#c9a227]/5 rounded-[50px] blur-3xl"></div>
                        <img src="{{ asset('img/gallery/client.jpeg') }}" class="relative w-full h-full object-cover rounded-[40px] shadow-2xl transition-transform duration-1000 group-hover:scale-105 border border-slate-100">
                    </div>
                    <div class="order-1 lg:order-2" data-aos="fade-left">
                        <span class="text-[#c9a227] font-black uppercase text-[10px] tracking-[0.4em] mb-4 block italic">Cultural Vibrancy</span>
                        <h2 class="text-4xl md:text-5xl font-syne font-black mb-8 tracking-tighter uppercase leading-none text-slate-950">Wedding <span class="text-[#c9a227]">Celebrations</span></h2>
                        <p class="text-slate-500 font-dm text-lg leading-relaxed mb-6 italic">Indian Anchors brings warmth, humour and perfect flow to sangeets and receptions. We ensure your guests feel included, the schedule runs smoothly, and every moment — from grand entrances to emotional exchanges — is handled with grace.</p>
                        <div class="flex flex-wrap gap-3 mb-10">
                            @foreach(['Hindi','English','Punjabi','Haryanavi'] as $lang)
                                <span class="px-4 py-2 bg-slate-50 border border-slate-200 rounded-full text-[10px] font-black uppercase tracking-widest text-slate-600 group-hover:bg-[#c9a227] group-hover:text-slate-950 group-hover:border-[#c9a227] transition-all">{{ $lang }}</span>
                            @endforeach
                        </div>
                        <a href="#contact" class="inline-flex px-8 py-3.5 bg-slate-950 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-xl hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-xl active:scale-95 leading-none">Inquire for Wedding</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats & Achievements (Gold Theme) -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 text-center">
                @foreach(config('site.stats', []) as $stat)
                <div data-aos="zoom-in" data-aos-delay="{{ $loop->index * 100 }}">
                    <div class="text-5xl md:text-7xl font-syne font-black text-slate-950 mb-2 tracking-tighter">{{ $stat['end'] }}<span class="text-[#c9a227] text-3xl">{{ $stat['suffix'] ?? '' }}</span></div>
                    <div class="text-[10px] font-syne font-black uppercase tracking-[0.3em] text-slate-400">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Video Grid (Restored Gold) -->
    <section class="py-24 bg-slate-50 overflow-hidden" id="videos">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="px-5 py-2 rounded-full bg-slate-100 text-[#c9a227] font-syne font-black uppercase text-[10px] tracking-[0.3em] mb-4 inline-block border border-slate-200">The Stage Moments</span>
                <h2 class="text-5xl font-syne font-black text-slate-900 tracking-tighter uppercase sm:lowercase">High Energy <span class="text-[#c9a227] italic">Action</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" data-aos="fade-up">
                @foreach(config('videos.videos', []) as $video)
                <div class="bg-white p-4 rounded-[40px] shadow-sm border border-slate-100 hover:shadow-2xl transition-all group overflow-hidden">
                    <div class="aspect-video relative overflow-hidden rounded-[30px] bg-slate-900">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $video['id'] }}" title="{{ $video['title'] ?? config('site.name') }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section (Gold Highlight) -->
    <section id="about" class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="relative group" data-aos="fade-right">
                    <img src="{{ asset(config('site.about_image')) }}" class="relative z-10 w-full h-[500px] object-cover rounded-[50px] shadow-2xl border-4 border-white grayscale group-hover:grayscale-0 transition-all duration-1000">
                    <!-- Awards Float -->
                    <div class="absolute -top-6 -right-6 p-6 bg-slate-900 rounded-[30px] text-white shadow-2xl transform transition-transform group-hover:-translate-x-2">
                        <i class="bi bi-award-fill text-[#c9a227] text-3xl"></i>
                    </div>
                </div>
                <div data-aos="fade-left">
                     <span class="text-xs font-black uppercase text-[#c9a227] tracking-[0.4em] mb-4 block">Our Founder</span>
                     <h2 class="text-5xl font-syne font-black text-slate-900 tracking-tighter uppercase leading-none mb-6">Indian <br><span class="text-[#c9a227] italic">Anchors</span></h2>
                     <p class="text-lg text-slate-500 font-dm leading-relaxed mb-6">Honored as the <strong class="text-slate-950">Best Female Anchor (Jammu)</strong> at the Youth Icon Awards, witnessing success in front of icons like Vivek Bindra. We believe anchoring means owning the stage and connecting with every heart in the room.</p>
                     <div class="space-y-4 mb-10">
                        @foreach(['Youth Icon Award Winner','15+ Years Mastery','Multilingual Expert','Global Stage Presence'] as $at)
                            <div class="flex items-center gap-3 text-sm font-black uppercase tracking-widest text-slate-400 font-syne"><i class="bi bi-star-fill text-[#c9a227] text-xs"></i> {{ $at }}</div>
                        @endforeach
                     </div>
                     <a href="{{ route('about') }}" class="inline-flex px-8 py-3.5 bg-slate-950 text-white font-syne font-black uppercase tracking-[0.2em] text-[10px] rounded-xl hover:bg-[#c9a227] hover:text-slate-950 transition-all leading-none">Full Brand Story</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Review Section (Gold Quote) -->
    <section id="testi" class="py-24 bg-slate-950 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                 <span class="text-[#c9a227] font-black uppercase tracking-[0.4em] text-[10px] mb-4 block">Wall of Fame</span>
                 <h2 class="text-4xl md:text-5xl font-syne font-black text-white tracking-tighter uppercase">Voices of <span class="text-[#c9a227] italic">Partners</span></h2>
            </div>
            <div class="max-w-4xl mx-auto bg-white/5 border border-white/10 p-12 lg:p-20 rounded-[60px] text-center relative group" data-aos="zoom-in">
                <i class="bi bi-quote text-6xl text-[#c9a227]/30 absolute top-10 left-10"></i>
                <p class="text-xl md:text-2xl text-slate-300 italic font-dm leading-relaxed mb-10 relative z-10">"Beyond anchoring, Vidhu's talent as an entertainer is equally commendable. Her lively energy and knack for bringing an element of surprise to every event make her a crowd favorite. She ensures every moment is memorable."</p>
                <div class="inline-flex flex-col items-center gap-4">
                     <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-[#c9a227]">
                        <img src="{{ asset('img/gallery/client.jpeg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                     </div>
                     <div>
                         <cite class="not-italic block font-syne font-black text-white uppercase tracking-tighter text-xl leading-none">Natassha Sharma</cite>
                         <span class="text-[10px] font-black uppercase text-[#c9a227] tracking-widest mt-2 block">Mumbai, Maharashtra</span>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Gold Highlights) -->
    <section id="faq" class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-4xl font-syne font-black text-slate-900 tracking-tighter uppercase mb-20 text-center">Common <span class="text-[#c9a227] italic underline decoration-[#c9a227]/30">Queries</span></h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                @foreach([
                    ['q' => 'Events you host?', 'a' => 'Weddings, Corporate, Awards, Launches, and Private celebrity galas.'],
                    ['q' => 'What sets you apart?', 'a' => 'National Award winner, 15+ years experience, and multilingual fluency.'],
                    ['q' => 'Booking process?', 'a' => 'Fill the form or call +91-7838663434. Advance booking is recommended.'],
                    ['q' => 'Travel capability?', 'a' => 'Available for Pan-India and international destination events.']
                ] as $f)
                <div class="p-8 rounded-[30px] bg-slate-50 border border-slate-100 group transition-all duration-300" data-aos="fade-up">
                    <h3 class="text-lg font-syne font-black text-slate-900 mb-2 uppercase tracking-tighter group-hover:text-[#c9a227] transition-all">{{ $f['q'] }}</h3>
                    <p class="text-slate-500 font-dm leading-relaxed text-sm">{{ $f['a'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section (Restored Gold) -->
    <section id="contact" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="p-10 md:p-20 rounded-[60px] bg-slate-950 flex flex-col items-center text-center overflow-hidden border border-white/5 relative group">
                <div class="absolute -top-40 -right-40 w-96 h-96 bg-[#c9a227]/10 rounded-full blur-[100px] animate-pulse"></div>
                <div class="max-w-xl space-y-6 mb-16 relative z-10" data-aos="fade-up">
                    <span class="text-[#c9a227] font-black uppercase tracking-[0.4em] text-[10px] block font-syne">Get Started</span>
                    <h2 class="text-5xl md:text-6xl font-syne font-black text-white tracking-tighter leading-none">Ready to <span class="text-[#c9a227] italic">Work</span> Together?</h2>
                    <p class="text-slate-400 font-dm text-lg opacity-80 italic">Join the thousands of brands and families who trusted us for their most precious milestones.</p>
                </div>
                <div class="w-full max-w-4xl bg-white p-12 rounded-[50px] shadow-2xl relative z-10 border border-slate-100" data-aos="fade-up" data-aos-delay="100">
                    <form action="{{ route('book.submit') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @csrf
                        <div class="space-y-4 text-left">
                            <label class="text-[10px] font-black uppercase tracking-widest text-[#c9a227] ml-4 italic">Full Name</label>
                            <input type="text" name="name" placeholder="Natasha Sharma" required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-none focus:ring-4 focus:ring-[#c9a227]/10 outline-none transition-all placeholder:text-slate-200 font-syne font-bold uppercase text-[10px] tracking-[0.2em]">
                        </div>
                        <div class="space-y-4 text-left">
                            <label class="text-[10px] font-black uppercase tracking-widest text-[#c9a227] ml-4 italic">Phone Number</label>
                            <input type="tel" name="phone" placeholder="+91 00000 00000" required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-none focus:ring-4 focus:ring-[#c9a227]/10 outline-none transition-all placeholder:text-slate-200 font-syne font-bold uppercase text-[10px] tracking-[0.2em]">
                        </div>
                        <div class="md:col-span-2 space-y-4 text-left">
                            <label class="text-[10px] font-black uppercase tracking-widest text-[#c9a227] ml-4 italic">Message</label>
                            <textarea name="message" rows="3" placeholder="Describe your dream event..." required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-none focus:ring-4 focus:ring-[#c9a227]/10 outline-none transition-all placeholder:text-slate-300 font-dm text-sm"></textarea>
                        </div>
                        <div class="md:col-span-2 pt-4">
                            <button type="submit" class="w-full py-6 bg-slate-950 text-white font-syne font-black uppercase tracking-[0.3em] text-[10px] rounded-3xl hover:bg-[#c9a227] hover:text-slate-950 transition-all active:scale-95 leading-none shadow-xl shadow-black/20">Complete Booking Request</button>
                        </div>
                    </form>
                </div>
                <div class="flex flex-wrap items-center justify-center gap-10 mt-16 relative z-10 px-4">
                    <a href="tel:{{ config('site.phone') }}" class="text-white flex items-center gap-3 font-syne font-black uppercase text-[10px] tracking-widest hover:text-[#c9a227] transition-colors"><i class="bi bi-telephone-fill"></i> {{ config('site.phone_display') }}</a>
                    <a href="mailto:{{ config('site.email') }}" class="text-white flex items-center gap-3 font-syne font-black uppercase text-[10px] tracking-widest hover:text-[#c9a227] transition-colors"><i class="bi bi-envelope-fill"></i> {{ config('site.email') }}</a>
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
            offset: 50
        });
    });
</script>
@endpush
