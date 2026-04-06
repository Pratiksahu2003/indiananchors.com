@extends('layouts.main')

@section('title', config('site.name') . ' | ' . config('site.tagline'))

@section('seo')
    <meta name="description" content="{{ config('site.description') }}">
    <meta name="keywords" content="{{ config('site.keywords') }}">
@endsection

@section('content')
    @include('sections.hero')

    <!-- Service Sections -->
    <section id="corporate-event-anchors" class="section-modern section-service-detail" data-aos="fade-up">
        <div class="container">
            <div class="service-detail-content">
                <span class="section-label">Services</span>
                <h2 class="section-title">Corporate Event <span class="gradient-text">Anchors</span></h2>
                <p class="service-detail-desc">From annual conferences to seminars, product launches to team offsites — Indian Anchors brings professional polish and engaging energy to every corporate gathering.</p>
                <a href="#contact" class="btn-modern">Book for Your Event</a>
            </div>
        </div>
    </section>

    <section id="wedding-anchors" class="section-modern section-service-detail section-service-alt" data-aos="fade-up">
        <div class="container">
            <div class="service-detail-content">
                <span class="section-label">Services</span>
                <h2 class="section-title">Wedding <span class="gradient-text">Anchors</span></h2>
                <p class="service-detail-desc">Make your big day unforgettable. Indian Anchors brings warmth, humour, and perfect flow to sangeets, receptions, and full wedding ceremonies.</p>
                <a href="#contact" class="btn-modern">Book for Your Wedding</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="section-modern section-stats" data-aos="fade-up">
        <div class="stats-bg"></div>
        <div class="container text-center">
            <h2 class="stats-title">Numbers That <span class="gradient-text">Speak</span></h2>
            <div class="stats-grid">
                @foreach(config('site.stats', []) as $stat)
                <div class="stat-card">
                    <span class="stat-number">{{ $stat['end'] }}{{ $stat['suffix'] ?? '' }}</span>
                    <span class="stat-label">{{ $stat['label'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-modern section-about" data-aos="fade-up">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="{{ asset(config('site.about_image')) }}" alt="{{ config('site.name') }}" class="rounded-[40px] shadow-2xl">
                </div>
                <div class="about-content">
                    <span class="section-label">About</span>
                    <h2 class="about-title font-syne">I'm <span class="gradient-text">{{ config('site.name') }}</span></h2>
                    <p class="about-text">Indian Anchors has consistently demonstrated quality. Her voice carries clarity and authority. Her presence commands attention without demanding it.</p>
                    <a href="tel:{{ config('site.phone') }}" class="btn-modern">Call Now {{ config('site.phone_display') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section-modern section-faq" data-aos="fade-up">
        <div class="container">
            <div class="section-header">
                <span class="section-label">FAQ</span>
                <h2 class="section-title font-syne">Frequently Asked <span class="gradient-text">Questions</span></h2>
            </div>
            <div class="faq-list">
                @foreach([
                    ['q' => 'What kind of events do you host?', 'a' => 'We specialize in corporate, wedding, and award show hosting.'],
                    ['q' => 'How can I book you?', 'a' => 'You can reach us via the contact form or call directly.']
                ] as $faq)
                <div class="faq-item-modern mb-4 p-8 bg-white rounded-3xl border border-slate-100 shadow-sm transition-all hover:bg-slate-50">
                    <h3 class="text-xl font-bold mb-4 font-syne">{{ $faq['q'] }}</h3>
                    <p class="text-slate-500 font-dm">{{ $faq['a'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-modern section-contact" data-aos="fade-up">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info">
                    <span class="section-label">Contact</span>
                    <h2 class="section-title font-syne">Ready to <span class="gradient-text">Talk</span>?</h2>
                    <p class="contact-desc leading-relaxed">Let's create an unforgettable experience for your next event.</p>
                    <div class="mt-12 space-y-6">
                        <a href="tel:{{ config('site.phone') }}" class="flex items-center gap-4 text-xl font-bold hover:text-indigo-600 transition-all font-syne">
                            <i class="bi bi-telephone-fill"></i> {{ config('site.phone_display') }}
                        </a>
                        <a href="mailto:{{ config('site.email') }}" class="flex items-center gap-4 text-xl font-bold hover:text-indigo-600 transition-all font-syne">
                            <i class="bi bi-envelope-fill"></i> {{ config('site.email') }}
                        </a>
                    </div>
                </div>
                <div class="contact-form-wrap">
                    <form action="{{ route('book.submit') }}" method="POST" class="form-group-modern">
                        @csrf
                        <div class="form-row">
                            <input type="text" name="name" placeholder="Full Name" required class="input-modern">
                            <input type="email" name="email" placeholder="Email Address" required class="input-modern">
                        </div>
                        <input type="text" name="event" placeholder="Event Type" required class="input-modern">
                        <textarea name="message" rows="4" placeholder="Your Message" required class="input-modern"></textarea>
                        <button type="submit" class="btn-modern">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000,
            easing: 'ease-out-expo',
            once: true,
            mirror: false
        });
    });
</script>
@endpush
