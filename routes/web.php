<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    // $jobs = Job::with('employer')->paginate(3);
    // $jobs = Job::with('employer')->simplePaginate(3);
    $jobs = Job::with('employer')->latest()->cursorPaginate(3);
    return view('jobs.index', [
        "jobs" => $jobs
    ]);
});

Route::get('/jobs/create', function() {
    // dd('test create');
    return view('jobs.create');
});

Route::get('/jobs/{id}', function($id) {
    // dd($id);
    // $job = Arr::first(Job::all(), fn($job) => $job['id'] === $id);
    // dd($job);

    return view('jobs.show', ['job' => Job::find($id)]);
});

Route::post('/jobs', function(){
    // dd('hello from request post ');
    // dd(request()->all());
    // dd(request('title'));

    Job::create([
        'title'=> request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function() {
    return view('contact');
});
