@extends('layouts.blog')
@section('title', 'Russian Escorts Blog - Dubai Escorts')

@section('content')
<div class="container px-4 py-10 mx-auto">
    <!-- Page Title -->
    <div class="mb-12 text-center">
        <h1 class="text-4xl font-bold text-transparent text-white bg-clip-text ">
            All Blogs
        </h1>
        <p class="mt-2 text-white">Discover expert articles, tips, and updates</p>
    </div>

    <!-- Blog Grid -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach($blogs as $blog)
        <div class="flex flex-col transition duration-300 bg-white shadow-md rounded-xl hover:shadow-lg hover:-translate-y-1">

            <!-- Blog Title First -->
            <div class="p-4">
                <h3 class="mb-2 text-lg font-semibold text-gray-900 line-clamp-2">
                    {{ $blog->title }}
                </h3>
            </div>

            <!-- Blog Image -->
           <div class="relative h-48 mx-4 overflow-hidden rounded-lg">
                @if($blog->image)
                    <img src="{{ asset('/public/storage/' . $blog->image) }}"
                         alt="{{ $blog->title }}"
                         class="object-cover w-full h-full transition duration-500 transform hover:scale-105">
                @else
                    <img src="https://via.placeholder.com/600x400"
                         alt="{{ $blog->title }}"
                         class="object-cover w-full h-full">
                @endif
                <span class="absolute px-2 py-1 text-xs text-white rounded-full bg-gradient-to-r from-purple-500 to-pink-500 top-2 left-2">New</span>
                <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/20"></div>
            </div>

            <!-- Blog Content -->
            <div class="flex flex-col flex-grow p-4">
                <p class="flex-grow mb-3 text-sm text-gray-600 line-clamp-3">
                    {{ Str::limit(strip_tags($blog->content), 80) }}
                </p>
                <a href="{{ route('blogs.show', $blog->slug) }}"
                   class="inline-block px-3 py-1 text-xs font-medium text-white transition rounded bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90">
                    Read More →
                </a>
            </div>

            <!-- Footer -->
            <div class="px-4 py-2 text-xs text-gray-500 border-t">
                {{ $blog->created_at->format('M d, Y') }}
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="flex justify-center mt-8">
        {{ $blogs->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
