<x-app-layout>
    <section class="container mx-auto px-6 py-48">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Latest Articles</h2>
            <div class="w-20 h-1 bg-cyan-500 mx-auto rounded-full"></div>
             <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                Sharing my thoughts, experiences, and tutorials on web development and technology.
            </p>
        </div>

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
</x-app-layout>
