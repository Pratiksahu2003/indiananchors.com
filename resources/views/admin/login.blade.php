<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - IndianAnchors</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 flex items-center justify-center min-h-screen p-6 overflow-hidden relative">

    <!-- Blurred Accents -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px] -translate-x-1/2 -translate-y-1/2"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-emerald-600/10 rounded-full blur-[120px] translate-x-1/2 translate-y-1/2"></div>

    <div class="w-full max-w-md bg-white/5 border border-white/10 backdrop-blur-3xl rounded-[32px] p-10 relative z-10 shadow-2xl">
        <div class="text-center mb-10">
            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-indigo-700 rounded-2xl flex items-center justify-center text-white text-3xl mx-auto mb-6 shadow-xl shadow-indigo-500/20">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h1 class="text-white text-3xl font-black tracking-tight mb-2 uppercase italic">Admin Portal</h1>
            <p class="text-slate-400 font-medium">Securely access your management dashboard.</p>
        </div>

        @if($errors->any())
            <div class="bg-rose-500/10 border border-rose-500/20 rounded-2xl p-4 mb-8 text-rose-400 text-sm font-medium flex items-center gap-3">
                <i class="fas fa-exclamation-circle"></i> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-slate-400 text-xs font-bold uppercase tracking-widest mb-3 ml-1">Email Address</label>
                <div class="relative group">
                    <i class="fas fa-envelope absolute left-5 top-1/2 -translate-y-1/2 text-slate-500 group-focus-within:text-indigo-400 transition-colors"></i>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-14 pr-6 text-white outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500/50 transition-all font-medium placeholder-slate-600"
                        placeholder="admin@indiananchors.com">
                </div>
            </div>

            <div>
                <label class="block text-slate-400 text-xs font-bold uppercase tracking-widest mb-3 ml-1">Secure Password</label>
                <div class="relative group">
                    <i class="fas fa-lock absolute left-5 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-indigo-400 transition-colors"></i>
                    <input type="password" name="password" required
                        class="w-full bg-white/5 border border-white/10 rounded-2xl py-4 pl-14 pr-6 text-white outline-none focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500/50 transition-all font-medium placeholder-slate-600"
                        placeholder="••••••••">
                </div>
            </div>

            <div class="flex items-center justify-between py-2 ml-1">
                <label class="flex items-center gap-2 cursor-pointer group">
                    <input type="checkbox" name="remember" class="w-4 h-4 rounded border-white/10 bg-white/5 text-indigo-500 focus:ring-indigo-500 focus:ring-offset-slate-900">
                    <span class="text-slate-400 text-sm group-hover:text-slate-300 transition-colors">Remember me</span>
                </label>
                <a href="#" class="text-indigo-400 text-sm font-bold hover:text-indigo-300 transition-colors">Forgot Pwd?</a>
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-black py-4 rounded-2xl shadow-xl shadow-indigo-600/20 active:scale-[0.98] transition-all uppercase tracking-widest">
                Authorize Access
            </button>
        </form>

        <p class="mt-10 text-center text-slate-500 text-xs font-medium">
            Managed by IndianAnchors IT Team. © 2026
        </p>
    </div>

</body>
</html>
