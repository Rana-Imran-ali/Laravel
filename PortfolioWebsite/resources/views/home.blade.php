<x-app-layout>
    <!-- Hero Section -->
    <section id="home" class="container mx-auto px-6 py-80 md:py-96 flex flex-col-reverse md:flex-row items-center gap-16">
        <div class="w-full md:w-1/2 space-y-6">
            <h2 class="text-cyan-400 font-medium tracking-wide text-lg uppercase">Hello, I'm</h2>
            <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                Imran <br>
                <span class="text-slate-300">Developer</span>
            </h1>
            <p class="text-slate-400 text-lg max-w-lg leading-relaxed">
                I am a passionate Web Developer crafting modern, responsive, and user-friendly web experiences. Let's build something amazing together.
            </p>
            <div class="flex gap-4 pt-4">
                <a href="#projects" class="px-8 py-3 rounded-full bg-cyan-500 text-slate-900 font-bold hover:bg-cyan-400 transition shadow-[0_0_20px_rgba(6,182,212,0.4)]">
                    View My Work
                </a>
                <a href="#contact" class="px-8 py-3 rounded-full border border-slate-600 hover:border-cyan-400 hover:text-cyan-400 transition">
                    Contact Me
                </a>
            </div>
        </div>
        
        <!-- Hero Image / Visual -->
        <div class="w-full md:w-1/2 flex justify-center relative">
            <div class="relative w-72 h-72 md:w-96 md:h-96">
                <div class="absolute inset-0 bg-cyan-500/20 rounded-full blur-3xl animate-pulse"></div>
                <div class="relative w-full h-full rounded-2xl overflow-hidden border-2 border-white/10 bg-slate-800 flex items-center justify-center">
                    <!-- Placeholder for User Image -->
                    <span class="text-slate-600 text-6xl">ID</span>
                </div>
                <!-- Decorative Elements -->
                <div class="absolute -top-4 -right-4 w-20 h-20 bg-slate-800 border border-white/10 rounded-xl flex items-center justify-center animate-bounce delay-700">
                    <span class="text-2xl">💻</span>
                </div>
                <div class="absolute -bottom-4 -left-4 w-20 h-20 bg-slate-800 border border-white/10 rounded-xl flex items-center justify-center animate-bounce">
                    <span class="text-2xl">🚀</span>
                </div>
            </div>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" class="container mx-auto px-6 py-80 border-b border-white/5">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="bg-slate-800/50 p-8 rounded-2xl border border-white/5">
                <h3 class="text-2xl font-bold mb-4 text-cyan-400">Who am I?</h3>
                <p class="text-slate-300 leading-relaxed mb-6">
                    I am Imran, a dedicated Web Developer with a passion for building robust and scalable web applications. 
                    I specialize in both frontend and backend development, delivering modern solutions that solve real-world problems.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-slate-300">
                        <span class="text-cyan-500">✓</span> Full Stack Development
                    </li>
                    <li class="flex items-center gap-3 text-slate-300">
                        <span class="text-cyan-500">✓</span> Responsive Design
                    </li>
                    <li class="flex items-center gap-3 text-slate-300">
                        <span class="text-cyan-500">✓</span> Performance Optimization
                    </li>
                </ul>
            </div>
            
            <div class="grid grid-cols-2 gap-4">
                <div class="bg-slate-800 p-6 rounded-xl border border-white/5 text-center hover:-translate-y-2 transition duration-300">
                    <span class="text-4xl font-bold text-white block mb-2">2+</span>
                    <span class="text-slate-400 text-sm">Years Experience</span>
                </div>
                <div class="bg-slate-800 p-6 rounded-xl border border-white/5 text-center hover:-translate-y-2 transition duration-300">
                    <span class="text-4xl font-bold text-white block mb-2">20+</span>
                    <span class="text-slate-400 text-sm">Projects Completed</span>
                </div>
                <div class="bg-slate-800 p-6 rounded-xl border border-white/5 text-center hover:-translate-y-2 transition duration-300">
                    <span class="text-4xl font-bold text-white block mb-2">10+</span>
                    <span class="text-slate-400 text-sm">Happy Clients</span>
                </div>
                <div class="bg-slate-800 p-6 rounded-xl border border-white/5 text-center hover:-translate-y-2 transition duration-300">
                    <span class="text-4xl font-bold text-white block mb-2">24/7</span>
                    <span class="text-slate-400 text-sm">Support</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="container mx-auto px-6 py-80 border-b border-white/5">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Project Card 1 -->
            <div class="group bg-slate-800 rounded-xl overflow-hidden border border-white/5 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 bg-slate-700 relative overflow-hidden group-hover:opacity-90 transition">
                    <!-- Placeholder for Project Image -->
                    <div class="absolute inset-0 flex items-center justify-center text-slate-500 bg-slate-800">
                        <span class="text-lg font-medium">Project Image</span>
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-cyan-400 transition">E-Commerce Platform</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        A full-featured e-commerce platform built with Laravel and React. Features include user authentication, product management, and payment gateway integration.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs px-2 py-1 rounded bg-slate-700 text-cyan-400">Laravel</span>
                        <span class="text-xs px-2 py-1 rounded bg-slate-700 text-cyan-400">React</span>
                        <span class="text-xs px-2 py-1 rounded bg-slate-700 text-cyan-400">MySQL</span>
                    </div>
                    <div class="flex items-center justify-between mt-4 border-t border-white/5 pt-4">
                        <a href="#" class="text-white hover:text-cyan-400 text-sm font-medium flex items-center gap-1">
                            Live Demo <span>&rarr;</span>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
             <div class="group bg-slate-800 rounded-xl overflow-hidden border border-white/5 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 bg-slate-700 relative overflow-hidden group-hover:opacity-90 transition">
                    <div class="absolute inset-0 flex items-center justify-center text-slate-500 bg-slate-800">
                        <span class="text-lg font-medium">Project Image</span>
                    </div>
                     <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-cyan-400 transition">Portfolio Website</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        A modern portfolio website keying on performance and aesthetics. showcasing my skills and projects to the world.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs px-2 py-1 rounded bg-slate-700 text-cyan-400">Tailwind CSS</span>
                         <span class="text-xs px-2 py-1 rounded bg-slate-700 text-cyan-400">HTML5</span>
                    </div>
                    <div class="flex items-center justify-between mt-4 border-t border-white/5 pt-4">
                         <a href="#" class="text-white hover:text-cyan-400 text-sm font-medium flex items-center gap-1">
                            Live Demo <span>&rarr;</span>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition">
                             <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Card 3 -->
             <div class="group bg-slate-800 rounded-xl overflow-hidden border border-white/5 hover:border-cyan-500/50 transition-all duration-300 hover:-translate-y-2">
                <div class="h-48 bg-slate-700 relative overflow-hidden group-hover:opacity-90 transition">
                     <div class="absolute inset-0 flex items-center justify-center text-slate-500 bg-slate-800">
                        <span class="text-lg font-medium">Project Image</span>
                    </div>
                     <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60"></div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 group-hover:text-cyan-400 transition">Task Manager App</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        A productivity tool to help teams organize and track their work. Built with Vue.js and Firebase for real-time updates.
                    </p>
                     <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs px-2 py-1 rounded bg-slate-700 text-cyan-400">Vue.js</span>
                        <span class="text-xs px-2 py-1 rounded bg-slate-700 text-cyan-400">Firebase</span>
                    </div>
                    <div class="flex items-center justify-between mt-4 border-t border-white/5 pt-4">
                         <a href="#" class="text-white hover:text-cyan-400 text-sm font-medium flex items-center gap-1">
                            Live Demo <span>&rarr;</span>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition">
                             <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="container mx-auto px-6 py-80 border-b border-white/5">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Service 1 -->
            <div class="bg-slate-800 p-8 rounded-2xl border border-white/5 hover:border-cyan-500/50 hover:bg-slate-800/80 transition-all duration-300 group">
                <div class="w-14 h-14 bg-cyan-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-colors duration-300">
                    <svg class="h-8 w-8 text-cyan-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-white">Web Development</h3>
                <p class="text-slate-400 leading-relaxed">
                    Building responsive, high-performance websites using the latest technologies like Laravel, React, and Tailwind CSS.
                </p>
            </div>

            <!-- Service 2 -->
            <div class="bg-slate-800 p-8 rounded-2xl border border-white/5 hover:border-cyan-500/50 hover:bg-slate-800/80 transition-all duration-300 group">
                <div class="w-14 h-14 bg-cyan-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-colors duration-300">
                    <svg class="h-8 w-8 text-cyan-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-white">UI/UX Design</h3>
                <p class="text-slate-400 leading-relaxed">
                    Creating intuitive and aesthetically pleasing user interfaces that provide a seamless user experience.
                </p>
            </div>

            <!-- Service 3 -->
            <div class="bg-slate-800 p-8 rounded-2xl border border-white/5 hover:border-cyan-500/50 hover:bg-slate-800/80 transition-all duration-300 group">
                 <div class="w-14 h-14 bg-cyan-500/10 rounded-lg flex items-center justify-center mb-6 group-hover:bg-cyan-500 group-hover:text-white transition-colors duration-300">
                    <svg class="h-8 w-8 text-cyan-500 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-3 text-white">Maintenance & Support</h3>
                <p class="text-slate-400 leading-relaxed">
                    Ongoing support, bug fixes, and performance updates to ensure your application runs smoothly and securely.
                </p>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" class="container mx-auto px-6 py-80 border-b border-white/5">

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12">
            <!-- Blog Post 1 -->
            <article class="bg-slate-800 rounded-2xl overflow-hidden border border-white/5 hover:border-cyan-500/50 transition duration-300 flex flex-col">
                <div class="h-48 bg-slate-700 relative">
                     <!-- Placeholder for Blog Image -->
                    <div class="absolute inset-0 flex items-center justify-center text-slate-500">
                        <span class="text-lg font-medium">Blog Image</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-4 text-xs text-slate-400 mb-3">
                        <span>Jan 15, 2026</span>
                        <span class="w-1 h-1 bg-slate-500 rounded-full"></span>
                        <span>Development</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 hover:text-cyan-400 transition cursor-pointer">Getting Started with Laravel 11</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        A comprehensive guide to setting up your first Laravel 11 project, including directory structure and new features.
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 text-sm font-semibold flex items-center gap-1 group">
                            Read More <span class="group-hover:translate-x-1 transition">&rarr;</span>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Blog Post 2 -->
             <article class="bg-slate-800 rounded-2xl overflow-hidden border border-white/5 hover:border-cyan-500/50 transition duration-300 flex flex-col">
                <div class="h-48 bg-slate-700 relative">
                     <div class="absolute inset-0 flex items-center justify-center text-slate-500">
                        <span class="text-lg font-medium">Blog Image</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-4 text-xs text-slate-400 mb-3">
                        <span>Jan 10, 2026</span>
                        <span class="w-1 h-1 bg-slate-500 rounded-full"></span>
                        <span>CSS</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 hover:text-cyan-400 transition cursor-pointer">Mastering Tailwind CSS Grid</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        Learn how to build complex and responsive layouts using Tailwind CSS Grid utilities with ease.
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 text-sm font-semibold flex items-center gap-1 group">
                            Read More <span class="group-hover:translate-x-1 transition">&rarr;</span>
                        </a>
                    </div>
                </div>
            </article>

             <!-- Blog Post 3 -->
             <article class="bg-slate-800 rounded-2xl overflow-hidden border border-white/5 hover:border-cyan-500/50 transition duration-300 flex flex-col">
                <div class="h-48 bg-slate-700 relative">
                     <div class="absolute inset-0 flex items-center justify-center text-slate-500">
                        <span class="text-lg font-medium">Blog Image</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-4 text-xs text-slate-400 mb-3">
                        <span>Dec 28, 2025</span>
                        <span class="w-1 h-1 bg-slate-500 rounded-full"></span>
                        <span>Tips & Tricks</span>
                    </div>
                    <h3 class="text-xl font-bold mb-3 hover:text-cyan-400 transition cursor-pointer">5 VS Code Extensions You Need</h3>
                    <p class="text-slate-400 text-sm mb-4 line-clamp-3">
                        Boost your productivity with these essential VS Code extensions that every web developer should currently act using.
                    </p>
                    <div class="mt-auto">
                        <a href="#" class="text-cyan-400 hover:text-cyan-300 text-sm font-semibold flex items-center gap-1 group">
                            Read More <span class="group-hover:translate-x-1 transition">&rarr;</span>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container mx-auto px-6 py-80">

        <div class="max-w-2xl mx-auto bg-slate-800 p-8 rounded-2xl border border-white/5 shadow-2xl">
            <form action="#" method="POST" class="space-y-6">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition" placeholder="John Doe">
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition" placeholder="john@example.com">
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition" placeholder="Tell me about your project..."></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-cyan-500 hover:bg-cyan-400 text-slate-900 font-bold py-3 rounded-lg transition shadow-[0_0_20px_rgba(6,182,212,0.4)] hover:shadow-[0_0_30px_rgba(6,182,212,0.5)]">
                    Send Message
                </button>
            </form>
        </div>
    </section>
</x-app-layout>
