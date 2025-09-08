@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Beaches</h3>
        <a href="{{ route('beaches.create') }}" class="btn btn-success">Add Location</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beaches as $beach)
                    <tr>
                        <td>{{ $beach->name }}</td>
                        <td>{{ Str::limit($beach->description, 50) }}</td>
                        <td>
                            @if ($beach->image)
                                <img src="{{ asset('/storage/'.$beach->image) }}" width="60">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('beaches.edit', $beach) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('beaches.destroy', $beach) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Delete this beach?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>
@endsection
