<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script>
        function toggleForm(formId) {
            var form = document.getElementById(formId);
            if (form.style.display === "none" || form.style.display === "") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
        }
    </script>
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

@auth
@if(auth()->user()->role === 'admin')
<!-- Button to toggle the category form -->
<button onclick="toggleForm('categoryForm')" class="fixed bottom-4 left-4 mr-4 bg-blue-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-600 transition duration-300">
    Add Category
</button>

<!-- Form for creating a new category -->
<div id="categoryForm" class="fixed bottom-4 left-4 bg-white p-4 rounded shadow-lg" style="display: none;">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="category_name" class="block text-sm font-medium text-gray-700">New Category</label>
            <input type="text" name="name" id="category_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-600 transition duration-300">Create Category</button>
    </form>
</div>

<!-- Button to toggle the FAQ form -->
<button onclick="toggleForm('faqForm')" class="fixed bottom-4 left-20 bg-blue-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-600 transition duration-300">
    Add FAQ
</button>

<!-- Form for creating a new FAQ entry -->
<div id="faqForm" class="fixed bottom-4 left-20 bg-white p-4 rounded shadow-lg" style="display: none;">
    <form action="{{ route('faqs.store') }}" method="POST">
        @csrf
        <div class="mb-2">
            <label for="faq_question" class="block text-sm font-medium text-gray-700">Question</label>
            <input type="text" name="question" id="faq_question" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-2">
            <label for="faq_answer" class="block text-sm font-medium text-gray-700">Answer</label>
            <textarea name="answer" id="faq_answer" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required></textarea>
        </div>
        <div class="mb-2">
            <label for="faq_category" class="block text-sm font-medium text-gray-700">Category</label>
            <select name="category_id" id="faq_category" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-full shadow-lg hover:bg-blue-600 transition duration-300">Create FAQ</button>
    </form>
</div>
@endif
@endauth

</body>
</html>
