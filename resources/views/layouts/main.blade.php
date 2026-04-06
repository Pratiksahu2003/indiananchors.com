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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

    <!-- Header -->
    <header id="header" class="hdr">
        <div class="container hdr__inner">
            <a href="{{ url('/') }}" class="hdr__logo" aria-label="{{ config('site.name') }}">
                <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="hdr__logo-img">
            </a>

            <nav class="hdr__nav" id="hdr-nav" aria-label="Main navigation">
                <a href="{{ url('/') }}#what" class="hdr__link">What I Offer</a>
                <a href="{{ url('/') }}#corporate-event-anchors" class="hdr__link">Services</a>
                <a href="{{ route('blog.index') }}" class="hdr__link {{ request()->routeIs('blog.*') ? 'active' : '' }}">Blog</a>
                <a href="{{ url('/') }}#about" class="hdr__link">About</a>
                <a href="{{ url('/') }}#gallery" class="hdr__link">Gallery</a>
                <a href="{{ url('/') }}#testi" class="hdr__link">Testimonials</a>
            </nav>

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
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>

    <main class="main-modern">
        @yield('content')

        <!-- Footer (Consistent) -->
        <footer class="footer-new">
            <div class="container">
                <div class="footer-new__grid">
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
                    <div class="footer-new__col">
                        <h4 class="footer-new__col-title">Quick Links</h4>
                        <ul class="footer-new__links">
                            <li><a href="{{ url('/') }}#what">What I Offer</a></li>
                            <li><a href="{{ route('blog.index') }}">Our Blog</a></li>
                            <li><a href="{{ url('/') }}#gallery">Gallery</a></li>
                            <li><a href="{{ url('/') }}#testi">Testimonials</a></li>
                            <li><a href="{{ url('/') }}#contact">Book Now</a></li>
                        </ul>
                    </div>
                    <div class="footer-new__col">
                        <h4 class="footer-new__col-title">Services</h4>
                        <ul class="footer-new__links">
                            <li><a href="{{ url('/') }}#corporate-event-anchors">Corporate Events</a></li>
                            <li><a href="{{ url('/') }}#wedding-anchors">Weddings</a></li>
                            <li><a href="{{ url('/') }}#award-show-hosts">Award Shows</a></li>
                            <li><a href="{{ url('/') }}#podcast-hosts">Podcasts</a></li>
                        </ul>
                    </div>
                    <div class="footer-new__col">
                        <h4 class="footer-new__col-title">Get In Touch</h4>
                        <ul class="footer-new__contact">
                            <li><i class="bi bi-telephone-fill"></i> <a href="tel:{{ config('site.phone') }}">{{ config('site.phone_display') }}</a></li>
                            <li><i class="bi bi-envelope-fill"></i> <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></li>
                        </ul>
                        <a href="{{ url('/') }}#contact" class="footer-new__cta">Book Your Event</a>
                    </div>
                </div>
                <div class="footer-new__bottom">
                    <p class="footer-new__copy">
                        © {{ config('site.footer_copyright') }} <a href="{{ route('home') }}" target="_blank" rel="noopener">{{ config('site.site_url') }}</a> · All Rights Reserved
                    </p>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const openBtn = document.getElementById('open-chat-button');
            const container = document.getElementById('chatbot-container');
            if (openBtn && container) {
                openBtn.addEventListener('click', () => container.classList.add('active'));
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
