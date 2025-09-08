@extends('layouts.app')
@section('title', 'Delhi Escorts | VIP Call Girls in Delhi - GirlOfDelhi')
@section('meta_description',
    'Find VIP escorts and call girls in Delhi. Browse profiles with verified photos, rates, and
    services. Book your dream companion today.')
@section('meta_keywords',
    'Delhi escorts, vip call girls in Delhi, Delhi escort service, baga escorts, calangute escorts,
    miramar escorts, Delhi female escorts')
@section('canonical', url('/'))
@section('content')
    <div class="container py-8 mx-auto">
        <h1 class="mb-4 text-2xl font-bold text-pink-500">
            Search Results for "{{ $query }}"
        </h1>

        @if (count($results) > 0)
            <ul class="space-y-2">
                @foreach ($results as $result)
                    <li>
                        <a href="{{ url('/escort/' . strtolower(str_replace(' ', '-', $result))) }}"
                            class="text-white hover:text-yellow-400">
                            {{ $result }} Escorts
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-white">No results found for "{{ $query }}"</p>
        @endif
    </div>




    <div class="bg-[#1a1a1a] min-h-screen px-4 py-10">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">

            <!-- Main Content (Escort Cards) -->
            <div class="space-y-8 lg:col-span-3">
                @forelse($escorts as $escort)
                    <!-- Card Start -->
                    <div class="bg-[#2a2a2a] p-4 rounded-xl flex flex-col md:flex-row gap-6 shadow-md">

                        <!-- Image -->
                        <div class="flex-shrink-0 w-full overflow-hidden rounded-lg md:w-52 h-52">
                            <img src="{{ asset('storage/' . $escort->profile_photo) }}" alt="Profile"
                                class="object-cover w-full h-full" />
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col justify-between flex-grow">
                            <div>
                                <h1 class="mb-3 text-2xl font-light text-white md:text-4xl">
                                    Hello, I'm Escort — Book Now In Delhi
                                </h1>

                                <div class="flex flex-wrap gap-2 mb-4">
                                    <span
                                        class="px-3 py-1 text-sm font-semibold text-black bg-red-400 rounded">{{ $escort->name }}</span>
                                    <span
                                        class="px-3 py-1 text-sm font-semibold text-black bg-green-400 rounded">{{ ucfirst($escort->location) }}</span>
                                    <span
                                        class="px-3 py-1 text-sm font-semibold text-black bg-yellow-400 rounded">{{ ucfirst($escort->services) }}</span>
                                    <span class="px-3 py-1 text-sm font-semibold text-black bg-pink-400 rounded">Age -
                                        {{ $escort->age }}</span>
                                </div>

                                <p class="text-sm leading-relaxed text-gray-300 md:text-base line-clamp-5">
                                    {!! Str::limit(strip_tags($escort->bio), 500) !!}
                                </p>
                            </div>

                            <!-- Actions -->
                            <div
                                class="flex flex-col mt-6 space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">
                                <!-- Thumbnails -->
                                <div class="flex space-x-3">
                                    @for ($i = 0; $i < 3; $i++)
                                        <img src="{{ asset('storage/' . $escort->profile_photo) }}"
                                            class="object-cover w-10 h-10 border-2 border-pink-400 rounded-lg shadow-sm" />
                                    @endfor
                                </div>

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

                                    <a href="{{ route('escort.show', ['id' => $escort->id, 'slug' => $escort->slug ?? Str::slug($escort->name)]) }}"
                                        target="_blank"
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
