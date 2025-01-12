<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
@include('components.navbar')
<h1 class="text-4xl text-center my-8">News</h1>

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            @if (Auth::check() && Auth::user()->role === 'admin')
            <div class="flex justify-end mb-4">
                <a href="{{ route('create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create News</a>
            </div>
            @endif
            @foreach($newsArticles as $article)
            <div class="mb-4">
                <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                @if($article->image_path)
                <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}" class="w-full h-auto mt-2">
                @endif
                <p class="mt-2">{{ $article->content }}</p>
                <p class="text-sm text-gray-500 mt-2">Published on: {{ $article->published_at ? $article->published_at->format('M d, Y') : 'N/A' }}</p>
                @if (Auth::check() && Auth::user()->role === 'admin')
                <button onclick="document.getElementById('edit-form-{{ $article->id }}').classList.toggle('hidden')" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Edit</button>
                <form id="edit-form-{{ $article->id }}" action="{{ route('news.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="hidden mt-4">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" value="{{ $article->title }}" class="mt-1 block w-full">
                    </div>
                    <div class="mb-4">
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" id="content" class="mt-1 block w-full">{{ $article->content }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <input type="file" name="image" id="image" class="mt-1 block w-full">
                    </div>
                    <div class="mb-4">
                        <label for="published_at" class="block text-sm font-medium text-gray-700">Published At</label>
                        <input type="datetime-local" name="published_at" id="published_at" value="{{ $article->published_at ? $article->published_at->format('Y-m-d\TH:i') : '' }}" class="mt-1 block w-full">
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
                    </div>
                </form>
                <form action="{{ route('news.destroy', $article->id) }}" method="POST" class="mt-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9L14.394 18m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                        <span class="ml-2">Delete</span>
                    </button>
                </form>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
