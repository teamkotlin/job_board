<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\MyJobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MyJobController;
use Illuminate\Support\Facades\Route;

Route::get('login', fn() => to_route('auth.create'))->name('login');
Route::get('/', fn() => to_route('jobs.index'));
Route::resource("jobs", JobController::class)->only(['index', 'show']);


Route::resource('auth', AuthController::class)->only(['create', 'store']);
Route::delete('/logout', fn() => to_route('destroy'))->name('logout');
Route::delete('auth/destroy', [AuthController::class, 'destroy'])->name('destroy');

Route::middleware('auth')->group(function () {
    Route::resource('job.application', JobApplicationController::class)->only(['create', 'store']);
    Route::resource('my-job-applications', MyJobApplicationController::class)->only(['index', 'destroy']);
    Route::resource('employer', EmployerController::class)->only(['create', 'store']);
    Route::middleware('employer')->resource('my-jobs', MyJobController::class)->only(['index', 'create', 'store']);
});

