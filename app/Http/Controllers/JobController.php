<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function index(){
        $jobs = Job::all();
        return view('job.index', ['jobs' => $jobs]);
    }

    function about(){
        
        return view('about',);
    }
    function contact(){
        
        return view('contact',);
    }
}
