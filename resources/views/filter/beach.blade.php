@extends('layouts.app')

@section('meta')
    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeywords }}">
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('storage/' . ($beachDetails->image ?? 'default.jpg')) }}">
    <link rel="canonical" href="{{ $canonical }}">
@endsection

@section('content')

    @if ($totalCount > 0)
        <div class="p-5 mb-6 text-sm text-gray-300 bg-[#1f1f1f] rounded-lg shadow-sm leading-6 space-y-3">

            {{-- Heading --}}
            <h2 class="text-2xl font-bold text-pink-400">
                Escorts in {{ ucwords(str_replace('-', ' ', $beachDetails->name)) }}
            </h2>

            {{-- Total Count --}}
            <p>
                We have <strong class="text-pink-400">{{ $totalCount }}</strong> escorts on
                <span class="text-pink-400">Dubai Escorts</span>,
                with <strong class="text-pink-400">{{ $verifiedCount }}</strong> verified photo profiles.
            </p>

            {{-- Services --}}
            @if (!empty($topServices))
                <p>
                    <span class="text-pink-400">Top services:</span>
                    <strong>{{ implode(', ', $topServices) }}</strong>.
                </p>
            @endif

            {{-- Prices --}}
            <p>
                <span class="text-pink-400">Price range:</span>
                ₹{{ number_format($minPrice) }} – ₹{{ number_format($maxPrice) }},
                average: <strong>₹{{ number_format($avgPrice) }}</strong>.
            </p>

            {{-- Nearby --}}
            @if (!empty($nearbyLocations))
                <p>
                    <span class="text-pink-400">Nearby locations:</span>
                    <strong>{{ implode(', ', $nearbyLocations) }}</strong>.
                </p>
            @endif
        </div>
    @endif


    <div class="bg-[#1a1a1a] min-h-screen px-4 py-10">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">

            <!-- Main Content (Escort Cards) -->
            <div class="space-y-8 lg:col-span-3">
                @forelse($escorts as $escort)
                    <!-- Card Start -->
                    <div class="bg-[#2a2a2a] p-4 rounded-xl flex flex-col md:flex-row gap-6 shadow-md">

                        <!-- Image -->
                         <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}"
                                    class="block group">
                        <div class="flex-shrink-0 w-full overflow-hidden rounded-lg md:w-52 h-52">
                            <img src="{{ asset('storage/' . $escort->profile_photo) }}" alt="{{ $escort->name }}"
                                class="object-cover w-full h-full" />
                        </div>
                    </a>

                        <!-- Content -->
                        <div class="flex flex-col justify-between flex-grow">
                            <div>
                                 <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}"
                                    class="block group">
                                   <h1 class="mb-3 text-2xl font-light text-white md:text-3xl">
                                        {{ old('custom_title', $escort->custom_title ?? '') }}
                                    </h1>
                                </a>

                                 <a href="{{ url('/delhi/' . $escort->location . '/' . $escort->slug) }}"
                                    class="block group">
                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span class="px-3 py-1 text-sm font-semibold text-black bg-red-400 rounded">
                                        {{ $escort->name }}
                                    </span>
                                    <span class="px-3 py-1 text-sm font-semibold text-black bg-green-400 rounded">
                                     {{ ucwords(str_replace('-', ' ', $escort->location)) }}

                                    </span>

                                    <span class="px-3 py-1 text-sm font-semibold text-black bg-pink-400 rounded">
                                        Age - {{ $escort->age }}
                                    </span>
                                </div>
                            </a>

                                <!-- Bio -->
                                <p class="text-sm leading-relaxed text-gray-300 md:text-base line-clamp-5 bio-content">
                                    {!! Str::limit(strip_tags($escort->bio, '<a><b>'), 280) !!}
                                </p>
                            </div>

                            <!-- Actions -->
                            <div
                                class="flex flex-col mt-6 space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">
                                <!-- Thumbnails -->
                                <a href="{{ url('/delhi/' . $escort->location . '/' . $escort->slug) }}"
                                    class="block group">

                                    <div class="flex space-x-3">
                                        @if ($escort->thumb1)
                                            <img src="{{ asset('storage/' . $escort->thumb1) }}"
                                                class="object-cover w-10 h-10 border-2 border-pink-400 rounded-lg shadow-sm" />
                                        @endif

                                        @if ($escort->thumb2)
                                            <img src="{{ asset('storage/' . $escort->thumb2) }}"
                                                class="object-cover w-10 h-10 border-2 border-pink-400 rounded-lg shadow-sm" />
                                        @endif

                                        @if ($escort->thumb3)
                                            <img src="{{ asset('storage/' . $escort->thumb3) }}"
                                                class="object-cover w-10 h-10 border-2 border-pink-400 rounded-lg shadow-sm" />
                                        @endif
                                    </div>

                                </a>

                                <!-- Contact Buttons -->
                                <div class="flex items-center space-x-2">
                                    <button type="button" onclick="toggleHeart(this)"
                                        class="flex items-center justify-center w-10 h-10 text-white transition bg-gray-500 rounded-full hover:bg-gray-600">
                                        <i class="text-lg bi bi-heart"></i>
                                    </button>

                                    <a href="https://wa.me/{{ $escort->whatsapp_number }}" target="_blank"
                                        class="flex items-center justify-center w-10 h-10 text-white bg-green-500 rounded-full hover:bg-green-600">
                                        <i class="text-lg bi bi-whatsapp"></i>
                                    </a>

                                    <a href="tel:{{ $escort->phone }}"
                                        class="flex items-center justify-center w-10 h-10 text-white bg-blue-500 rounded-full hover:bg-blue-600">
                                        <i class="text-lg bi bi-telephone"></i>
                                    </a>

                                    <!-- ✅ Fixed URL -->
                                    <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}"
                                        class="flex items-center justify-center h-10 px-4 text-sm font-semibold text-black transition bg-pink-400 rounded-md hover:bg-yellow-500">
                                        <i class="bi bi-info-circle me-1"></i> See More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card End -->
                @empty
                    <p class="text-lg font-semibold text-center text-white">No Escorts Available!</p>
                @endforelse


                <h1 class="mt-10 text-3xl font-bold text-pink-400">{{ $beachDetails->name }} Beach</h1>

                <div class="mt-2 text-gray-300">{!! $beachDetails->description !!}</div>

                @if ($beachDetails->photos)
                    <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-3">
                        @foreach (json_decode($beachDetails->photos) as $photo)
                            <img src="{{ asset('storage/beaches/' . $photo) }}" class="rounded-lg shadow-lg">
                        @endforeach
                    </div>
                @endif
            </div>

            <!-- Sidebar (hidden on mobile, visible on desktop) -->
            <div class="hidden lg:block">
                @include('partials.sidebar')
            </div>

            <!-- Sidebar Mobile -->
            <div class="lg:hidden">
                @include('partials.sidebar-mobile')
            </div>
        </div>
    </div>
@endsection
