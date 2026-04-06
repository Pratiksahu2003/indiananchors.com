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
    
    <style>
        /* Force UI Perfection: Reset all Anchor Tags */
        a, a:hover, a:focus, a:active {
            text-decoration: none !important;
            color: inherit;
            outline: none !important;
            box-shadow: none !important;
        }
        
        /* Premium Navigation - Floating White Pill */
        #header { transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1); background: #ffffff; border-bottom: 1px solid rgba(0,0,0,0.05); }
        #header.scrolled {
            top: 15px;
            width: 92%;
            left: 4%;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.98) !important;
            backdrop-filter: blur(15px) !important;
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }

        /* Navbar Link Logic for White BG */
        #hdr-nav a { 
            position: relative;
            padding: 8px 0;
            color: #475569 !important; /* slate-600 */
        }
        #hdr-nav a:hover, #hdr-nav a.active {
            color: #0f172a !important; /* slate-900 */
        }
        #hdr-nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #c9a227;
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        #hdr-nav a:hover::after, #hdr-nav a.active::after {
            width: 100%;
        }

        /* Responsive Navbar adjustments (Burger & Icons) */
        #header i { color: #0f172a; }

        /* Smooth state transitions */
        a, button, .hover-target { transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important; }
        
        /* Social Icons Gold Glow */
        .social-link:hover {
            background: #c9a227 !important;
            color: #ffffff !important;
            transform: translateY(-5px);
            box-shadow: 0 10px 20px -5px rgba(201, 162, 39, 0.4);
        }
    </style>
</head>
<body class="index-page modern-ui">

<!-- Animated Background Orbs -->
<div class="bg-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
</div>

<header id="header" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-white border-b border-black/5">
    <div class="container mx-auto px-6 h-20 md:h-24 flex items-center justify-between">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="h-10 md:h-12 block group transform transition-transform hover:scale-105" aria-label="{{ config('site.name') }}">
            <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="h-full w-auto">
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden lg:flex items-center gap-10" id="hdr-nav" aria-label="Main navigation">
            <a href="{{ url('/') }}#what" class="text-[11px] font-black uppercase tracking-[0.3em] no-underline">Offer</a>
            <a href="{{ url('/') }}#corporate-event-anchors" class="text-[11px] font-black uppercase tracking-[0.3em] no-underline">Services</a>
            <a href="{{ route('blog.index') }}" class="text-[11px] font-black uppercase tracking-[0.3em] {{ request()->is('blog*') ? 'active' : '' }} no-underline">Blog</a>
            <a href="{{ route('about') }}" class="text-[11px] font-black uppercase tracking-[0.3em] {{ request()->routeIs('about') ? 'active' : '' }} no-underline">About</a>
           <a href="{{ url('/') }}#gallery" class="text-[11px] font-black uppercase tracking-[0.3em] no-underline">Gallery</a>
            <a href="{{ url('/') }}#testi" class="text-[11px] font-black uppercase tracking-[0.3em] no-underline">Reviews</a>
        </nav>

        <!-- Right: CTA + Burger -->
        <div class="flex items-center gap-6">
            <a href="{{ url('/') }}#contact" class="hidden md:flex items-center gap-3 px-8 py-3.5 bg-slate-950 text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-xl hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-xl active:scale-95 leading-none">
                <i class="bi bi-calendar-check-fill text-inherit !important"></i>
                <span>Book Now</span>
            </a>
            <a href="tel:{{ config('site.phone') }}" class="hidden sm:flex items-center justify-center w-12 h-12 bg-slate-50 border border-slate-100 text-slate-950 rounded-xl hover:bg-slate-100 transition-all">
                <i class="bi bi-telephone-fill"></i>
            </a>
            <button class="lg:hidden w-12 h-12 flex flex-col items-center justify-center gap-1.5 rounded-xl bg-slate-50 border border-slate-100" id="hdr-burger" type="button" aria-label="Toggle menu">
                <span class="w-6 h-0.5 bg-slate-950 transition-all"></span>
                <span class="w-6 h-0.5 bg-slate-950 transition-all"></span>
                <span class="w-4 h-0.5 bg-slate-950 self-end transition-all"></span>
            </button>
        </div>

    </div>
</header>

