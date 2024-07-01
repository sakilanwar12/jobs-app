@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <div class="my-4">
        <h2>Register</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, id.</p>
    </div>
    <form method="POST" action="/jobs">
        @csrf
        <div class="form-group">
            <x-label for="title">Title</x-label>
            <input class="form-control" name="title" id="title" placeholder="Enter title">
        </div>
        <x-form-error name="title" />
        <div class="form-group mt-2">
            <x-label for="salary">Salary</x-label>
            <input type="number" class="form-control" name="salary" id="salary" placeholder="Enter salary">
        </div>
        <x-form-error name="salary" />

        <div class="d-flex gap-4 justify-content-end mt-4">
            <button class="btn btn-primary mt-4">Cancel</button>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
@endsection
