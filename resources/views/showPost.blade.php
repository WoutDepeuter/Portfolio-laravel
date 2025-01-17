<!-- resources/views/showPost.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
@include('components.navbar')

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-4xl text-center mb-8">{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
            <p class="text-sm text-gray-500">Posted by {{ $post->user->name }} on {{ $post->created_at->format('M d, Y') }}</p>

            <h2 class="text-2xl mt-8 mb-4">Comments</h2>
            @foreach($post->comments as $comment)
            <div class="mb-4">
                <p>{{ $comment->content }}</p>
                <p class="text-sm text-gray-500">Commented by {{ $comment->user->name }} on {{ $comment->created_at->format('M d, Y') }}</p>
            </div>
            @endforeach

            @auth
            <form method="POST" action="{{ route('forum.comment.store', $post->id) }}">
                @csrf
                <div class="mb-4">
                    <label for="content" class="block text-gray-700">Add a comment</label>
                    <textarea name="content" id="content" rows="3" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Submit</button>
                </div>
            </form>
            @endauth

            @guest
            <div class="text-center mt-4">
                <p class="text-gray-700">Please <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">log in</a> to comment.</p>
            </div>
            @endguest
        </div>
    </div>
</div>

@include('components.footer')
</body>
</html>
