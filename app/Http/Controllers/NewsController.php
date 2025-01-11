<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newsArticles = News::all();
        return view('news', compact('newsArticles'));
    }

    public function edit($id)
    {
        $newsArticle = News::findOrFail($id);
        return view('news.edit', compact('newsArticle'));
    }

    public function update(Request $request, $id)
    {
        $newsArticle = News::findOrFail($id);
        $newsArticle->update($request->all());
        return redirect()->route('news.index')->with('success', 'News article updated successfully');
    }
}
