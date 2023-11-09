<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class MyJobApplicationController extends Controller
{
    public function index()
    {

        return view('my_job_applications.index', ['applications' => auth()->user()->jobApplications()->with(['job' => fn($query) => $query->withCount('jobApplications')->withAvg('jobApplications', 'expected_salary'), 'job.employer'])->latest()->get()]);
    }
    public function destroy(Job $job)
    {

        $job->delete();
        return redirect()->route('my-job-applications.index')->with('success', 'Your job has been deleted successfully!');
    }
}
