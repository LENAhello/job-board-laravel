<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function create(){
        
        Comment::create([
            'content' => 'this is a test comment',
            'author' => 'Maria',
            'post_id' => 6,
        ]);

        return redirect('/blog');
    }
}
