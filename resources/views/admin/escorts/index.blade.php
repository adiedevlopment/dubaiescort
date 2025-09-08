@extends('admin.layouts.app')<!-- Use your admin layout -->

@section('content')
    <h1 class="mb-4 text-2xl font-bold">All Escorts</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif


    <!-- 🔍 Search Form -->
    <form method="GET" action="{{ route('admin.escorts.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search by name, location, or status"
                value="{{ request('search') }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="{{ route('admin.escorts.index') }}" class="btn btn-secondary">Reset</a>
            </div>
        </div>
    </form>


    <div class="card">
        <div class="text-white bg-pink-600 card-header">
            <h3 class="card-title">Escort List</h3>
        </div>

        <div class="p-0 card-body">
            <table class="table text-sm table-bordered table-hover">
                <thead class="bg-pink-300 text-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                          <th>Image</th>
                        <th>Location</th>
                        <th>Rate/hr</th>
                        <th>Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($escorts as $escort)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $escort->name }}</td>
                             <td>
                    @if($escort->profile_photo)
                        <img src="{{ asset('/storage/' . $escort->profile_photo) }}"
                             alt="{{ $escort->custom_title }}"
                             style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                    @else
                        <img src="{{ asset('images/default-avatar.png') }}"
                             alt="No Image"
                             style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                    @endif
                </td>
                            <td>{{ $escort->location }}</td>
                            <td>₹{{ $escort->rate_per_hour }}</td>
                            <td>
                                <form action="{{ route('admin.escorts.status.update', $escort->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <select name="status" class="form-control form-control-sm"
                                            onchange="this.form.submit()">
                                            <option value="active" {{ $escort->status == 'active' ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="inactive" {{ $escort->status == 'inactive' ? 'selected' : '' }}>
                                                Inactive</option>
                                            <option value="pending" {{ $escort->status == 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                        </select>
                                    </div>
                                </form>
                            </td>

                            <td>
                                <a href="{{ route('admin.escorts.show', $escort->id) }}"
                                    class="btn btn-sm btn-outline-info">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <a href="{{ route('admin.escorts.edit', $escort->id) }}"
                                    class="btn btn-sm btn-outline-warning">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.escorts.destroy', $escort->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Delete this page?')">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="clearfix card-footer">
            {{ $escorts->links() }}
        </div>
    </div>
@endsection
