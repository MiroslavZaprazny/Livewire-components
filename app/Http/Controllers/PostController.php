<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index',[
            'posts' => Post::all()
        ]);
    }

    public function view(Post $post)
    {
        return view('posts.show',[
            'post' => $post,
            'comments' => $post->comments
        ]);
    }
    
    public function store(Request $request)
    {
        Comment::create($request->all());
        return back();    
    }
}
