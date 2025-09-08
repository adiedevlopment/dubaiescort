@extends('admin.layouts.app')

@section('content')
    <div class="container py-4">
        <h2 class="mb-4 text-light">Edit Page</h2>

        <form method="POST" action="{{ route('pages.update', $page->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label text-light">Title</label>
                <input type="text" name="title" value="{{ old('title', $page->title) }}"
                    class="form-control bg-dark text-light border-secondary" required>
            </div>

            <div class="mb-3">
                <label class="form-label text-light">Slug</label>
                <input type="text" name="slug" value="{{ old('slug', $page->slug) }}"
                    class="form-control bg-dark text-light border-secondary">
                <div class="form-text text-muted">Leave empty to auto-generate from title.</div>
            </div>

            <div class="mb-3">
                <label class="form-label text-light">Content</label>
                <textarea id="editor" name="content" class="form-control bg-dark text-light border-secondary" rows="6">{{ old('content', $page->content) }}</textarea>
            </div>

            <button class="btn btn-success">Update</button>
            <a href="{{ route('pages.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <!-- CKEditor 5 CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: [
                    'heading', '|',
                    'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                    'blockQuote', 'insertTable', 'undo', 'redo'
                ]
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
