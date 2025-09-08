@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>All Blogs</h1>
    <a href="{{ route('blogss.create') }}" class="mb-3 btn btn-primary">Add Blog</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Status</th>
                <th>Author</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->status }}</td>
                <td>{{ $blog->author }}</td>
                <td>{{ $blog->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $blogs->links() }}
</div>
@endsection
