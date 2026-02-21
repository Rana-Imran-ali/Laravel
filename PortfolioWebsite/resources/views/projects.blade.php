<x-app-layout>
    <section class="container mx-auto px-6 py-32">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">My Projects</h2>
            <div class="w-20 h-1 bg-cyan-500 mx-auto rounded-full"></div>
            <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                Here are some of the projects I've worked on. Each project represents a unique challenge and solution.
            </p>
        </div>

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
</x-app-layout>
