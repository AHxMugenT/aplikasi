<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home.posts',[
            "title" => "AM | BLOG",
            "posts" => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('home.post',[
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
