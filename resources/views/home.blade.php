<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
@include('components.navbar')
<h1 class="text-4xl text-center my-8">Home</h1>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form method="GET" action="{{ route('user.search') }}">
                <div class="flex items-center">
                    <input type="text" name="query" value="{{ request('query') }}" placeholder="Search users..."
                           class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="submit" class="ml-2 px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        Search
                    </button>
                </div>
            </form>

            @if(isset($users))
            <div class="mt-6">
                <h3 class="text-lg font-medium text-gray-900">Search Results:</h3>
                <ul class="mt-2">
                    @forelse($users as $user)
                    <li class="py-2 border-b border-gray-200">
                        <a href="{{ url('/profile/' . $user->id) }}" class="text-indigo-600 hover:text-indigo-900">
                            {{ $user->name }} ({{ $user->email }})
                        </a>
                    </li>
                    @empty
                    <li class="py-2">No users found.</li>
                    @endforelse
                </ul>
            </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>
