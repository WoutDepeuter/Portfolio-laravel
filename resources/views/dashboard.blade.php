<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                @if (Auth::user()->role === 'admin')
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg">{{ __('All Users') }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($users as $user)
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h4 class="font-semibold text-lg">{{ $user->name }}</h4>
                            <p>{{ $user->email }}</p>
                            <p class="text-gray-600 font-bold">{{ $user->role }}</p>
                            @if ($user->role === 'admin')
                            <form method="POST" action="{{ route('dashboard.demote', $user->id) }}">
                                @csrf
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">
                                    {{ __('Remove Admin') }}
                                </button>
                            </form>
                            @else
                            <form method="POST" action="{{ route('dashboard.promote', $user->id) }}">
                                @csrf
                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
                                    {{ __('Make Admin') }}
                                </button>
                            </form>
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
