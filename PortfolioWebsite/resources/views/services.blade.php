<x-app-layout>
    <section class="container mx-auto px-6 py-48">
         <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">My Services</h2>
            <div class="w-20 h-1 bg-cyan-500 mx-auto rounded-full"></div>
            <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                I offer a range of services to help you build and grow your online presence. From custom web development to technical consultancy.
            </p>
        </div>

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
</x-app-layout>
