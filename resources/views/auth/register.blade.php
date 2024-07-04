@extends('layouts.main')

@section('title', 'Register')

@section('content')
    <div class="my-4">
        <h2>Register</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, id.</p>
    </div>
    <form method="POST" action="/register">
        @csrf
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input class="form-control" name="firstName" id="firstName" placeholder="Enter first name">
        </div>

        <div class="form-group mt-2">
            <label for="lastName">Last Name</label>
            <input class="form-control" name="lastName" id="lastName" placeholder="Enter last name">
        </div>

        <div class="form-group mt-2">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>

        <div class="form-group mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        </div>

        <div class="form-group mt-2">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                placeholder="Confirm password">
        </div>

        <div class="d-flex gap-4 justify-content-end mt-4">
            <button class="btn btn-primary mt-4">Cancel</button>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </div>
    </form>
@endsection
