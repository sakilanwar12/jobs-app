@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <div class="my-4">
        <h2>Login</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, id.</p>
    </div>
    <form method="POST" action="/login">
        @csrf

        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>

        <div class="form-group mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        </div>

        <div class="d-flex gap-4 justify-content-end mt-4">
            <button class="btn btn-primary mt-4">Cancel</button>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
@endsection