<main class="main-modern">
    @yield('content')

    <!-- Footer -->
    <footer class="py-12 md:py-16 bg-white relative overflow-hidden border-t border-black/5">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[#c9a227]/40 to-transparent"></div>
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-10">
                <!-- Brand Column -->
                <div class="lg:col-span-4 space-y-6">
                    <a href="{{ url('/') }}" class="inline-block h-10">
                        <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="h-full w-auto">
                    </a>
                    <p class="text-slate-600 font-dm leading-relaxed text-sm italic">
                        Connecting India's finest event anchors with global brands and legendary celebrations. Since 2012, we've defined the stage for everything from seminars to dream weddings.
                    </p>
                    <div class="flex items-center gap-4">
                        <a href="{{ config('site.social.instagram') }}" target="_blank" class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-950 social-link"><i class="bi bi-instagram text-sm"></i></a>
                        <a href="{{ config('site.social.facebook') }}" target="_blank" class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-950 social-link"><i class="bi bi-facebook text-sm"></i></a>
                        <a href="{{ config('site.social.youtube_shorts') }}" target="_blank" class="w-10 h-10 rounded-xl bg-slate-50 border border-slate-100 flex items-center justify-center text-slate-950 social-link"><i class="bi bi-youtube text-sm"></i></a>
                    </div>
                </div>

                <!-- Navigation Column -->
                <div class="lg:col-span-2">
                    <h4 class="text-slate-950 font-syne font-black uppercase tracking-[0.4em] text-[10px] mb-8 border-l-2 border-[#c9a227] pl-4">Explore</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}#what" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">What I Offer</a></li>
                        <li><a href="{{ url('/') }}#why" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Why Me?</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Insights</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">The Story</a></li>
                        <li><a href="{{ url('/') }}#gallery" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Portfolio</a></li>
                    </ul>
                </div>

                <!-- Services Column -->
                <div class="lg:col-span-3">
                    <h4 class="text-slate-950 font-syne font-black uppercase tracking-[0.4em] text-[10px] mb-8 border-l-2 border-[#c9a227] pl-4">Expertise</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ url('/') }}#corporate-event-anchors" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Corporate Events</a></li>
                        <li><a href="{{ url('/') }}#wedding-anchors" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Wedding Hosting</a></li>
                        <li><a href="{{ url('/') }}#award-show-hosts" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Award Show Host</a></li>
                        <li><a href="{{ url('/') }}#brand-launch-hosts" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Product Launches</a></li>
                        <li><a href="{{ url('/') }}#podcast-hosts" class="text-slate-500 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">Podcast Mastery</a></li>
                    </ul>
                </div>

                <!-- Contact Column -->
                <div class="lg:col-span-3">
                    <h4 class="text-slate-950 font-syne font-black uppercase tracking-[0.4em] text-[10px] mb-8 border-l-2 border-[#c9a227] pl-4">Connect</h4>
                    <ul class="space-y-4 mb-8">
                        <li class="flex gap-4 items-center">
                            <div class="w-8 h-8 rounded-lg bg-[#c9a227]/10 flex items-center justify-center text-[#c9a227] text-xs"><i class="bi bi-telephone-fill"></i></div>
                            <a href="tel:{{ config('site.phone') }}" class="text-slate-600 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all">{{ config('site.phone_display') }}</a>
                        </li>
                        <li class="flex gap-4 items-center">
                            <div class="w-8 h-8 rounded-lg bg-[#c9a227]/10 flex items-center justify-center text-[#c9a227] text-xs"><i class="bi bi-envelope-fill"></i></div>
                            <a href="mailto:{{ config('site.email') }}" class="text-slate-600 text-[10px] font-black uppercase tracking-widest hover:text-[#c9a227] transition-all lowercase">{{ config('site.email') }}</a>
                        </li>
                    </ul>
                    <a href="{{ url('/') }}#contact" class="inline-flex px-8 py-3.5 bg-slate-950 text-white text-[10px] font-black uppercase tracking-[0.2em] rounded-xl hover:bg-[#c9a227] hover:text-slate-950 transition-all shadow-xl">Book Now</a>
                </div>
            </div>

            <div class="pt-8 border-t border-black/5 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-[9px] font-black uppercase tracking-[0.3em] text-slate-400">
                    © {{ config('site.footer_copyright') }} · {{ config('site.site_url') }}
                </p>
                <p class="text-[9px] font-black uppercase tracking-[0.3em] text-slate-400">
                    Handcrafted by <span class="text-[#c9a227] uppercase tracking-widest font-black">{{ config('site.footer_powered_by', 'Tytil') }}</span>
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="fixed bottom-10 right-10 w-14 h-14 bg-[#c9a227] text-slate-950 rounded-full flex items-center justify-center opacity-0 invisible transition-all duration-500 z-50 hover:bg-white shadow-2xl"><i class="bi bi-arrow-up"></i></a>

    <!-- Float Contact -->
    <div class="fixed bottom-10 left-10 z-[60]" id="chatbot-open-container">
        <button class="w-16 h-16 bg-[#c9a227] text-slate-950 rounded-2xl flex items-center justify-center text-3xl shadow-2xl hover:scale-105 active:scale-95 transition-all shadow-[#c9a227]/20" id="open-chat-button" aria-label="Contact">
            <i class="bi bi-chat-dots-fill"></i>
        </button>
        <div class="absolute bottom-20 left-0 w-72 bg-slate-900/95 backdrop-blur-xl border border-white/10 rounded-[30px] p-6 shadow-2xl opacity-0 invisible translate-y-10 transition-all duration-500" id="chatbot-container">
            <div class="space-y-4">
                <a href="tel:{{ config('site.phone') }}" class="flex items-center gap-4 p-4 rounded-2xl bg-white/5 hover:bg-white/10 text-white transition-all">
                    <div class="w-10 h-10 rounded-xl bg-[#c9a227] text-slate-950 flex items-center justify-center text-lg"><i class="bi bi-telephone-fill"></i></div>
                    <span class="font-syne font-bold uppercase text-[10px] tracking-widest">Call Now</span>
                </a>
                <a href="https://wa.me/{{ config('site.phone') }}" target="_blank" class="flex items-center gap-4 p-4 rounded-2xl bg-white/5 hover:bg-white/10 text-white transition-all">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center text-lg"><i class="bi bi-whatsapp"></i></div>
                    <span class="font-syne font-bold uppercase text-[10px] tracking-widest">WhatsApp</span>
                </a>
                <a href="mailto:{{ config('site.email') }}" class="flex items-center gap-4 p-4 rounded-2xl bg-white/5 hover:bg-white/10 text-white transition-all">
                    <div class="w-10 h-10 rounded-xl bg-[#d4af37] text-slate-950 flex items-center justify-center text-lg"><i class="bi bi-envelope-fill"></i></div>
                    <span class="font-syne font-bold uppercase text-[10px] tracking-widest">Email Us</span>
                </a>
            </div>
            <button class="absolute -top-3 -right-3 w-8 h-8 rounded-full bg-slate-800 border border-white/10 text-white flex items-center justify-center text-xs" id="close-chat-button"><i class="bi bi-x-lg"></i></button>
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

    // Mobile Nav logic
    const burger = document.getElementById('hdr-burger');
    const nav = document.getElementById('hdr-nav');
    if (burger && nav) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('hidden');
            nav.classList.toggle('flex');
            nav.classList.toggle('flex-col');
            nav.classList.toggle('absolute');
            nav.classList.toggle('top-24');
            nav.classList.toggle('left-0');
            nav.classList.toggle('w-full');
            nav.classList.toggle('bg-slate-900/95');
            nav.classList.toggle('p-10');
            nav.classList.toggle('backdrop-blur-xl');
            nav.classList.toggle('border-b');
            nav.classList.toggle('border-white/5');
            burger.querySelectorAll('span').forEach((span, i) => {
                if(i===0) span.classList.toggle('rotate-45'), span.classList.toggle('translate-y-2');
                if(i===1) span.classList.toggle('opacity-0');
                if(i===2) span.classList.toggle('-rotate-45'), span.classList.toggle('-translate-y-2'), span.classList.toggle('w-6');
            });
        });
    }

    // Scroll Top functionality
    const scrollTop = document.getElementById('scroll-top');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 500) {
            scrollTop.classList.add('opacity-100', 'visible');
            scrollTop.classList.remove('opacity-0', 'invisible');
        } else {
            scrollTop.classList.remove('opacity-100', 'visible');
            scrollTop.classList.add('opacity-0', 'invisible');
        }
    });

    // Header shadow/floating logic
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
</script>
@stack('scripts')
</body>
</html>
