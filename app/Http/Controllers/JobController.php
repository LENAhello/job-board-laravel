<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->cursorPaginate(9);
        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('jobs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'company'     => 'required|string|max:255',
            'is_remote'   => 'required|boolean',
            'description' => 'required|string|min:20',
            'salary'      => 'nullable|numeric|min:0',
            'posted_at'   => 'required|date',
            'category_id' => 'required|exists:categories,id'
        ]);

        // Save to DB
        $job = Job::create($validated);

        // Redirect the user with success message
        return redirect()->route('jobs.show', $job)->with('success', 'Job created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $job = Job::findOrFail($id);
        return view('jobs.show', compact('job'));
    }

    public function showRemote()
    {
        $jobs = Job::where('is_remote', true)->get();
        $remoteCount = Job::where('is_remote', true)->count();
        return view('jobs.remote', compact('jobs', 'remoteCount'));
    }

    public function showOnsite()
    {
        $jobs = Job::where('is_remote', false)->get();
        $onsiteCount = Job::where('is_remote', true)->count();
        return view('jobs.onsite', compact('jobs', 'onsiteCount'));
    }

    public function manage()
    {
        return view('jobs.manage');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
