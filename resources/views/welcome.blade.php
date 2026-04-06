@extends('layouts.main')

@section('title', config('site.name') . ' | ' . config('site.tagline'))

@section('seo')
    <meta name="description" content="{{ config('site.description') }}">
    <meta name="keywords" content="{{ config('site.keywords') }}">
@endsection

@section('content')
    @include('sections.hero')

    <!-- Experienced Anchor Section -->
    <section id="experienced" class="py-24 bg-slate-50 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <span class="inline-block px-4 py-2 bg-indigo-100 text-indigo-600 font-bold tracking-widest uppercase text-xs rounded-full mb-6">Expertise</span>
                <h2 class="text-4xl md:text-5xl lg:text-7xl font-syne font-black text-slate-900 mb-8 leading-tight">
                    Experienced Anchor For All Your <span class="text-indigo-600">Important Events</span>
                </h2>
                <div class="text-xl text-slate-500 font-dm leading-relaxed space-y-6">
                    <p>India’s National Award Winner - Best Anchor and Entertainer. Vidhu provides more than just a voice; she provides a presence that elevates the entire room. Her voice carries clarity and authority, and her presence commands attention without demanding it.</p>
                    <p>Indains Anchors has consistently demonstrated quality. Whether it’s a seminar, a convention, or a conference, Indian Anchors consistently demonstrates quality. Her voice carries clarity and authority, and her presence commands the room. We have worked with some of the biggest names in the corporate world.</p>
                </div>
                <div class="mt-12 flex flex-wrap justify-center gap-4">
                    <a href="#contact" class="px-10 py-5 bg-slate-900 text-white font-syne font-bold rounded-2xl hover:bg-indigo-600 hover:shadow-2xl hover:shadow-indigo-500/30 transition-all active:scale-95">Book Now</a>
                    <a href="#what" class="px-10 py-5 bg-white text-slate-700 font-syne font-bold rounded-2xl border border-slate-200 hover:bg-slate-50 transition-all active:scale-95">Explore Offerings</a>
                </div>
            </div>
        </div>
    </section>

    <!-- What I Offer Section -->
    <section id="what" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <span class="text-xs font-black uppercase text-indigo-500 tracking-[0.3em] mb-4 block">What I Offer</span>
                <h2 class="text-5xl font-syne font-black text-slate-900">Professional <span class="text-indigo-600">Services</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Card 1 -->
                <div class="group p-10 rounded-[40px] bg-slate-50 border border-slate-100/50 hover:bg-white hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500" data-aos="fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl mb-8 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-building"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-bold text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors">Corporate Event Anchors</h3>
                    <p class="text-slate-500 font-dm">Whether it’s a seminar, a convention, or a conference, Indian Anchors consistently demonstrates quality. Her voice carries clarity and authority, and her presence commands the room. We have worked with some of the biggest names in the corporate world.</p>
                </div>
                <!-- Card 2 -->
                <div class="group p-10 rounded-[40px] bg-slate-50 border border-slate-100/50 hover:bg-white hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl mb-8 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-hearts"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-bold text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors">Wedding Anchors</h3>
                    <p class="text-slate-500 font-dm">Make your wedding day special with Jammu’s best wedding anchor. We specialize in Sangeet, Reception, and other wedding ceremonies. We bring the charm, elegance and energy that your special day deserves.</p>
                </div>
                <!-- Card 3 -->
                <div class="group p-10 rounded-[40px] bg-slate-50 border border-slate-100/50 hover:bg-white hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl mb-8 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-trophy"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-bold text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors">Award Show Hosts</h3>
                    <p class="text-slate-500 font-dm">Hosting award shows requires glitz and glam. We bring that to your event. Indian Anchors has hosted some of the most prestigious award shows in the country.</p>
                </div>
                <!-- Card 4 -->
                <div class="group p-10 rounded-[40px] bg-slate-50 border border-slate-100/50 hover:bg-white hover:shadow-2xl hover:shadow-indigo-500/10 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-100 flex items-center justify-center text-indigo-600 text-2xl mb-8 group-hover:scale-110 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <h3 class="text-2xl font-syne font-bold text-slate-900 mb-4 group-hover:text-indigo-600 transition-colors">Podcast Hosts</h3>
                    <p class="text-slate-500 font-dm">Hosting a podcast requires a certain set of skills. We have them. Indian Anchors has been hosting podcasts for some of the biggest brands in the country.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Detailed Descriptions Restored -->
    <section id="corporate-event-anchors" class="py-24 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-5xl font-syne font-black text-slate-900 mb-8">Corporate Event <span class="text-indigo-600">Anchors</span></h2>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed">Whether it’s a seminar, a convention, or a conference, Indian Anchors consistently demonstrates quality. Her voice carries clarity and authority, and her presence commands the room. We have worked with some of the biggest names in the corporate world.</p>
                </div>
                <div class="relative" data-aos="fade-left">
                    <img src="{{ asset('img/gallery/offer.jpeg') }}" class="rounded-[40px] shadow-2xl grayscale hover:grayscale-0 transition-all duration-700">
                </div>
            </div>
        </div>
    </section>

    <section id="wedding-anchors" class="py-24 bg-slate-50 overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="order-2 lg:order-1 relative" data-aos="fade-right">
                    <img src="{{ asset('img/gallery/client.jpeg') }}" class="rounded-[40px] shadow-2xl">
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left">
                    <h2 class="text-5xl font-syne font-black text-slate-900 mb-8">Wedding <span class="text-indigo-600">Anchors</span></h2>
                    <p class="text-xl text-slate-500 font-dm leading-relaxed">Make your wedding day special with Jammu’s best wedding anchor. We specialize in Sangeet, Reception, and other wedding ceremonies. We bring the charm, elegance and energy that your special day deserves.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="py-32 bg-slate-900 relative">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-5xl font-syne font-black text-white mb-8">Numbers That <span class="text-indigo-400">Speak</span></h2>
            <p class="text-slate-400 font-dm text-lg max-w-2xl mx-auto mb-20 pb-12 border-b border-white/10">Numbers speak louder than words. A decade of presence, thousands of lives touched and countless successful shows globally.</p>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-24">
                @foreach(config('site.stats', []) as $stat)
                <div data-aos="zoom-in" data-aos-delay="{{ $loop->index * 50 }}">
                    <div class="text-6xl lg:text-8xl font-syne font-black text-white mb-4">{{ $stat['end'] }}<span class="text-indigo-500">{{ $stat['suffix'] ?? '' }}</span></div>
                    <div class="text-xs font-black uppercase tracking-widest text-slate-500">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Me -->
    <section id="why" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20" data-aos="fade-up">
                <span class="text-xs font-black uppercase text-indigo-500 tracking-[0.3em] mb-4 block">Why Choose Me</span>
                <h2 class="text-5xl font-syne font-black text-slate-900">Professional <span class="text-indigo-600">Excellence</span></h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach([
                    ['t' => 'Professionalism and Quality', 'd' => 'We provide the best quality service for your event.'],
                    ['t' => 'Experienced in all types of events', 'd' => 'We have experience in all types of events.'],
                    ['t' => 'National Award Winner', 'd' => 'We are a national award winner.'],
                    ['t' => 'Tailored to your needs', 'd' => 'We provide tailored services to your needs.']
                ] as $b)
                <div class="p-10 rounded-[30px] bg-slate-50 border border-slate-100" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <h3 class="text-xl font-syne font-bold text-slate-900 mb-4">{{ $b['t'] }}</h3>
                    <p class="text-slate-500 font-dm">{{ $b['d'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-5xl font-syne font-black text-slate-900">Gallery</h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <img src="{{ asset('img/gallery/vidhu_front.jpeg') }}" class="rounded-2xl shadow-lg w-full h-64 object-cover" data-aos="zoom-in">
                <img src="{{ asset('img/gallery/offer.jpeg') }}" class="rounded-2xl shadow-lg w-full h-64 object-cover" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('img/gallery/client.jpeg') }}" class="rounded-2xl shadow-lg w-full h-64 object-cover" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('img/gallery/vidi.jpeg') }}" class="rounded-2xl shadow-lg w-full h-64 object-cover" data-aos="zoom-in" data-aos-delay="300">
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testi" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-5xl font-syne font-black text-slate-900">Testimonials</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    ['n' => 'Event Planner', 'c' => 'Aura Events', 'text' => "Vidhu is consistently the first name we list for high-tier corporate galas. Her timing is unmatched."],
                    ['n' => 'Director', 'c' => 'Star Productions', 'text' => "She doesn't just host; she conducts the mood of the room like a maestro. Absolutely professional."],
                    ['n' => 'Marketing Head', 'c' => 'InnoTech Corp', 'text' => "Our product launch was a huge success. Vidhu's energy kept the audience engaged until the very end."]
                ] as $t)
                <div class="p-10 rounded-[40px] bg-slate-50 border border-slate-100" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                    <p class="text-lg text-slate-600 italic font-dm mb-8">"{{ $t['text'] }}"</p>
                    <cite class="not-italic block font-syne font-bold text-slate-900">{{ $t['n'] }}</cite>
                    <span class="text-xs font-black uppercase text-indigo-500">{{ $t['c'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-slate-50">
        <div class="container mx-auto px-6 max-w-4xl text-center">
            <h2 class="text-5xl font-syne font-black text-slate-900 mb-16">Your Questions <span class="text-indigo-600">Answered</span></h2>
            <div class="space-y-6 text-left">
                @foreach([
                    ['q' => 'Which cities do you travel to for events?', 'a' => 'We travel all over India and abroad for events. We have hosted events in cities like Jammu, Delhi, Mumbai, Bangalore, and many more.'],
                    ['q' => 'How can I book you for my event?', 'a' => 'You can book us by calling us at +91-7838663434 or by emailing us at digital@tytil.com.']
                ] as $f)
                <div class="p-8 rounded-3xl bg-white border border-slate-100 shadow-sm" data-aos="fade-up">
                    <h3 class="text-xl font-bold font-syne text-slate-900 mb-4">{{ $f['q'] }}</h3>
                    <p class="text-slate-500 font-dm">{{ $f['a'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white relative">
        <div class="container mx-auto px-6">
            <div class="p-12 lg:p-24 rounded-[60px] bg-slate-900 shadow-2xl grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-6xl font-syne font-black text-white mb-8 tracking-tighter">Ready to <span class="text-indigo-500">Talk</span>?</h2>
                    <p class="text-xl text-slate-400 font-dm mb-12">Let's create an unforgettable experience for your next event.</p>
                    <div class="space-y-6">
                        <a href="tel:{{ config('site.phone') }}" class="flex items-center gap-4 text-2xl font-syne font-bold text-white hover:text-indigo-400 transition-all">
                            <i class="bi bi-telephone-fill"></i> {{ config('site.phone_display') }}
                        </a>
                        <a href="mailto:{{ config('site.email') }}" class="flex items-center gap-4 text-2xl font-syne font-bold text-white hover:text-indigo-400 transition-all">
                            <i class="bi bi-envelope-fill"></i> {{ config('site.email') }}
                        </a>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="bg-white p-12 rounded-[50px] shadow-2xl">
                        <form action="{{ route('book.submit') }}" method="POST" class="space-y-6">
                            @csrf
                            <input type="text" name="name" placeholder="Full Name" required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-none focus:ring-2 focus:ring-indigo-600 outline-none transition-all">
                            <input type="email" name="email" placeholder="Email Address" required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-none focus:ring-2 focus:ring-indigo-600 outline-none transition-all">
                            <textarea name="message" rows="4" placeholder="Event Details" required class="w-full px-8 py-5 rounded-3xl bg-slate-50 border-none focus:ring-2 focus:ring-indigo-600 outline-none transition-all"></textarea>
                            <button type="submit" class="w-full py-6 bg-indigo-600 text-white font-syne font-bold rounded-3xl hover:bg-slate-900 transition-all shadow-xl active:scale-95">Send Booking Request</button>
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
