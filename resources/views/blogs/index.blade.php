@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <h1>Blog Data</h1>
    <a href="/blogs/create" class="btn btn-primary">Create Blog</a>
    <div class="row mt-4">
        @foreach ($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">By {{ $blog['author'] }}</h6>
                        <p class="card-text">{{ $blog['summary'] }}</p>
                        <p class="card-text">
                            <small class="text-muted">Published on {{ $blog['publication_date'] }}</small>
                        </p>
                        <a href="/blogs/{{ $blog['id'] }}" class="card-link">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
