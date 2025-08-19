<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        $data = Post::all();

        return view('post.index', ['posts' => $data]);
    }

    function show($id){
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }
    function create(){
        $post = Post::create([
            'title' => 'My find post',
            'body' => 'Random content to show some text',
            'author' => 'someone',
            'published' => true
        ]);

        return redirect('/blog');
    }
}
