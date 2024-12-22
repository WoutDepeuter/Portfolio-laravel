<x-app-layout>
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
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
