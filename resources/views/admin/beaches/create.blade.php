@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Add Location</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('beaches.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>City Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug', $beach->slug ?? '') }}"
                        placeholder="e.g., anjuna-beach">

                </div>




                <div class="form-group">
                    <label>Meta Tag</label>
                    <input type="text" name="meta_tag" class="form-control"
                        value="{{ old('meta_tag', $beach->meta_tag ?? '') }}" placeholder="e.g., Escorts">
                </div>

                <div class="form-group">
                    <label>Meta Title</label>
                    <input type="text" name="meta_title" class="form-control"
                        value="{{ old('meta_title', $beach->meta_title ?? '') }}" placeholder="e.g., Vip Escorts In Delhi">
                </div>

                <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" name="meta_keywords" class="form-control"
                        value="{{ old('meta_keywords', $beach->meta_keywords ?? '') }}"
                        placeholder="e.g., Vip Escorts In Delhi">
                </div>

                <div class="form-group">
                    <label>Meta Description</label>
                    <input type="text" name="meta_description" class="form-control"
                        value="{{ old('meta_description', $beach->meta_description ?? '') }}"
                        placeholder="e.g., Vip Escorts In Delhi">
                </div>




                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="div_editor1" class="form-control">{{ old('description', $beach->description ?? '') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
