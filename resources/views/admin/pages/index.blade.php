@extends('admin.layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-light">All Pages</h2>
    <div class="table-responsive">
        <table class="table overflow-hidden align-middle rounded shadow table-dark table-hover">
            <thead class="bg-dark text-secondary">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pages as $page)
                <tr>
                    <td>{{ $page->title }}</td>
                    <td class="text-muted">{{ $page->slug }}</td>
                    <td>
                        <a href="{{ url($page->slug) }}" target="_blank" class="btn btn-sm btn-outline-info">
                            <i class="bi bi-eye"></i> View
                        </a>
                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-outline-warning">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this page?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




@endsection
