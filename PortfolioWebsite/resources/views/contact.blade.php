<x-app-layout>
    <section class="container mx-auto px-6 py-48">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Get In Touch</h2>
            <div class="w-20 h-1 bg-cyan-500 mx-auto rounded-full"></div>
            <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                Have a project in mind or just want to say hi? I'd love to hear from you.
            </p>
        </div>

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
