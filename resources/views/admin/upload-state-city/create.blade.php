@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Add StateCity</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('StateCityes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>State</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>City</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control"
                        value="{{ old('slug', $StateCity->slug ?? '') }}"
                        placeholder="e.g., escorts-in-(state)(city)/8841-Jerry">

                </div>


                <div class="form-group">
                    <label>Meta Tag</label>
                    <input type="text" name="slug" class="form-control"
                        value="{{ old('slug', $StateCity->slug ?? '') }}" placeholder="e.g., Escorts">

                </div>

                <div class="form-group">
                    <label>Meta Title</label>
                    <input type="text" name="slug" class="form-control"
                        value="{{ old('slug', $StateCity->slug ?? '') }}" placeholder="e.g., Vip Escorts In Delhi">

                </div>

                <div class="form-group">
                    <label>Meta Keywords</label>
                    <input type="text" name="slug" class="form-control"
                        value="{{ old('slug', $StateCity->slug ?? '') }}" placeholder="e.g., Vip Escorts In Delhi">

                </div>

                <div class="form-group">
                    <label>Meta Description</label>
                    <input type="text" name="slug" class="form-control"
                        value="{{ old('slug', $StateCity->slug ?? '') }}" placeholder="e.g., Vip Escorts In Delhi">

                </div>


                
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="summernote" class="form-control">{{ old('description', $StateCity->description ?? '') }}</textarea>
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
