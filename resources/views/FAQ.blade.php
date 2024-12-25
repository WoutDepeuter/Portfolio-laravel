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
    <div class="mb-4">
        @foreach ($categories as $category)
        <a href="/faqs?category={{ $category->id }}" class="text-blue-500 hover:underline ml-4">{{ $category->name }} FAQ</a>
        @endforeach
    </div>
    <ul class="space-y-4">
        @foreach ($faqs as $faq)
        <li class="p-4 border rounded-lg shadow">
            <h2 class="text-2xl font-semibold">{{ $faq->question }}</h2>
            <p class="mt-2">{{ $faq->answer }}</p>
            <span class="text-sm text-gray-500">Category: {{ $faq->category->name }}</span>
        </li>
        @endforeach
    </ul>
</div>
</body>
</html>
