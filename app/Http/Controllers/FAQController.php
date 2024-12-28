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
}
