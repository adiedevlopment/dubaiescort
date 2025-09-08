@extends('layouts.app')
@section('title', $seoTitle)
@section('meta_description', $seoDescription)
@section('meta_keywords', $seoKeywords)
@section('canonical', $canonicalUrl)

@section('meta')
    <meta property="og:title" content="{{ $seoTitle }}">
    <meta property="og:description" content="{{ $seoDescription }}">
    <meta property="og:url" content="{{ $canonicalUrl }}">
    <meta property="og:image" content="{{ asset('storage/' . $escort->profile_photo) }}">
@endsection

@section('content')
    <div class="px-6 py-10 mx-auto text-white max-w-7xl">
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-12">

            {{-- Escort Gallery with Main Image and Thumbnails --}}
            <div x-data="{ activePhoto: '{{ $escort->profile_photo ? asset('storage/' . $escort->profile_photo) : asset('default.jpg') }}' }" class="space-y-4 lg:col-span-5">

                {{-- Main Image --}}
                <div class="relative overflow-hidden border border-gray-700 rounded-lg shadow-lg">
                    <img :src="activePhoto"
                        src="{{ $escort->profile_photo ? asset('storage/' . $escort->profile_photo) : asset('default.jpg') }}"
                        alt="{{ $escort->name }}"
                        class="object-cover w-full transition-all duration-300 rounded-lg h-72 sm:h-96">
                </div>

                {{-- Thumbnails --}}
                <div class="grid grid-cols-4 gap-3">
                    @php
                        $photos = [$escort->thumb1, $escort->thumb2, $escort->thumb3];
                    @endphp

                    @foreach ($photos as $photo)
                        @if ($photo)
                            @php $photoUrl = asset('storage/' . trim($photo)); @endphp
                            <div class="transition border-2 rounded-lg cursor-pointer hover:border-pink-500"
                                :class="{ 'border-pink-500': activePhoto === '{{ $photoUrl }}' }"
                                @click="activePhoto = '{{ $photoUrl }}'">
                                <img src="{{ $photoUrl }}" class="object-cover w-full h-20 rounded">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>




            {{-- Right Details --}}
            <div class="space-y-6 lg:col-span-7">
                {{-- Name & Bio --}}
                <div>
                    <h1 class="text-3xl font-bold text-pink-500">{{ $escort->name }}</h1>
                    <p class="mt-2 text-gray-300">{!! $escort->bio !!}</p>

                </div>
                {{-- Details Grid Split for Mobile --}}
                <div class="space-y-6 text-sm text-gray-300 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-3">

                    {{-- Left Section --}}
                    <div class="space-y-3">
                        <x-detail label="Category" :value="ucfirst($escort->category)" />
                        <x-detail label="Location" :value="$escort->location" />
                        <x-detail label="Gender" :value="ucfirst($escort->gender)" />
                        <x-detail label="Age" :value="$escort->age" />
                        <x-detail label="Height" :value="$escort->height ?? 'N/A'" />
                        <x-detail label="Breast" :value="$escort->bust ?? 'N/A'" />
                        <x-detail label="Languages" :value="$escort->languages_spoken" />
                        <x-detail label="Nationality" :value="$escort->nationality ?? 'N/A'" />
                    </div>



                    {{-- Right Section --}}
                    <div class="space-y-3">
                        <x-detail label="Orientation" :value="$escort->orientation ?? 'N/A'" />
                        <x-detail label="Ethnicity" :value="$escort->ethnicity ?? 'N/A'" />
                        <x-detail label="Shaved" :value="$escort->shaved ?? 'N/A'" />
                        <x-detail label="Hair Color" :value="$escort->hair_color ?? 'N/A'" />
                        <x-detail label="Smokes" :value="$escort->smokes ? 'Yes' : 'No'" />
                        <x-detail label="Experience" :value="$escort->experience . ' years'" />
                        <x-detail label="Incall Rate" :value="'₹' . $escort->rate_per_hour" />
                        <x-detail label="Outcall Rate" :value="'₹' . ($escort->outcall_rate ?? 'N/A')" />
                    </div>

                </div>

                {{-- Services --}}
                <div>
                    <h3 class="mb-1 text-lg font-semibold text-pink-400">Services</h3>
                    <p class="text-sm text-gray-300">{{ $escort->services }}</p>
                </div>

                {{-- Contact --}}
                <div class="p-5 space-y-4 bg-gray-800 border border-gray-700 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-pink-400">Contact Information</h3>
                    <div class="space-y-2">
                        <p><span class="font-semibold"><i class="text-green-400 bi bi-telephone-fill"></i> Phone:</span>
                            {{ $escort->phone }}</p>
                        <p><span class="font-semibold"><i class="text-yellow-400 bi bi-envelope-fill"></i> Email:</span>
                            {{ $escort->email }}</p>
                    </div>

                    {{-- Contact Buttons --}}
                    <div class="flex gap-3 mt-4">
                        <a href="tel:{{ $escort->phone }}"
                            class="flex items-center justify-center w-full gap-2 px-4 py-2 text-sm font-semibold text-white transition bg-green-500 rounded hover:bg-green-600">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="https://wa.me/{{ preg_replace('/\D/', '', $escort->phone) }}" target="_blank"
                            class="flex items-center justify-center w-full gap-2 px-4 py-2 text-sm font-semibold text-white transition bg-green-400 rounded hover:bg-green-500">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>


                <div>

                    <p class="mt-2 text-gray-300">{!! $escort->about !!}</p>

                </div>

                </div>

            </div>
        </div>
    @endsection
