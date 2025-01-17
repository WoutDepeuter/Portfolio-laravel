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
                <div class="bg-gray-100 p-8 rounded-lg shadow-md space-y-8">
                    @if($user->profile_picture)
                    <img src="{{ asset('images/profile_pictures/' . $user->profile_picture) }}" alt="Profile Picture" class="w-32 h-32 rounded-full mb-8">
                    @endif
                    <p class="mb-8"><strong class="font-bold">Name:</strong> {{ $user->name }}</p>
                    <p class="mb-8"><strong class="font-bold">About:</strong> {{ $user->about_me }}</p>
                    <p class="mb-8"><strong class="font-bold">Birthday:</strong> {{ $user->birthday }}</p>
                    <p class="mb-8"><strong class="font-bold">Email:</strong> {{ $user->email }}</p>
                    <p class="mb-8"><strong class="font-bold">Role:</strong> {{ $user->role }}</p>
                    <a href="{{ url('/') }}" class="inline-block bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-700">Home</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
