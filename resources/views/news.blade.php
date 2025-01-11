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
            @foreach($newsArticles as $article)
            <div class="mb-4">
                <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                <img src="{{ asset('storage/' . $article->image_path) }}" alt="{{ $article->title }}" class="w-full h-auto mt-2">
                <p class="mt-2">{{ $article->content }}</p>
                <p class="text-sm text-gray-500 mt-2">Published on: {{ $article->published_at->format('M d, Y') }}</p>
                <button onclick="document.getElementById('edit-form-{{ $article->id }}').classList.toggle('hidden')" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Edit</button>
                <form id="edit-form-{{ $article->id }}" action="{{ route('news.update', $article->id) }}" method="POST" class="hidden mt-4">
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
                        <label for="image_path" class="block text-sm font-medium text-gray-700">Image Path</label>
                        <input type="text" name="image_path" id="image_path" value="{{ $article->image_path }}" class="mt-1 block w-full">
                    </div>
                    <div class="mb-4">
                        <label for="published_at" class="block text-sm font-medium text-gray-700">Published At</label>
                        <input type="datetime-local" name="published_at" id="published_at" value="{{ $article->published_at->format('Y-m-d\TH:i') }}" class="mt-1 block w-full">
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Update</button>
                    </div>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
