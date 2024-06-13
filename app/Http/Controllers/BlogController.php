<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required|string',
            'publication_date' => 'required|date',
            'tags' => 'required|string',
            'summary' => 'nullable|string',
        ]);

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->author = $request->input('author');
        $blog->content = $request->input('content');
        $blog->publication_date = $request->input('publication_date');
        $blog->tags = explode(',', $request->input('tags'));
        $blog->summary = $request->input('summary');
        $blog->save();
        return redirect()->route('blogs.single-blog', ['id' => $blog->id])
            ->with('success', 'Blog post created successfully!');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.single-blog', compact('blog'));
    }

    public function edit($id)
    {
        // Logic to show edit form for a specific blog post
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific blog post
    }

    public function destroy($id)
    {
        // Logic to delete a specific blog post
    }
}
