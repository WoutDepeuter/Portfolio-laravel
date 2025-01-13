<!-- resources/views/Forum.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
@include('components.navbar')

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-4xl text-center mb-8">Forum</h1>
            @auth
            <div class="text-right mb-4">
                <a href="{{ route('forum.create') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Create Post</a>
            </div>
            @endauth
            @foreach($posts as $post)
            <div class="mb-4">
                <h2 class="text-2xl">
                    <a href="{{ route('forum.show', $post->id) }}">{{ $post->title }}</a>
                    <span class="text-sm text-gray-500">({{ $post->comments->count() }} comments)</span>
                </h2>
                <p class="text-sm text-gray-500">Posted by {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('components.footer')
</body>
</html>
