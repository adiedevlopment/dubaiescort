<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|unique:blogs|string|max:255',
        'content' => 'required|string',
        'status' => 'required',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'meta_title' => 'nullable|string|max:255',
        'meta_description' => 'nullable|string|max:500',
        'meta_keywords' => 'nullable|string|max:255',
    ]);

    $blog = new Blog();
    $blog->title = $request->title;
    $blog->slug = $request->slug;
    $blog->content = $request->content;
    $blog->status = $request->status;

    // ✅ Auto-generate metadata if not provided
    $blog->meta_title = $request->meta_title ?? $request->title;
    $blog->meta_description = $request->meta_description
        ?? Str::limit(strip_tags($request->content), 160);
    $blog->meta_keywords = $request->meta_keywords
        ?? implode(',', explode(' ', Str::words(strip_tags($request->content), 10)));

    // ✅ Image Upload (without hashed filename)
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();

        // Sanitize and generate a unique filename
        $fileName = Str::slug($originalName) . '-' . time() . '.' . $extension;

        // Save to 'public/blogs'
        $filePath = $file->storeAs('blogs', $fileName, 'public');

        $blog->image = $filePath;
        $blog->og_image = $filePath; // Use same image for Open Graph
    }

    $blog->save();

    return redirect()->route('blogss.index')->with('success', 'Blog created successfully.');
}

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $suggestedBlogs = Blog::latest()->take(5)->get();
        return view('blogs.show', compact('blog', 'suggestedBlogs'));
    }

    public function allBlogs()
{
    $blogs = Blog::where('status', 'published')->latest()->paginate(6);
    return view('blogs.index', compact('blogs'));
}
}
