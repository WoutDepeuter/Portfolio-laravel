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
    public function destroy($id)
    {
        $newsArticle = News::findOrFail($id);
        $newsArticle->delete();
        return redirect()->route('news.index')->with('success', 'News article deleted successfully');
    }
    public function Create()
    {
        return view('Create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published_at' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $validatedData['image_path'] = $path;
        }

        News::create($validatedData);

        return redirect()->route('news.index')->with('success', 'News article created successfully');
    }
}
