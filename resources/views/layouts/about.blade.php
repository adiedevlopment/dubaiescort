<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')

    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
    <link rel="canonical" href="@yield('canonical')">




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

<body class="bg-black bg-[url('/path-to-your-texture.png')] bg-repeat bg-center bg-fixed">


    @include('includes.header')
    @include('includes.subheader')

    <!-- ✅ Wrap sidebar and content in flex -->
    <div class="flex min-h-screen">



        <!-- Content area -->
        <div class="flex-1 p-6">
            @yield('content')

        </div>



    </div>




 



    </section>


    @include('includes.aboutfooter')

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

</body>

</html>
