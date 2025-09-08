@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Beach</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('beaches.update', $beach->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $beach->name) }}" required>
                </div>

                <div class="form-group">
                    <label>Meta Tag</label>
                    <input type="text" name="meta_tag" class="form-control"
                        value="{{ old('meta_tag', $beach->meta_tag) }}">
                </div>

                <div class="form-group">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control"
                        value="{{ old('meta_title', $beach->meta_title) }}">
                </div>

                <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control"
                        value="{{ old('meta_keywords', $beach->meta_keywords) }}">
                </div>

                <div class="form-group">
                    <label>Meta Description</label>
                    <input type="text" name="meta_description" class="form-control"
                        value="{{ old('meta_description', $beach->meta_description) }}">
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="summernote" class="form-control">{{ old('description', $beach->description) }}</textarea>
                </div>

                <div class="form-group">
                    <label>Image</label><br>
                    @if ($beach->image)
                        <img src="{{ asset('storage/' . $beach->image) }}" width="150" class="mb-2">
                    @endif
                    <input type="file" name="image" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>

        </div>
    </div>
@endsection
