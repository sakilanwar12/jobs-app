<?php


use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
});
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get("/job/create", function () {
    dd("job created");
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);

    if ($job) {
        return view('job', ['job' => $job]);
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
