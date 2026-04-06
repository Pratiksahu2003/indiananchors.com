<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    @yield('seo')
    
    <title>@yield('title', config('site.name') . ' | ' . config('site.tagline'))</title>
    
    <link href="{{ asset(config('site.favicon')) }}" rel="icon">
    <link href="{{ asset(config('site.favicon')) }}" rel="apple-touch-icon">

    @vite(['resources/js/main.js'])
    
    {{-- Compiling Tailwind via NPM for ALL pages --}}
    @vite(['resources/css/blog.css'])

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700&display=swap" rel="stylesheet">
    
    <style>
        .glass-morphism {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .bg-orbs {
            position: fixed;
            inset: 0;
            z-index: -1;
            overflow: hidden;
            background: #020617;
        }
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.2;
            animation: orbFloat 20s infinite alternate ease-in-out;
        }
        .orb-1 { width: 600px; height: 600px; background: #4f46e5; top: -10%; right: -10%; }
        .orb-2 { width: 500px; height: 500px; background: #3730a3; bottom: -10%; left: -10%; animation-delay: -5s; }
        .orb-3 { width: 400px; height: 400px; background: #6366f1; top: 40%; left: 30%; animation-delay: -10s; }
        @keyframes orbFloat {
            from { transform: translate(0, 0) scale(1); }
            to { transform: translate(100px, 100px) scale(1.1); }
        }
        html { scroll-behavior: smooth; }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-950 selection:bg-indigo-500 selection:text-white">

    <!-- Animated Background Orbs -->
    <div class="bg-orbs">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
    </div>

    <!-- Header -->
    <header id="header" class="fixed top-0 left-0 w-full z-[100] transition-all duration-500 bg-slate-900/95 backdrop-blur-xl border-b border-white/5">
        <div class="container mx-auto px-6 h-20 md:h-24 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="h-10 md:h-12 w-auto object-contain group-hover:scale-110 transition-transform">
                <span class="text-xl md:text-2xl font-syne font-black text-white tracking-tighter">{{ config('site.name') }}</span>
            </a>

            <nav class="hidden lg:flex items-center gap-10">
                <a href="{{ url('/') }}#what" class="text-xs font-black uppercase text-slate-400 hover:text-white transition-all tracking-[0.2em]">What I Offer</a>
                <a href="{{ url('/') }}#corporate-event-anchors" class="text-xs font-black uppercase text-slate-400 hover:text-white transition-all tracking-[0.2em]">Services</a>
                <a href="{{ route('blog.index') }}" class="text-xs font-black uppercase {{ request()->routeIs('blog.*') ? 'text-indigo-400 border-b-2 border-indigo-400' : 'text-slate-400' }} hover:text-white transition-all tracking-[0.2em] pb-1">Journal</a>
                <a href="{{ url('/') }}#gallery" class="text-xs font-black uppercase text-slate-400 hover:text-white transition-all tracking-[0.2em]">Photos</a>
            </nav>

            <div class="flex items-center gap-4 md:gap-8">
                <a href="tel:{{ config('site.phone') }}" class="hidden sm:flex items-center gap-3 text-white font-syne font-bold hover:text-indigo-400 transition-all">
                    <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-indigo-400">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <span class="text-sm md:text-base tracking-tight">{{ config('site.phone_display') }}</span>
                </a>
                <a href="{{ url('/') }}#contact" class="px-6 py-3 md:px-8 md:py-4 bg-indigo-600 text-white font-syne font-bold text-sm md:text-base rounded-2xl hover:bg-white hover:text-slate-900 transition-all shadow-xl shadow-indigo-500/20 active:scale-95">
                    Book Now
                </a>
                <button class="lg:hidden text-white text-3xl" id="hdr-burger" aria-label="Toggle menu">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </header>

    <main class="pt-20 md:pt-24">
        @yield('content')

        <!-- Footer (100% Tailwind) -->
        <footer class="bg-slate-950 py-24 border-t border-white/5">
            <div class="container mx-auto px-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 lg:gap-24 mb-20">
                    <div class="space-y-10">
                        <a href="{{ url('/') }}" class="flex items-center gap-4">
                            <img src="{{ asset(config('site.logo')) }}" alt="{{ config('site.name') }}" class="h-12">
                            <span class="text-3xl font-syne font-black text-white tracking-tighter">{{ config('site.name') }}</span>
                        </a>
                        <p class="text-slate-500 font-dm leading-relaxed text-lg">Indian Anchors connects professional event anchors with brands, event planners, and production houses across India. We provide experienced hosts for corporate events, weddings, award shows, podcasts and live productions.</p>
                        <div class="flex items-center gap-6">
                            <a href="{{ config('site.social.instagram') }}" target="_blank" class="w-14 h-14 rounded-[20px] bg-white/5 flex items-center justify-center text-white hover:bg-indigo-600 hover:-translate-y-1 transition-all"><i class="bi bi-instagram shadow-lg"></i></a>
                            <a href="{{ config('site.social.facebook') }}" target="_blank" class="w-14 h-14 rounded-[20px] bg-white/5 flex items-center justify-center text-white hover:bg-indigo-600 hover:-translate-y-1 transition-all"><i class="bi bi-facebook shadow-lg"></i></a>
                            <a href="{{ config('site.social.youtube_shorts') }}" target="_blank" class="w-14 h-14 rounded-[20px] bg-white/5 flex items-center justify-center text-white hover:bg-indigo-600 hover:-translate-y-1 transition-all"><i class="bi bi-youtube shadow-lg"></i></a>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-black uppercase text-indigo-500 tracking-[0.4em] mb-10">Discovery</h4>
                        <ul class="space-y-5 text-slate-400 font-bold font-syne uppercase text-xs tracking-widest">
                            <li><a href="{{ url('/') }}#what" class="hover:text-white transition-all">What I Offer</a></li>
                            <li><a href="{{ route('blog.index') }}" class="hover:text-white transition-all">Our Journal</a></li>
                            <li><a href="{{ url('/') }}#gallery" class="hover:text-white transition-all">Proof Gallery</a></li>
                            <li><a href="{{ url('/') }}#testi" class="hover:text-white transition-all">Testimonials</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-black uppercase text-indigo-500 tracking-[0.4em] mb-10">Pillars</h4>
                        <ul class="space-y-5 text-slate-400 font-bold font-syne uppercase text-xs tracking-widest">
                            <li><a href="{{ url('/') }}#corporate-event-anchors" class="hover:text-white transition-all">Corporate Events</a></li>
                            <li><a href="{{ url('/') }}#wedding-anchors" class="hover:text-white transition-all">Wedding Hosting</a></li>
                            <li><a href="{{ url('/') }}#award-show-hosts" class="hover:text-white transition-all">Award Shows</a></li>
                            <li><a href="{{ url('/') }}#podcast-hosts" class="hover:text-white transition-all">Podcast Presence</a></li>
                        </ul>
                    </div>
                    <div class="bg-white/5 p-10 rounded-[50px] border border-white/5">
                        <h4 class="text-[10px] font-black uppercase text-indigo-500 tracking-[0.4em] mb-8">Direct Contact</h4>
                        <ul class="space-y-6 text-white font-syne font-bold">
                            <li class="flex items-center gap-4"><i class="bi bi-telephone-fill text-indigo-500"></i> <a href="tel:{{ config('site.phone') }}" class="hover:text-indigo-400 transition-all">{{ config('site.phone_display') }}</a></li>
                            <li class="flex items-center gap-4"><i class="bi bi-envelope-fill text-indigo-500"></i> <a href="mailto:{{ config('site.email') }}" class="hover:text-indigo-400 transition-all text-sm md:text-base">{{ config('site.email') }}</a></li>
                        </ul>
                        <a href="{{ url('/') }}#contact" class="mt-12 block w-full py-5 bg-white text-slate-900 text-center font-syne font-black uppercase tracking-widest text-xs rounded-2xl hover:bg-indigo-600 hover:text-white transition-all shadow-2xl active:scale-95">Book Now</a>
                    </div>
                </div>
                <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
                    <p class="text-slate-600 text-[10px] font-black uppercase tracking-[0.3em]">
                        © {{ config('site.footer_copyright') }} {{ config('site.site_url') }} · All Rights Reserved
                    </p>
                    <p class="text-slate-600 text-[10px] font-black uppercase tracking-[0.3em]">
                        Powered by {{ config('site.footer_powered_by') }}
                    </p>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Header burger menu toggle
            const burger = document.getElementById('hdr-burger');
            const nav = document.querySelector('nav');
            if (burger && nav) {
                burger.addEventListener('click', () => {
                    nav.classList.toggle('hidden');
                    nav.classList.toggle('flex');
                    nav.classList.toggle('flex-col');
                    nav.classList.toggle('absolute');
                    nav.classList.toggle('top-20');
                    nav.classList.toggle('left-0');
                    nav.classList.toggle('w-full');
                    nav.classList.toggle('bg-slate-900/95');
                    nav.classList.toggle('p-10');
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
