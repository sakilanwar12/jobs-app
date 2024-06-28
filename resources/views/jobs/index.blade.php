@extends('layouts.main')

@section('title', 'Jobs')

@section('content')
    <h2>All Jobs</h2>
    <div class="mb-4">
        <a href="jobs/create" class="btn btn-primary">Create Job</a>
    </div>
    @foreach ($jobs as $job)
        <div>------</div>
        <div>Title: {{ $job['title'] }}</div>
        <div>Sallary: {{ $job['salary'] }}$</div>
        <div>
            <a href="jobs/{{ $job['id'] }}">Read More</a>
        </div>
    @endforeach

@endsection
