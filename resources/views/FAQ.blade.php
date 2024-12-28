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
<h1 class="text-4xl text-center my-8">FAQ</h1>
<div class="max-w-4xl mx-auto p-4">
    <div class="mb-4 flex flex-wrap justify-center space-x-4">
        @foreach ($categories as $category)
        <a href="/faqs?category={{ $category->id }}" class="px-4 py-2 rounded transition duration-300 {{ request('category') == $category->id ? 'bg-blue-600 text-white' : 'bg-blue-500 text-white hover:bg-blue-600' }}">
            {{ $category->name }} FAQ
        </a>
        @endforeach
    </div>
    <x-FaqList :faqs="$faqs" />
</div>
</body>
</html>
