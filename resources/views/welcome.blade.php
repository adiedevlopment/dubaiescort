@extends('layouts.app')
@section('title', 'Russian Escorts in Dubai | VIP Independent Dubai Escorts Service')
@section('meta_description',
    'Our platform is dedicated to providing the best Russian escorts Dubai and Dubai escorts
    service options, ensuring 100% verified profiles, premium selection, and discreet services tailored to your needs.')
@section('meta_keywords',
    'Dubai escorts, vip call girls in Dubai, Dubai escort service, baga escorts, calangute escorts,
    miramar escorts, Dubai female escorts')
@section('canonical', url('/'))


@section('content')
    <style>
        /* Blink animation for Available badge */
        @keyframes blinkShine {

            0%,
            50%,
            100% {
                opacity: 1;
                box-shadow: 0 0 6px 2px rgba(72, 187, 120, 0.7);
            }

            25%,
            75% {
                opacity: 0.4;
                box-shadow: 0 0 12px 4px rgba(72, 187, 120, 1);
            }
        }

        .blink-shiny {
            animation: blinkShine 1.5s infinite;
        }
 
    </style>

    @php use Illuminate\Support\Str; @endphp

  <!-- Escort VIP Cards -->
<div class="grid grid-cols-1 gap-6 p-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
  @forelse ($vipEscorts as $escort)
    <div
      class="relative overflow-hidden transition-all duration-500 border border-yellow-600 shadow-xl bg-gradient-to-br from-[#2b0a0a] to-[#4a0e0e] rounded-2xl hover:shadow-yellow-800/40 hover:-translate-y-2 group">

      <!-- VIP Ribbon -->
      <div class="absolute top-4 left-[-40px] w-48 rotate-[-45deg] text-center bg-gradient-to-r from-yellow-400 to-yellow-600 text-black font-bold py-1 shadow-md">
        VIP ESCORT
      </div>

      <!-- Availability Badge -->
      <div
        class="absolute z-20 px-3 py-1 text-xs font-bold text-white uppercase bg-green-600 rounded-full shadow-md select-none top-3 right-3 animate-pulse">
        Available
      </div>

      <!-- Escort Image -->
      <img src="{{ asset('/storage/' . $escort->profile_photo) }}"
        class="object-cover w-full h-64 transition-all duration-500 group-hover:brightness-110 group-hover:scale-105"
        alt="{{ $escort->name }}">

      <!-- Content -->
      <div class="p-4 space-y-2">
        <h3 class="text-xl font-bold text-yellow-300">{{ $escort->name }}</h3>
        <p class="text-sm text-gray-300">📍 {{ ucwords(str_replace('-', ' ', $escort->location)) }}</p>

        <!-- Rating -->
        <div class="flex items-center text-sm">
          <span class="text-yellow-400">★★★★★</span>
          <span class="ml-2 text-gray-400">({{ number_format($escort->rating, 1) }})</span>
        </div>

        <!-- Buttons -->
        <div class="flex items-center gap-2 mt-3">
          <!-- Profile -->
          <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}"
            class="flex-1 px-4 py-2 font-semibold text-center text-black transition-all duration-300 rounded-lg shadow-md bg-gradient-to-r from-yellow-400 to-yellow-300 hover:from-yellow-500 hover:to-yellow-400">
            <i class="bi bi-info-circle me-1"></i> View Profile
          </a>

          <!-- WhatsApp -->
          <a href="https://wa.me/{{ $escort->whatsapp_number }}"
            class="flex items-center justify-center w-10 h-10 text-white bg-green-500 rounded-full shadow-md hover:bg-green-600">
            <i class="bi bi-whatsapp fs-5"></i>
          </a>

          <!-- Call -->
          <a href="tel:{{ $escort->phone_number }}"
            class="flex items-center justify-center w-10 h-10 text-white bg-blue-500 rounded-full shadow-md hover:bg-blue-600">
            <i class="bi bi-telephone-fill fs-5"></i>
          </a>
        </div>
      </div>
    </div>
  @empty
    <p class="text-center text-gray-400 col-span-full">No VIP Escorts available.</p>
  @endforelse
</div>


<div class="min-h-screen px-4 py-10 text-white bg-gradient-to-br from-[#2b0a0a] via-[#1a0000] to-[#4a0e0e]">


        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4">

       <!-- Main Content (Escort Cards) -->
<div class="space-y-8 lg:col-span-3">
    @forelse($escorts as $escort)
        <!-- Escort Card -->
        <div
            class="relative flex flex-col gap-6 p-5 transition duration-500 border rounded-2xl shadow-xl 
                   bg-gradient-to-br from-[#2b0a0a] to-[#4a0e0e] 
                   border-yellow-600/70 shadow-yellow-900/40 
                   hover:-translate-y-2 hover:shadow-yellow-500/50 md:flex-row group">

            <!-- Gold Ribbon -->
            <div class="absolute top-3 left-0">
                <div
                    class="px-4 py-1 text-xs font-bold tracking-wide text-black uppercase rounded-r-lg shadow-md bg-gradient-to-r from-yellow-400 to-yellow-600">
                    Premium
                </div>
            </div>

            <!-- Escort Link (Image) -->
            <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}" class="block">
                <div class="flex-shrink-0 w-full overflow-hidden rounded-xl md:w-52 h-52">
                    <img src="{{ asset('storage/' . $escort->profile_photo) }}" alt="Profile"
                         class="object-cover w-full h-full transition duration-500 group-hover:scale-105 group-hover:brightness-110" />
                </div>
            </a>

            <!-- Escort Content -->
            <div class="flex flex-col justify-between flex-grow">
                <div>
                    <!-- Title -->
                    <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}">
                        <h1
                            class="mb-3 text-2xl font-semibold tracking-wide text-yellow-300 transition md:text-3xl group-hover:text-yellow-200">
                            {{ old('custom_title', $escort->custom_title ?? '') }}
                        </h1>
                    </a>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 text-sm font-semibold text-sm   text-black rounded-lg shadow-md bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-500 hover:to-yellow-400 rounded shadow-sm">
                            {{ $escort->name }}
                        </span>
                        <span class="flex items-center gap-1 px-3 py-1 text-sm font-semibold  text-black rounded-lg shadow-md bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-500 hover:to-yellow-400 rounded shadow-sm">
                            <i class="bi bi-geo-alt-fill text-red-400"></i>
                            {{ ucwords(str_replace('-', ' ', $escort->location)) }}
                        </span>
                        <span class="px-3 py-1 text-sm font-semibold  text-black rounded-lg shadow-md bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-500 hover:to-yellow-400 rounded shadow-sm">
                            Age - {{ $escort->age }}
                        </span>
                    </div>

                    <!-- Stars -->
                    <div class="flex items-center mb-3 text-yellow-400">
                        <span class="text-lg">★★★★★</span>
                        <span class="ml-2 text-sm text-gray-400">({{ number_format($escort->rating, 1) }})</span>
                    </div>

                    <!-- Bio -->
                    <p class="text-sm leading-relaxed text-gray-300 md:text-base line-clamp-5 bio-content">
                        {!! Str::limit(strip_tags($escort->bio, '<a><b>'), 280) !!}
                    </p>
                </div>

                <!-- Actions -->
                <div
                    class="flex flex-col mt-6 space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">

                    <!-- Thumbnails -->
                    <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}">
                        <div class="flex space-x-3">
                            @if ($escort->thumb1)
                                <img src="{{ asset('storage/' . $escort->thumb1) }}"
                                    class="object-cover w-12 h-12 border-2 border-purple-600 rounded-lg shadow-md hover:scale-105 hover:border-yellow-400 transition" />
                            @endif
                            @if ($escort->thumb2)
                                <img src="{{ asset('storage/' . $escort->thumb2) }}"
                                    class="object-cover w-12 h-12 border-2 border-purple-600 rounded-lg shadow-md hover:scale-105 hover:border-yellow-400 transition" />
                            @endif
                            @if ($escort->thumb3)
                                <img src="{{ asset('storage/' . $escort->thumb3) }}"
                                    class="object-cover w-12 h-12 border-2 border-purple-600 rounded-lg shadow-md hover:scale-105 hover:border-yellow-400 transition" />
                            @endif
                        </div>
                    </a>

                    <!-- Buttons -->
                    <div class="flex items-center space-x-3">
                        <!-- Heart -->
                        <button type="button" onclick="toggleHeart(this)"
                            class="flex items-center justify-center w-10 h-10 text-white transition bg-purple-700 rounded-full hover:bg-purple-600">
                            <i class="text-lg bi bi-heart"></i>
                        </button>

                        <!-- WhatsApp -->
                        <a href="https://wa.me/{{ $escort->whatsapp_number }}"
                            class="flex items-center justify-center w-10 h-10 text-white bg-green-500 rounded-full hover:bg-green-600 shadow-md">
                            <i class="text-lg bi bi-whatsapp"></i>
                        </a>

                        <!-- Call -->
                        <a href="tel:{{ $escort->phone }}"
                            class="flex items-center justify-center w-10 h-10 text-white bg-blue-500 rounded-full hover:bg-blue-600 shadow-md">
                            <i class="text-lg bi bi-telephone"></i>
                        </a>

                        <!-- CTA Button -->
                        <a href="{{ url('/dubai/' . $escort->location . '/' . $escort->slug) }}"
                            class="flex items-center justify-center h-10 px-5 text-sm font-bold text-black rounded-lg shadow-md bg-gradient-to-r from-yellow-400 to-yellow-600 hover:from-yellow-500 hover:to-yellow-400">
                            <i class="bi bi-info-circle me-1"></i> View Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p class="text-lg font-semibold text-center text-gray-400">No Escorts Available!</p>
    @endforelse
</div>


            <!-- Sidebar (Desktop) -->
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
