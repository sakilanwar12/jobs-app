<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
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

Route::group(['prefix' => 'blogs'], function () {
    Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/{id}', [BlogController::class, 'show'])->name('blogs.single-blog');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');
});
