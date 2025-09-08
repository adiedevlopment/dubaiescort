@extends('layouts.app')

@section('content')

    @if (request('location') || request('category') || $totalCount > 0)
        <div class="p-5 mb-6 text-sm text-gray-300 bg-[#1f1f1f] rounded-lg shadow-sm leading-6 space-y-3">

            {{-- Heading --}}
            <h2 class="text-2xl font-bold text-yellow-400">
                @if (request('category'))
                    {{ ucfirst(request('category')) }}
                @endif

                @if (request('location'))
                    Escorts {{ request('category') ? '-' : 'in' }} {{ ucwords(str_replace('-', ' ', request('location'))) }}
                @endif
            </h2>

            {{-- Total Count --}}
            @if ($totalCount > 0)
                <p>
                    We have <strong class="text-yellow-300">{{ $totalCount }}</strong>
                    {{ request('location') ? 'escorts in ' . ucwords(request('location')) : 'escorts' }} on
                    <span class="text-yellow-400">Massage Republic</span>,
                    with <strong class="text-yellow-300">{{ $verifiedCount }}</strong> verified photo profiles.
                </p>

                {{-- Services --}}
                @if (!empty($topServices))
                    <p>
                        <span class="text-yellow-300">Top services:</span>
                        <strong>{{ implode(', ', $topServices) }}</strong>.
                    </p>
                @endif

                {{-- Prices --}}
                <p>
                    <span class="text-yellow-300">Price range:</span>
                    ₹{{ number_format($minPrice) }} to ₹{{ number_format($maxPrice) }},
                    average: <strong>₹{{ number_format($avgPrice) }}</strong>.
                </p>

                {{-- Nearby --}}
                @if (!empty($nearbyLocations))
                    <p>
                        <span class="text-yellow-300">Nearby locations:</span>
                        <strong>{{ implode(', ', $nearbyLocations) }}</strong>.
                    </p>
                @endif
            @endif
        </div>
    @endif


    <div class="grid grid-cols-1 gap-6 px-4 mt-6 lg:grid-cols-4 lg:px-0">

        <!-- LEFT: Escort Cards -->
        <div class="space-y-6 lg:col-span-3">
            @forelse($escorts as $escort)
                <!-- Card Start -->
                <div class="bg-[#2a2a2a] p-4 rounded-xl flex flex-col md:flex-row gap-4 shadow-md">
                    <!-- Main Image -->
                    <div class="flex-shrink-0 w-full overflow-hidden rounded-lg md:w-52 h-52">
                        <img src="{{ asset('storage/' . $escort->profile_photo) }}" alt="Profile"
                            class="object-cover w-full h-full">
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col justify-between flex-grow">
                        <div>
                            <h2 class="text-xl font-bold text-yellow-400">
                                {{ $escort->name }} ({{ ucfirst($escort->category) }})
                            </h2>
                            <p class="mt-2 text-sm leading-snug text-gray-300 line-clamp-5">
                                {{ Str::limit($escort->bio, 500) }}
                            </p>
                        </div>

                        <div class="flex flex-col justify-between gap-4 mt-4 sm:flex-row sm:items-center">
                            <!-- Thumbnails -->
                            <div class="flex -space-x-2">
                                @foreach (explode(',', $escort->profile_photo) as $thumb)
                                    <img src="{{ asset('storage/' . trim($thumb)) }}"
                                        class="object-cover w-10 h-10 border-2 border-yellow-400 rounded" />
                                @endforeach
                            </div>

                            <a href="{{ route('escort.show', $escort->id) }}"
                                class="px-4 py-2 text-sm font-medium text-black transition bg-yellow-400 rounded-md hover:bg-yellow-500 w-max">
                                See more & contact
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card End -->
            @empty
                <p class="text-white">Koi escort nahi mila.</p>
            @endforelse
        </div>

        <!-- RIGHT SIDEBAR -->
        <div class="space-y-4 lg:sticky lg:top-20">
            <div class="flex items-center gap-2 pb-2 mb-2 text-xl font-bold text-yellow-400 border-b border-gray-600">
                What's new? <i class="text-yellow-300 bi bi-bell-fill"></i>
            </div>

            <!-- Reviews -->
            @for ($i = 1; $i <= 10; $i++)
                <div class="bg-[#222] text-gray-300 p-3 rounded flex gap-3 items-start">
                    <img src="https://d18fr84zq3fgpm.cloudfront.net/shilpa-direct-meet-no-broker-indian-escort-in-new-delhi-11992238_premium.jpg"
                        alt="User" class="object-cover w-12 h-12 rounded-md" />
                    <div class="flex-1">
                        <div>
                            <strong>New review for</strong>
                            <span class="text-yellow-400">Escort {{ $i }}</span>
                        </div>
                        <div class="text-sm">“Great service and super friendly experience...”</div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
