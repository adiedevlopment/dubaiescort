<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

      {{-- Extra meta (Open Graph / Twitter tags) --}}
    @yield('meta')
    {{-- SEO: dynamic ya default --}}
    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'yoga, fitness, health')">
    <link rel="canonical" href="@yield('canonical', url()->current())">



    {{-- -

    <title>{{ $page->meta_title ?? $page->title }}</title>
    <meta name="description" content="{{ $page->meta_description ?? Str::limit(strip_tags($page->content), 160) }}">
    <link rel="canonical" href="{{ $page->canonical_url ?? url('/page/' . $page->slug) }}">
-- --}}

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for dropdown toggle -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        body {
            color: #ccc;
            font-family: Arial, sans-serif;
        }
    </style>


</head>

<body class="text-white bg-gradient-to-br from-[#1a0b1f] via-[#2b0a2f] to-[#3d0d4a]">

    @include('includes.header')
    @include('includes.subheader')

    <!-- ✅ Wrap sidebar and content in flex -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('partials.sidebar-desktop')



        <!-- Content area -->
        <div class="flex-1 p-6">
            @yield('content')

        </div>



    </div>



    <section class="p-6 mx-auto text-white bg-black shadow-lg max-w-7xl rounded-xl">
        <h2 class="mb-6 text-3xl font-bold text-center text-pink-400">
            Dubai Escorts Girls – Premium Escort Services in Dubai
        </h2>

        <p class="mb-4 leading-relaxed text-gray-300">
            Dubai, known for its breathtaking beaches, vibrant nightlife, and rich cultural heritage, is also home to some
            of the finest escort services in India. When it comes to finding the perfect companion to make your visit to
            Dubai unforgettable, <span class="font-semibold text-pink-400">Dubai Escorts Girls</span> stand out with their
            charm, elegance, and professionalism.
        </p>

        <!-- Image Row -->
        <div class="grid grid-cols-1 gap-4 mb-6 sm:grid-cols-3">
            <img src="/frontend/escorts/s-1.png" alt="Escort 1" class="object-cover w-full h-64 rounded-lg shadow-lg">
            <img src="/frontend/escorts/s-2.png" alt="Escort 2" class="object-cover w-full h-64 rounded-lg shadow-lg">
            <img src="/frontend/escorts/s-3.png" alt="Escort 3" class="object-cover w-full h-64 rounded-lg shadow-lg">
        </div>

        <p class="mb-4 leading-relaxed text-gray-300">
            Our <span class="font-semibold text-pink-400">Dubai escorts</span> offer an exceptional experience tailored to
            your preferences. Whether you want a sophisticated companion for a high-profile event, a charming partner
            for a romantic evening, or a friendly guide to explore Dubai’s hidden gems, our escorts cater to all your
            needs with utmost discretion and care.
        </p>

        <h3 class="mt-8 mb-3 text-2xl font-semibold text-pink-400">
            Why Choose Dubai Escorts Girls?
        </h3>
        <ul class="space-y-2 text-gray-300 list-disc list-inside">
            <li><strong>Professionalism and Privacy:</strong> Our escorts value your privacy and ensure a confidential
                and respectful experience.</li>
            <li><strong>Diverse Profiles:</strong> From young, bubbly companions to mature and elegant ladies, we have a
                wide range to suit your taste.</li>
            <li><strong>Well-Trained and Sophisticated:</strong> Each escort is refined and well-versed in social
                etiquette.</li>
            <li><strong>Available 24/7:</strong> Our escorts are ready to meet your schedule anytime, day or night.</li>
        </ul>

        <!-- Image Row -->
        <div class="grid grid-cols-1 gap-4 my-6 sm:grid-cols-3">
            <img src="/frontend/escorts/s-4.png" alt="Escort 4" class="object-cover w-full h-64 rounded-lg shadow-lg">
            <img src="/frontend/escorts/s-5.png" alt="Escort 5" class="object-cover w-full h-64 rounded-lg shadow-lg">
            <img src="/frontend/escorts/s-6.png" alt="Escort 6" class="object-cover w-full h-64 rounded-lg shadow-lg">
        </div>

        <h3 class="mt-8 mb-3 text-2xl font-semibold text-pink-400">
            Services Offered
        </h3>
        <ul class="space-y-2 text-gray-300 list-disc list-inside">
            <li>Personalized Companionship tailored to your preferences.</li>
            <li>Event Escorts for social and business occasions.</li>
            <li>Travel Companions to explore Dubai with charm and comfort.</li>
            <li>VIP and Luxury Services for exclusive high-end experiences.</li>
        </ul>

        <!-- Image Row -->
        <div class="grid grid-cols-1 gap-4 my-6 sm:grid-cols-3">
            <img src="/frontend/escorts/s-7.png" alt="Escort 7" class="object-cover w-full h-64 rounded-lg shadow-lg">
            <img src="/frontend/escorts/s-8.png" alt="Escort 8" class="object-cover w-full h-64 rounded-lg shadow-lg">
            <img src="/frontend/escorts/s-9.png" alt="Escort 9" class="object-cover w-full h-64 rounded-lg shadow-lg">
        </div>

        <h3 class="mt-8 mb-3 text-2xl font-semibold text-pink-400">
            Experience Dubai Like Never Before
        </h3>
        <p class="mb-4 leading-relaxed text-gray-300">
            With a Dubai escort, every moment becomes special. Whether relaxing on the sandy beaches of Baga and Anjuna or
            enjoying vibrant nightlife, your companion will enhance your experience with warmth and companionship.
        </p>

        <h3 class="mt-8 mb-3 text-2xl font-semibold text-pink-400">
            Booking and Availability
        </h3>
        <p class="mb-4 leading-relaxed text-gray-300">
            Booking your perfect Dubai escort is simple and hassle-free. We provide verified profiles with photos,
            detailed descriptions, and reviews to help you make an informed choice. Our easy booking system and discreet
            service guarantee your satisfaction.
        </p>

        <h3 class="mt-8 mb-3 text-2xl font-semibold text-pink-400">
            Final Words
        </h3>
        <p class="mb-4 leading-relaxed text-gray-300">
            If you’re searching for the finest <span class="font-semibold text-pink-400">Dubai Escorts Girls</span>,
            you’re at the right place. Our dedicated team works tirelessly to connect you with professional, attractive,
            and courteous companions who understand hospitality and discretion.
        </p>
        <p class="mt-6 text-lg font-semibold text-center text-pink-400">
            Experience the best of Dubai with the perfect escort by your side — because you deserve nothing less than
            excellence.
        </p>

        <div class="mt-8 fbody">
    <hr />
  <h3 class="mt-8 mb-3 text-2xl font-semibold text-center text-pink-400">
            Category Variation
        </h3>
