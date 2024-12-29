<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index(Request $request)
    {
        $categories = FaqCategory::all();
        $faqs = Faq::where('category_id', $request->query('category'))->get();

        return view('FAQ', compact('categories', 'faqs'));
    }

    public function create()
    {
        $categories = FaqCategory::all();

        return view('FAQ.create', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        FaqCategory::create([
            'name' => $request->name,
        ]);

        return redirect()->route('faqs.index')->with('status', 'Category created successfully!');
    }

    public function storeFaq(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string',
            'category_id' => 'required|exists:faq_categories,id',
        ]);

        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('faqs.index')->with('status', 'FAQ created successfully!');
    }
}
