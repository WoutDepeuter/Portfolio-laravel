<?php
// app/Http/Controllers/ForumController.php
namespace App\Http\Controllers;

// app/Http/Controllers/ForumController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumPost;
use App\Models\Comment;

class ForumController extends Controller
{
    public function index()
    {
        $posts = ForumPost::all();
        return view('Forum', compact('posts'));
    }

    public function create()
    {
        return view('createPost');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        ForumPost::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('forum.index');
    }

    public function show($id)
    {
        $post = ForumPost::with('comments.user')->findOrFail($id);
        return view('showPost', compact('post'));
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'forum_post_id' => $id,
            'content' => $request->content,
        ]);

        return redirect()->route('forum.show', $id);
    }
}
