<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = [
            [
                'title' => 'Frontend Developer',
                'company' => 'TechCorp',
                'description' => 'Build modern web applications with React and TailwindCSS.',
                'is_remote' => true,
            ],
            [
                'title' => 'Backend Developer',
                'company' => 'DataWorks',
                'description' => 'Work with Laravel and PostgreSQL to create scalable APIs.',
                'is_remote' => false,
            ],
            [
                'title' => 'UI/UX Designer',
                'company' => 'DesignHub',
                'description' => 'Create user-friendly designs and prototypes in Figma.',
                'is_remote' => true,
            ],
            [
                'title' => 'DevOps Engineer',
                'company' => 'CloudOps',
                'description' => 'Manage CI/CD pipelines and cloud infrastructure.',
                'is_remote' => false,
            ],
            [
                'title' => 'Project Manager',
                'company' => 'AgileWorks',
                'description' => 'Coordinate cross-functional teams and deliver projects on time.',
                'is_remote' => true,
            ],
        ];

        return view('jobseeker.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
