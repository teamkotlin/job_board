<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class MyJobController extends Controller
{
    public function index()
    {
        $jobs = auth()->user()->employer->jobs()->with(['employer', 'jobApplications.user'])->get();

        return view('my_jobs.index', ['jobs' => $jobs]);
    }
    public function create()
    {
        return view('my_jobs.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'salary' => 'required|numeric|min:5000',
            'description' => 'required|string',
            'experience' => 'required|in:' . implode(',', \App\Models\Job::$experience),
            'category' => 'required|in:' . implode(',', \App\Models\Job::$category),
        ]);
        auth()->user()->employer->jobs()->create($data);
        return redirect()->route('my-jobs.index')->with('success', 'Job created successfully');
    }
}
