<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/jobs', function () {
    $jobs = [
        "jobs" => [
            [
                "id" => 1,
                "name" => "Senior Laravel Developer",
                "company" => "Acme Corp",
                "location" => "Remote",
                "type" => "Full-time",
                "level" => "Senior",
                "sallary" => "100000"
            ],
            [
                "id" => 2,
                "name" => "Senior Laravel Developer",
                "company" => "Acme Corp",
                "location" => "Remote",
                "type" => "Full-time",
                "level" => "Senior",
                "sallary" => "100000"
            ],
            [
                "id" => 3,
                "name" => "Senior Laravel Developer",
                "company" => "Acme Corp",
                "location" => "Remote",
                "type" => "Full-time",
                "level" => "Senior",
                "sallary" => "100000"
            ],
        ]
    ];
    return view('jobs', $jobs);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        "jobs" => [
            [
                "id" => 1,
                "name" => "Senior Laravel Developer",
                "company" => "Acme Corp",
                "location" => "Remote",
                "type" => "Full-time",
                "level" => "Senior",
                "sallary" => "100000"
            ],
            [
                "id" => 2,
                "name" => "Senior Laravel Developer",
                "company" => "Acme Corp",
                "location" => "Remote",
                "type" => "Full-time",
                "level" => "Senior",
                "sallary" => "100000"
            ],
            [
                "id" => 3,
                "name" => "Senior Laravel Developer",
                "company" => "Acme Corp",
                "location" => "Remote",
                "type" => "Full-time",
                "level" => "Senior",
                "sallary" => "100000"
            ],
        ]
    ];

    $job = Arr::first($jobs, function ($job) use ($id) {
        return $job['id'] == $id;
    });
    dd($job);
    // return view('job', $jobs[2]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
