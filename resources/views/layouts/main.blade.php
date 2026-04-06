<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    @yield('seo')
    
    <title>@yield('title', config('site.name') . ' | ' . config('site.tagline'))</title>
    
    <link href="{{ asset(config('site.favicon')) }}" rel="icon">
    <link href="{{ asset(config('site.favicon')) }}" rel="apple-touch-icon">

    @vite(['resources/css/main.css', 'resources/js/main.js'])
    
    {{-- Compiling Tailwind via NPM for Blog pages --}}
    @vite(['resources/css/blog.css'])

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&display=swap" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="index-page modern-ui">

<!-- Animated Background Orbs -->
<div class="bg-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
</div>

<header id="header" class="hdr">
    <div class="container hdr__inner">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="hdr__logo" aria-label="{{ config('site.name') }}">
            <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="hdr__logo-img">
        </a>

        <!-- Desktop Nav -->
        <nav class="hdr__nav" id="hdr-nav" aria-label="Main navigation">
            <a href="{{ url('/') }}#what" class="hdr__link">What I Offer</a>
            <a href="{{ url('/') }}#corporate-event-anchors" class="hdr__link">Services</a>
            <a href="{{ url('/') }}#why" class="hdr__link">Why Us</a>
            @if(!request()->routeIs('home'))
                <a href="{{ route('blog.index') }}" class="hdr__link {{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
            @endif
            <a href="{{ url('/') }}#about" class="hdr__link">About</a>
            <a href="{{ url('/') }}#gallery" class="hdr__link">Gallery</a>
            <a href="{{ url('/') }}#testi" class="hdr__link">Testimonials</a>
        </nav>

        <!-- Right: CTA + Burger -->
        <div class="hdr__right">
            <a href="{{ url('/') }}#contact" class="hdr__cta">
                <i class="bi bi-calendar-check-fill"></i>
                <span class="hdr__cta-text">Book Now</span>
            </a>
            <a href="tel:{{ config('site.phone') }}" class="hdr__phone">
                <i class="bi bi-telephone-fill"></i>
                <span class="hdr__phone-text">{{ config('site.phone_display') }}</span>
            </a>
            <button class="hdr__burger" id="hdr-burger" type="button" aria-label="Toggle menu" aria-expanded="false" aria-controls="hdr-nav">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>
</header>

<main class="main-modern">
    @yield('content')

    <!-- Footer -->
    <footer class="footer-new">
        <div class="container">

            <!-- Footer Grid: Brand + Links + Contact -->
            <div class="footer-new__grid">

                <!-- Brand Column -->
                <div class="footer-new__brand">
                    <a href="{{ url('/') }}" class="footer-new__logo">
                        <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}">
                    </a>
                    <p class="footer-new__tagline">Indian Anchors connects professional event anchors with brands, event planners, and production houses across India. We provide experienced hosts for corporate events, weddings, award shows, podcasts and live productions.</p>
                    <div class="footer-new__social">
                        <a href="{{ config('site.social.instagram') }}" target="_blank" rel="noopener" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="{{ config('site.social.facebook') }}" target="_blank" rel="noopener" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="{{ config('site.social.youtube_shorts') }}" target="_blank" rel="noopener" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Navigation Column -->
                <div class="footer-new__col">
                    <h4 class="footer-new__col-title">Quick Links</h4>
                    <ul class="footer-new__links">
                        <li><a href="{{ url('/') }}#what">What I Offer</a></li>
                        <li><a href="{{ url('/') }}#why">Why Choose Us</a></li>
                        <li><a href="{{ url('/') }}#about">About Me</a></li>
                        <li><a href="{{ url('/') }}#gallery">Gallery</a></li>
                        <li><a href="{{ url('/') }}#testi">Testimonials</a></li>
                        <li><a href="{{ url('/') }}#contact">Book Now</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="footer-new__col">
                    <h4 class="footer-new__col-title">Services</h4>
                    <ul class="footer-new__links">
                        <li><a href="{{ url('/') }}#corporate-event-anchors">Corporate Events</a></li>
                        <li><a href="{{ url('/') }}#wedding-anchors">Weddings</a></li>
                        <li><a href="{{ url('/') }}#award-show-hosts">Award Shows</a></li>
                        <li><a href="{{ url('/') }}#brand-launch-hosts">Brand Launches</a></li>
                        <li><a href="{{ url('/') }}#podcast-hosts">Podcasts</a></li>
                        <li><a href="{{ url('/') }}#virtual-event-anchors">Virtual Events</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="footer-new__col">
                    <h4 class="footer-new__col-title">Get In Touch</h4>
                    <ul class="footer-new__contact">
                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:{{ config('site.phone') }}">{{ config('site.phone_display') }}</a>
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
                        </li>
                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>Pan India</span>
                        </li>
                    </ul>
                    <a href="{{ url('/') }}#contact" class="footer-new__cta">Book Your Event</a>
                </div>

            </div>

            <!-- Footer Bottom Bar -->
            <div class="footer-new__bottom">
                <p class="footer-new__copy">
                    © {{ config('site.footer_copyright') }}
                    <a href="{{ route('home') }}" target="_blank" rel="noopener">{{ config('site.site_url') }}</a>
                    · All Rights Reserved
                    @if(config('site.footer_powered_by'))
                        · Powered by {{ config('site.footer_powered_by') }}
                    @endif
                </p>
            </div>

        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top-modern"><i class="bi bi-arrow-up"></i></a>

    <!-- Float Contact -->
    <div class="float-contact" id="chatbot-open-container">
        <button class="float-btn" id="open-chat-button" aria-label="Contact">
            <i class="bi bi-chat-dots-fill"></i>
        </button>
        <div class="float-dropdown" id="chatbot-container">
            <a href="tel:{{ config('site.phone') }}" class="float-link"><i class="bi bi-telephone-fill"></i> Call</a>
            <a href="https://wa.me/{{ config('site.phone') }}" target="_blank" rel="noopener" class="float-link"><i class="bi bi-whatsapp"></i> WhatsApp</a>
            <a href="mailto:{{ config('site.email') }}" class="float-link"><i class="bi bi-envelope-fill"></i> Email</a>
            <button class="float-close" id="close-chat-button" aria-label="Close"><i class="bi bi-x-lg"></i></button>
        </div>
    </div>
</main>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Chatbot logic
    const openBtn = document.getElementById('open-chat-button');
    const closeBtn = document.getElementById('close-chat-button');
    const container = document.getElementById('chatbot-container');
    if (openBtn && closeBtn && container) {
        openBtn.addEventListener('click', () => {
            container.classList.add('active');
            openBtn.classList.add('hidden');
        });
        closeBtn.addEventListener('click', () => {
            container.classList.remove('active');
            openBtn.classList.remove('hidden');
        });
    }

    // Header logic
    const burger = document.getElementById('hdr-burger');
    const nav = document.getElementById('hdr-nav');
    if (burger && nav) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('active');
            burger.classList.toggle('active');
        });
    }
});
</script>
@stack('scripts')
</body>
</html>
