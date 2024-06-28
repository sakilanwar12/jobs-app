@extends('layouts.main')

@section('title', 'Create Job')

@section('content')
    <div class="my-4">
        <h2>Edit job: {{ $job->title }}</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, id.</p>
    </div>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title"
                value="{{ $job->title }}">
        </div>

        <div class="form-group mt-2">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter salary"
                value="{{ $job->salary }}">
        </div>

        <div class="d-flex gap-4 justify-content-end mt-4">
            <a href="jobs/{{ $job->id }}" class="btn btn-primary mt-4">Cancel</a>
            <button type="submit" class="btn btn-primary mt-4">Update</button>
            <button form="delete-form" class="btn btn-primary mt-4">Delete</button>
        </div>
    </form>

    <form action="/jobs/{{ $job->id }}" method="POST" class="d-none" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
@endsection
