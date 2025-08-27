<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        $data = Tag::all();

        return view('tag.index', ['tags' => $data]);
    }

    function create(){
        $tag = Tag::create([
            'title' => 'Hello Tag',
        ]);

        return redirect('/tags');
    }

    function testManyToMany(){
        $post1 = Post::find(1);
        $post2 = Post::find(2);

        $post1->tags()->attach([1, 3 , 5]);
        $post2->tags()->attach([1, 2 , 3]);

        return response()->json([
            'post1' => $post1->tags,
            'post2' => $post2->tags
        ]);
    }
}
