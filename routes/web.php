<?php


use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::all()
    ]);
});

Route::get("/jobs/create", function () {
    return view('jobs.create');
});
Route::post("/jobs", function () {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    return redirect('/jobs');
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    if ($job) {
        return view('jobs.show', ['job' => $job]);
    } else {
        abort(404, 'Job not found');
    }
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});
