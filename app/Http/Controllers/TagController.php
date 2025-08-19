<?php

namespace App\Http\Controllers;

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
            'title' => 'Fisrt Tag',
        ]);

        return redirect('/blog');
    }
}
