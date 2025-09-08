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

<body class="text-white bg-gradient-to-br from-purple-900 via-purple-700 to-purple-500">

    @include('includes.header')
    @include('includes.subheader')

    <!-- ✅ Wrap sidebar and content in flex -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        



        <!-- Content area -->
        <div class="flex-1 p-6">
            @yield('content')

        </div>



    </div>






    @include('includes.blogfooter')

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
