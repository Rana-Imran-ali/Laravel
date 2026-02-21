<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Imran Developer') }}</title>
    
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-slate-900 text-white font-sans antialiased selection:bg-cyan-500 selection:text-white">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-slate-900/80 backdrop-blur-md fixed w-full z-50 border-b border-white/10">
            <div class="container mx-auto px-6 py-4">
                <div class="flex justify-between items-center">
                    <!-- Brand -->
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                         <div class="w-10 h-10 bg-cyan-500/10 rounded-lg flex items-center justify-center border border-cyan-500/20 group-hover:bg-cyan-500/20 group-hover:scale-105 transition-all duration-300 shadow-[0_0_10px_rgba(6,182,212,0.15)]">
                            <svg class="w-6 h-6 text-cyan-400 group-hover:text-cyan-300 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-white to-slate-400 bg-clip-text text-transparent group-hover:text-white transition">
                            Imran <span class="text-cyan-400">developer</span>
                        </span>
                    </a>

                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-8">
                        <x-nav-link href="{{ url('/#home') }}" :active="false">Home</x-nav-link>
                        <x-nav-link href="{{ url('/#about') }}" :active="false">About</x-nav-link>
                        <x-nav-link href="{{ url('/#projects') }}" :active="false">Projects</x-nav-link>
                        <x-nav-link href="{{ url('/#services') }}" :active="false">Services</x-nav-link>
                        <x-nav-link href="{{ url('/#blog') }}" :active="false">Blog</x-nav-link>
                        
                        <a href="{{ url('/#contact') }}" class="px-5 py-2.5 rounded-full bg-cyan-500 hover:bg-cyan-400 text-slate-900 font-semibold transition-all shadow-[0_0_15px_rgba(6,182,212,0.5)] hover:shadow-[0_0_25px_rgba(6,182,212,0.6)]">
                            Contact Me
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden">
                        <button id="mobile-menu-btn" class="text-white hover:text-cyan-400 focus:outline-none">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden bg-slate-800 border-t border-white/5">
                <div class="px-6 py-4 space-y-3">
                    <a href="{{ url('/#home') }}" class="block text-gray-300 hover:text-cyan-400 py-2">Home</a>
                    <a href="{{ url('/#about') }}" class="block text-gray-300 hover:text-cyan-400 py-2">About</a>
                    <a href="{{ url('/#projects') }}" class="block text-gray-300 hover:text-cyan-400 py-2">Projects</a>
                    <a href="{{ url('/#services') }}" class="block text-gray-300 hover:text-cyan-400 py-2">Services</a>
                    <a href="{{ url('/#blog') }}" class="block text-gray-300 hover:text-cyan-400 py-2">Blog</a>
                    <a href="{{ url('/#contact') }}" class="inline-block mt-2 px-5 py-2 rounded-full bg-cyan-500 text-slate-900 font-semibold">Contact</a>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow pt-48">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-slate-950 border-t border-white/5 py-10 mt-32">
            <div class="container mx-auto px-6 text-center">
                <p class="text-slate-400">&copy; {{ date('Y') }} Imran Developer. All rights reserved.</p>
                <div class="flex justify-center space-x-6 mt-6">
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition">GitHub</a>
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition">LinkedIn</a>
                    <a href="#" class="text-slate-400 hover:text-cyan-400 transition">Twitter</a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
