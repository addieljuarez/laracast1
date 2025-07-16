<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(3);
    return view('jobs', [
        "jobs" => $jobs
    ]);
});

Route::get('/jobs/{id}', function($id) {
    // dd($id);
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] === $id);
    // dd($job);

    return view('job', ['job' => Job::find($id)]);
});


Route::get('/contact', function() {
    return view('contact');
});
