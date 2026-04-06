<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Admin Dashboard</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        [x-cloak] {
            display: none !important;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(226, 232, 240, 1);
        }
    </style>
    @stack('styles')
</head>

<body class="bg-[#f8fafc] text-slate-800">

    <div class="flex h-screen overflow-hidden" x-data="{ sidebarOpen: true }">
        <!-- Sidebar -->
        <aside class="bg-slate-900 text-slate-300 w-64 flex-shrink-0 flex flex-col transition-all duration-300"
            :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full fixed inset-y-0 z-50'">
            <div class="p-6 flex items-center justify-between">
                <span class="text-xl font-bold text-white flex items-center gap-2">
                    <i class="fas fa-newspaper text-indigo-400"></i>InDianAnchors
                </span>
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-white">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <nav class="flex-1 px-4 space-y-1 py-4 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-600 text-white' : '' }}">
                    <i class="fas fa-chart-line w-5"></i> Dashboard
                </a>
                <div class="pt-4 pb-2 text-xs font-semibold text-slate-500 uppercase px-4">Content Management</div>
                <a href="{{ route('admin.posts.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.posts.*') ? 'bg-indigo-600 text-white' : '' }}">
                    <i class="fas fa-file-alt w-5"></i> Blog Posts
                </a>
                <a href="{{ route('admin.categories.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.categories.*') ? 'bg-indigo-600 text-white' : '' }}">
                    <i class="fas fa-folder w-5"></i> Categories
                </a>
                <a href="{{ route('admin.tags.index') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.tags.*') ? 'bg-indigo-600 text-white' : '' }}">
                    <i class="fas fa-tags w-5"></i> Tags
                </a>
            </nav>

            <div class="p-4 border-t border-slate-800">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="flex items-center gap-3 px-4 py-2 w-full text-left rounded-lg text-slate-400 hover:text-red-400 hover:bg-slate-800">
                        <i class="fas fa-sign-out-alt w-5"></i> Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col h-full bg-[#f1f5f9] overflow-hidden">
            <!-- Header -->
            <header class="h-16 glass-card px-8 flex items-center justify-between z-10">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-lg hover:bg-slate-100 lg:hidden">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h1 class="text-lg font-semibold text-slate-800">@yield('page_title', 'Admin Area')</h1>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium">{{ Auth::user()->name ?? 'Administrator' }}</span>
                    <div
                        class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold border border-indigo-200">
                        {{ substr(Auth::user()->name ?? 'A', 0, 1) }}
                    </div>
                </div>
            </header>

            <!-- Scrollable Content -->
            <div class="flex-1 overflow-y-auto p-8">
                @if(session('success'))
                    <div
                        class="bg-emerald-50 text-emerald-700 p-4 rounded-xl border border-emerald-200 mb-6 flex items-center gap-3">
                        <i class="fas fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="bg-rose-50 text-rose-700 p-4 rounded-xl border border-rose-200 mb-6">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>

    @stack('scripts')
</body>

</html>