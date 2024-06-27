<?php


use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});

// index
Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::all()
    ]);
});

//create 
Route::get("/jobs/create", function () {
    return view('jobs.create');
});
//store
Route::post("/jobs", function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    return redirect('/jobs');
});

//show
Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    if ($job) {
        return view('jobs.show', ['job' => $job]);
    } else {
        abort(404, 'Job not found');
    }
});

//edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
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
