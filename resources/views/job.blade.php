@extends('layouts.main')

@section('title', 'Jobs')

@section('content')
    <h2>Job</h2>
    ====
    <div>Name: {{ $job['name'] }}</div>
    <div>Company: {{ $job['company'] }}</div>
    <div>Location: {{ $job['location'] }}</div>
    <div>Job Type: {{ $job['type'] }}</div>
    <div>Level: {{ $job['level'] }}</div>
    <div>Sallary: {{ $job['sallary'] }}$</div>

@endsection
