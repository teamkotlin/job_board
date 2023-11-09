<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Employer::class);
    }
    public function create()
    {
        return view('employer.create');
    }
    public function store(Request $request)
    {
        auth()->user()->employer()->create([
            ...$request->validate([
                'company_name' => 'required|min:3'
            ])
        ]);
        return redirect()->route('jobs.index')->with('success', 'You have successfully created Employer Account.');
    }
}
