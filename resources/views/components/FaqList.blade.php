<!-- resources/views/components/FaqList.blade.php -->
<ul class="space-y-4">
    @foreach ($faqs as $faq)
    <li class="p-4 border rounded-lg shadow">
        <h2 class="text-2xl font-semibold">{{ $faq->question }}</h2>
        <p class="mt-2">{{ $faq->answer }}</p>
        <span class="text-sm text-gray-500">Category: {{ $faq->category->name }}</span>
    </li>
    @endforeach
</ul>
