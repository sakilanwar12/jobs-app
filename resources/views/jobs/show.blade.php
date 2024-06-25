@extends('layouts.main')

@section('title', 'Jobs')

@section('content')
    <h2>Job</h2>
    ====
    <div>Name: {{ $job['title'] }}</div>
    <div>Company: ${{ $job['salary'] }}</div>



@endsection
