<x-app-layout>
    <x-slot name="header">
        <h2 class="font-display font-bold text-2xl text-gray-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-xl border border-gray-100">
                <div class="p-8 text-gray-900">
                    <h3 class="text-xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}!</h3>
                    <p class="text-gray-500">You are logged in as a <strong>{{ ucfirst(Auth::user()->role) }}</strong>.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Profile Summary -->
                <div class="card bg-white h-full">
                    <h3 class="text-lg font-bold mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        Profile Information
                    </h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span class="text-gray-500">Name</span>
                            <span class="font-medium">{{ Auth::user()->name }}</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-50 pb-2">
                            <span class="text-gray-500">Email</span>
                            <span class="font-medium">{{ Auth::user()->email }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500">Joined</span>
                            <span class="font-medium">{{ Auth::user()->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="{{ route('profile.edit') }}" class="text-primary-600 hover:text-primary-800 font-medium text-sm">Edit Profile &rarr;</a>
                    </div>
                </div>

                <!-- Recent Activity Placeholder -->
                <div class="card bg-white h-full">
                    <h3 class="text-lg font-bold mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Recent Activity
                    </h3>
                    <div class="text-gray-400 text-sm text-center py-8">
                        No recent activity to show.
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
