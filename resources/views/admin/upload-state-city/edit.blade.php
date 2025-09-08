@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Beach</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('beaches.update', $beach) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $beach->name }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control" value="{{ old('slug', $beach->slug ?? '') }}"
                        placeholder="e.g., anjuna-beach">

                </div>


                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="summernote" class="form-control">{{ old('description', $beach->description ?? '') }}</textarea>
                </div>

                <div class="form-group">
                    <label>Image</label><br>
                    @if ($beach->image)
                        <img src="{{ asset('storage/' . $beach->image) }}" width="80"><br><br>
                    @endif
                    <input type="file" name="image" class="form-control-file">
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>




@endsection
