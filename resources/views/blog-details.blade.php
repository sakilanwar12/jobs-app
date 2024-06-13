@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <h1>Blog Data</h1>
    <h1>{{ $blog['title'] }}</h1>
    <p><strong>Author:</strong> {{ $blog['author'] }}</p>
    <p><strong>Published on:</strong> {{ $blog['publication_date'] }}</p>
    <div>
        <strong>Tags:</strong>
        @foreach ($blog['tags'] as $tag)
            <span class="badge badge-secondary">{{ $tag }}</span>
        @endforeach
    </div>
    <hr>
    <p>{{ $blog['content'] }}</p>
    <a href="/blog" class="btn btn-primary">Back to Blog</a>
    </div>
@endsection
