@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Create Blog</h1>

        <form action="{{ route('blogss.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="meta_title">Meta Title</label>
                <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title') }}">
            </div>

            <div>
                <label for="meta_description">Meta Description</label>
                <textarea name="meta_description" id="meta_description" class="form-control">{{ old('meta_description') }}</textarea>
            </div>

            <div>
                <label for="meta_keywords">Meta Keywords</label>
                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                    value="{{ old('meta_keywords') }}">
            </div>

            <div class="mb-3">
                <label> Blog Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>


            <div class="mb-3">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Content</label>
                <textarea id="div_editor1" name="content" class="form-control" rows="6" required></textarea>
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Author</label>
                <input type="text" name="author" class="form-control">
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-success">Create Blog</button>
        </form>
    </div>
@endsection