<hr />
<p>People often search for <strong data-start="208" data-end="236">escort services in Dubai</strong> using different terms based on their preference or awareness. Some may use the direct phrase like <a href="#russian-escorts-in-Dubai">Russian Escorts in Dubai</a>, while others choose a broader description such as <strong data-start="415" data-end="439" data-is-only-node="">Dubai Escorts Agency</strong>. Many also prefer casual or alternative names, including <strong data-start="497" data-end="593">VIP Escorts, Female Escorts in Dubai, Russian Call Girl Service, or Russian Escort Providers</strong>, but all of them point to the same requirement.</p>
<hr />
  <h3 class="mt-8 mb-3 text-2xl font-semibold text-center text-pink-400">
           Trending Searches
        </h3>
<hr />
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: left;"><strong><a href="https://Dubaibeautie.com/#russian-escorts-in-Dubai">Russian Escorts In Dubai</a> | <a href="https://Dubaibeautie.com/#Dubai-russian-escorts">Dubai Russian Escorts</a> | <a href="https://Dubaibeautie.com/#russian-escorts-Dubai">Russian Escorts Dubai</a> | <a href="https://Dubaibeautie.com/#Dubai-escorts-russian">Dubai Escorts Russian</a> | <a href="https://Dubaibeautie.com/#russian-escorts-service-Dubai">Russian Escorts Service Dubai</a> | <a href="https://Dubaibeautie.com/#russian-Dubai-escorts">Russian Dubai Escorts</a></strong></p>
<hr />


</div>



    </section>


    @include('includes.footer')

    <script>
        function toggleHeart(btn) {
            const icon = btn.querySelector("i");
            if (icon.classList.contains("bi-heart")) {
                icon.classList.remove("bi-heart");
                icon.classList.add("bi-heart-fill");
                btn.classList.remove("bg-gray-500", "hover:bg-gray-600");
                btn.classList.add("bg-red-500", "hover:bg-red-600");
            } else {
                icon.classList.remove("bi-heart-fill");
                icon.classList.add("bi-heart");
                btn.classList.remove("bg-red-500", "hover:bg-red-600");
                btn.classList.add("bg-gray-500", "hover:bg-gray-600");
            }
        }
    </script>


    <style>
        .bio-content a {
            color: #f472b6;
            /* Tailwind pink-400 */
            font-weight: 600;
            /* Bold */
            text-decoration: underline;
            /* underline */
            text-decoration-color: #f472b6;
            /* pink-400 underline */
            text-underline-offset: 5px;
            /* adds margin/space between text & underline */
        }

        .bio-content a:hover {
            color: #be185d;
            /* Tailwind pink-700 on hover */
            background-color: rgba(244, 114, 182, 0.1);
            /* Light pink bg highlight */
            border-radius: 4px;
            padding: 2px 4px;
        }
    </style>

    <style>
        .bio-content a {
            color: #f472b6;
            /* Tailwind pink-400 */

            /* Bold */

            /* adds margin/space between text & underline */
            border-bottom: 2.5px solid #f472b6;
        }

        .bio-content a:hover {
            color: #be185d;
            /* Tailwind pink-700 on hover */
            background-color: rgba(244, 114, 182, 0.1);
            /* Light pink bg highlight */
            border-radius: 4px;
            padding: 2px 4px;
        }
    </style>



</body>

</html>
