@extends('layouts.blog')
@section('meta')
    <title>{{ $blog->meta_title }}</title>
    <meta name="description" content="{{ $blog->meta_description }}">
    <meta name="keywords" content="{{ $blog->meta_keywords }}">

    <!-- Open Graph (Facebook/LinkedIn) -->
    <meta property="og:title" content="{{ $blog->meta_title }}">
    <meta property="og:description" content="{{ $blog->meta_description }}">
    <meta property="og:image" content="{{ asset('storage/' . $blog->og_image) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->meta_title }}">
    <meta name="twitter:description" content="{{ $blog->meta_description }}">
    <meta name="twitter:image" content="{{ asset('storage/' . $blog->og_image) }}">
@endsection

@section('content')
    <div class="min-h-screen py-10 bg-gradient-to-b from-purple-700 via-purple-800 to-purple-900">
        <div class="container mx-auto">
            <div class="grid gap-8 lg:grid-cols-3">

                <!-- Main Blog Content -->
                <div class="lg:col-span-2">
                    <div class="overflow-hidden bg-white shadow-lg rounded-2xl">
                        <!-- Blog Header -->
                        <div class="px-6 py-8 text-center bg-gradient-to-r from-purple-600 to-pink-500">
                            <h1 class="text-3xl font-extrabold text-white md:text-4xl">
                                {{ $blog->title }}
                            </h1>
                            <div class="mt-3 text-sm text-purple-100">
                                <i class="bi bi-person-circle"></i>
                                <span class="font-semibold">{{ $blog->author ?? 'Admin' }}</span>
                                • {{ $blog->created_at->format('F d, Y') }}
                            </div>
                        </div>

                        <!-- Featured Image -->
                        @if ($blog->image)
                            <div class="overflow-hidden">
                                <img src="{{ asset('/public/storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                    class="object-cover w-full max-h-[300px]">
                            </div>
                        @endif

                        <!-- Blog Content -->
                        <div class="px-6 py-8">
                            <article
                                class="prose text-gray-800 max-w-none prose-p:mb-4 prose-headings:mt-6 prose-headings:mb-4 prose-img:rounded-lg prose-img:shadow-md">
                                {!! $blog->content !!}
                            </article>

                            <!-- Back Button -->
                            <div class="mt-8 text-center">
                                <a href="{{ url('/blogs') }}"
                                    class="inline-block px-5 py-2 text-sm font-medium text-white rounded-lg shadow-md bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90">
                                    ← Back to Blogs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar (Suggested Blogs) -->
                <aside class="space-y-6">
                    <div class="p-5 bg-white shadow-md rounded-2xl">
                        <h3 class="mb-4 text-lg font-bold text-gray-900">Suggested Blogs</h3>
                        <ul class="space-y-4">
                            @foreach ($suggestedBlogs as $suggested)
                                <li class="flex items-center space-x-3">
                                    @if ($suggested->image)
                                        <img src="{{ asset('storage/' . $suggested->image) }}"
                                            class="object-cover w-16 h-16 rounded-lg">
                                    @else
                                        <img src="https://via.placeholder.com/80" class="object-cover w-16 h-16 rounded-lg">
                                    @endif
                                    <div>
                                        <a href="{{ route('blogs.show', $suggested->slug) }}"
                                            class="text-sm font-medium text-gray-800 hover:text-purple-600">
                                            {{ Str::limit($suggested->title, 50) }}
                                        </a>
                                        <p class="text-xs text-gray-500">{{ $suggested->created_at->format('M d, Y') }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
