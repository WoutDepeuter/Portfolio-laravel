<!-- resources/views/profile/Profile.blade.php -->
<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">{{ __('Profile Information') }}</h3>
                    <div class="space-y-4">
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <p><strong>Name:</strong> {{ $user->name }}</p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <p><strong>About:</strong> {{ $user->about }}</p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <p><strong>Birthday:</strong> {{ $user->birthday }}</p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <p><strong>Email:</strong> {{ $user->email }}</p>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                            <p><strong>Role:</strong> {{ $user->role }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
