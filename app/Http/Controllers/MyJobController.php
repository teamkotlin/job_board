<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyJobController extends Controller
{
    public function index()
    {
        return view('my_jobs.index');
    }
    public function create()
    {
        return view('my_jobs.create');
    }
    public function store(Request $request)
    {
    }
}
