@extends('admin.layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4 text-light">Create Page</h2>
        <form method="POST" action="{{ route('pages.store') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label text-dark">Title</label>
                <input type="text" name="title" class="form-control bg-dark text-light border-secondary" required>
            </div>
            <div class="mb-3">
                <label class="form-label text-dark">Slug</label>
                <input type="text" name="slug" class="form-control bg-dark text-light border-secondary">
            </div>

            <div class="mb-3">
                <label class="form-label text-dark">Meta Title</label>
                <input type="text" name="meta_title" class="form-control bg-dark text-light border-secondary">
            </div>

            <div class="mb-3">
                <label class="form-label text-dark">Meta Description</label>
                <textarea name="meta_description" class="form-control bg-dark text-light border-secondary" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label text-dark">Canonical URL</label>
                <input type="text" name="canonical_url" class="form-control bg-dark text-light border-secondary">
            </div>

            <div class="mb-3">
                <label class="form-label text-light">Content</label>
                <textarea id="summernote" name="content" class="form-control bg-dark text-light border-secondary" rows="10"></textarea>
            </div>
            <button class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
