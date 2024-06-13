@extends('layouts.main')

@section('title', 'Blog')

@section('content')
    <h1>Create Blog</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('blogs.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control" value="{{ old('author') }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
        </div>

        <div class="form-group">
            <label for="publication_date">Publication Date</label>
            <input type="date" id="publication_date" name="publication_date" class="form-control"
                value="{{ old('publication_date') }}" required>
        </div>

        <div class="form-group">
            <label for="tags">Tags (comma-separated)</label>
            <input type="text" id="tags" name="tags" class="form-control" value="{{ old('tags') }}" required>
        </div>

        <div class="form-group">
            <label for="summary">Summary</label>
            <textarea id="summary" name="summary" class="form-control" rows="3">{{ old('summary') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Create Blog Post</button>
    </form>

@endsection
