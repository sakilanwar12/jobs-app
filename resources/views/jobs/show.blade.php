@extends('layouts.main')

@section('title', 'Jobs')

@section('content')
    <h2>Job</h2>
    ====
    <div> {{ $job->title }}</div>
    <div> ${{ $job->salary }}</div>

    <div class="mt-4">
        <a href="{{ route('jobs.edit', $job['id']) }}" class="btn btn-danger">Edit Job</a>
    </div>

@endsection
