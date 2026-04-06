<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    @yield('seo')
    
    <title>@yield('title', 'IndianAnchors Blog')</title>
    
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Outfit', sans-serif; }
        .blog-content h2 { font-size: 1.875rem; font-weight: 700; margin-top: 2rem; margin-bottom: 1rem; color: #1e293b; }
        .blog-content p { margin-bottom: 1.5rem; line-height: 1.8; color: #475569; }
        .blog-content ul { list-style: disc; padding-left: 1.5rem; margin-bottom: 1.5rem; }
    </style>
</head>
<body class="bg-white text-slate-800">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="text-2xl font-black text-slate-900 tracking-tight flex items-center gap-2">
                <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white text-xl">
                    <i class="fas fa-anchor"></i>
                </div>
                IndianAnchors
            </a>
            
            <div class="hidden md:flex items-center gap-8 font-semibold text-slate-600">
                <a href="/" class="hover:text-indigo-600 transition-colors">Home</a>
                <a href="#about" class="hover:text-indigo-600 transition-colors">Categories</a>
                <a href="#services" class="hover:text-indigo-600 transition-colors">Our Story</a>
                <a href="{{ route('admin.dashboard') }}" class="px-5 py-2.5 bg-slate-900 text-white rounded-xl hover:bg-indigo-600 transition-all font-bold">Admin Portal</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-slate-950 text-slate-400 py-20 px-6">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="md:col-span-2">
                <h3 class="text-white text-2xl font-bold mb-6 italic">IndianAnchors<span class="text-indigo-500">.</span></h3>
                <p class="max-w-md leading-relaxed">Bringing you the latest insights, news, and features from the world of entertainment and events. Stay tuned for periodic updates.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Quick Links</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:text-white transition-colors">Latest Posts</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Trending</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Sitemap</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-sm">Legal</h4>
                <ul class="space-y-4">
                    <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
