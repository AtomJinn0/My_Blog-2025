<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
            'is_active' => 'required|in:Yes,No',
        ]);

        if ($request->id) {
            $post = Post::findOrFail($request->id);
            $post->update($validated);
            return redirect('/edit/' . $post->id)->with('success', 'Post updated!');
        } else {
            Post::create($validated);
            return redirect('/all')->with('success', 'Post created!');
        }
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/all')->with('success', 'Post deleted!');
    }
}