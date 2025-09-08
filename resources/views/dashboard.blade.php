<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen p-4 bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600">

    <div class="w-full max-w-3xl p-8 text-center shadow-2xl backdrop-blur-md rounded-xl bg-white/10">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white">Welcome, {{ auth()->user()->name }}!</h1>
        <p class="mb-6 text-lg text-gray-800 dark:text-gray-200">You're successfully logged in. Explore your dashboard below and manage your activities.</p>

        {{-- Role check for admin --}}
        @if (auth()->user() && auth()->user()->role === 'admin')
            <a href="{{ url('/admin/dashboard') }}" class="inline-block px-6 py-3 mb-4 font-semibold text-white transition bg-purple-700 rounded-lg shadow-lg hover:bg-purple-800">
                Go to Admin Dashboard
            </a>
        @endif

        {{-- Role check for user --}}
        @if (auth()->user() && auth()->user()->role === 'user')
            <a href="{{ url('/dashboard') }}" class="inline-block px-6 py-3 mb-4 font-semibold text-white transition bg-purple-700 rounded-lg shadow-lg hover:bg-purple-800">
                Go to My Dashboard
            </a>
        @endif

        {{-- Home button --}}
        <div class="mt-4">
            <a href="{{ url('/') }}" class="inline-block px-6 py-3 font-semibold text-purple-700 transition bg-white rounded-lg shadow-lg hover:bg-purple-50">
                Go to Home
            </a>
        </div>
    </div>

</body>
</html>
