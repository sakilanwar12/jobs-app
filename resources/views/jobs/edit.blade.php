@extends('layouts.main')

@section('title', 'Create Job')

@section('content')
    <div class="my-4">
        <h2>Create Job</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, id.</p>
    </div>
    <form method="POST" action="/jobs">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
        </div>
        @error('title')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror;
        <div class="form-group mt-2">
            <label for="salary">Salary</label>
            <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter salary">
        </div>
        @error('salary')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror;

        <div class="d-flex gap-4 justify-content-end mt-4">
            <button class="btn btn-primary mt-4">Cancel</button>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
@endsection
