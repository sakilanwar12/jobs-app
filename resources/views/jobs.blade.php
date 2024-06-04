@extends('layouts.main')

@section('title', 'Jobs')

@section('content')
    <h2>All Jobs</h2>

    @foreach ($jobs as $job)
        <div>------</div>
        <div>Name: {{ $job['name'] }}</div>
        <div>Company: {{ $job['company'] }}</div>
        <div>Location: {{ $job['location'] }}</div>
        <div>Job Type: {{ $job['type'] }}</div>
        <div>Level: {{ $job['level'] }}</div>
        <div>Sallary: {{ $job['sallary'] }}$</div>
        <div>
            <a href="job/{{ $job['id'] }}">Read More</a>
        </div>
    @endforeach

@endsection
