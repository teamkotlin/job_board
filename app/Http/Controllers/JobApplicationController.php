<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function create(Job $job)
    {
        $this->authorize("apply", $job);
        return view('job_applications.create', ['job' => $job]);
    }
    public function store(Request $request, Job $job)
    {
        $request->validate([
            'expected_salary' => 'required|numeric|min:1|max:100000',
            'cv' => 'required|file|mimes:pdf|max:2048'
        ]);
        $this->authorize("apply", $job);
        $file = $request->file("cv");
        $path = $file->store('cvs','private');
        $job->jobApplications()->create([
            'user_id' => auth()->user()->id,
            'expected_salary' => $request->expected_salary,
            'cv_path' => $path
        ]);
        return redirect()->route('my-job-applications.index')->with('success', 'You have successfully applied for his job!');
    }
}
