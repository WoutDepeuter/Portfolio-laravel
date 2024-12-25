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
                            <form method="POST" action="{{ route('dashboard.remove', $user->id) }}" class="mt-2">
                                @csrf
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
