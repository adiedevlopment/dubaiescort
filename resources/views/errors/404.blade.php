<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>404 • Page Not Found</title>
    <meta name="description" content="404 error page for a female escorts website with a modern pink theme." />

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              brand: {
                50: '#fff1f8',
                100: '#ffe4f1',
                200: '#fec7e2',
                300: '#fba4cf',
                400: '#f66db0',
                500: '#ec4899', // pink
                600: '#db2777',
                700: '#be185d',
                800: '#9d174d',
                900: '#831843',
              },
            },
            boxShadow: {
              glow: '0 0 0 4px rgba(236, 72, 153, 0.15)',
            },
            keyframes: {
              float: {
                '0%, 100%': { transform: 'translateY(0px)' },
                '50%': { transform: 'translateY(-8px)' },
              },
              pulseSoft: {
                '0%, 100%': { opacity: 0.25 },
                '50%': { opacity: 0.5 },
              },
            },
            animation: {
              float: 'float 6s ease-in-out infinite',
              pulseSoft: 'pulseSoft 4s ease-in-out infinite',
            },
          },
        },
      };
    </script>
  </head>


    @include('includes.header')
    @include('includes.subheader')
  <body class="min-h-screen bg-gradient-to-br from-gray-900 via-rose-950 to-black text-rose-100 selection:bg-rose-700/60">
    <!-- Decorative Blobs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
      <div class="absolute rounded-full -top-24 -left-24 h-72 w-72 bg-rose-200 blur-3xl opacity-60 animate-pulseSoft"></div>
      <div class="absolute rounded-full -bottom-20 -right-16 h-80 w-80 bg-fuchsia-200 blur-3xl opacity-60 animate-pulseSoft" style="animation-delay:1s"></div>
    </div>

    <main class="relative z-10 flex items-center justify-center min-h-screen p-6">
      <section class="w-full max-w-4xl">
        <!-- Card -->
        <div class="mx-auto shadow-2xl rounded-3xl bg-white/80 ring-1 ring-rose-100 backdrop-blur">
          <div class="flex flex-col-reverse gap-10 p-8 md:flex-row md:items-center md:p-12">
            <!-- Text Content -->
            <div class="flex-1">
              <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-3 py-1 text-xs font-medium rounded-full bg-rose-50 text-rose-600 ring-1 ring-rose-200 hover:bg-rose-100">
                ← Back to Homepage
              </a>

              <h1 class="mt-5 font-extrabold tracking-tight text-7xl text-rose-700 md:text-8xl">
                4<span class="inline-block animate-float">0</span>4
              </h1>
              <h2 class="mt-3 text-2xl font-semibold text-rose-800">Sorry Page Not Found</h2>
              <p class="mt-3 max-w-prose text-rose-600">
                Sorry, the page you're looking for doesn’t exist or has been moved. Try checking the URL, use the search below, or head back to our homepage.
              </p>

              <!-- Search Box -->
              <form action="{{ url('/search') }}" method="GET" class="mt-6">
                <label for="q" class="sr-only">Search</label>
                <div class="flex items-center gap-2 p-2 bg-white border shadow-sm rounded-2xl border-rose-200 focus-within:shadow-glow">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-rose-500">
                    <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 105.356 10.86l3.266 3.267a.75.75 0 101.06-1.06l-3.266-3.267A6.75 6.75 0 0010.5 3.75zm-5.25 6.75a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0z" clip-rule="evenodd" />
                  </svg>
                  <input id="q" name="q" type="text" placeholder="Search escorts, cities, services…" class="w-full px-2 py-2 bg-transparent border-none rounded-xl text-rose-900 placeholder-rose-400 focus:outline-none" />
                  <button type="submit" class="px-4 py-2 text-sm font-semibold text-white shadow rounded-xl bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-300">
                    Search
                  </button>
                </div>
              </form>

            </div>

            <!-- Visual Side -->
            <div class="flex-1">
              <div class="flex flex-col items-center max-w-xs mx-auto text-center md:max-w-sm">


                <div class="relative mt-6">
                  <!-- Illustration Frame -->
                  <div class="relative p-6 overflow-hidden border shadow-xl rounded-3xl border-rose-100 bg-gradient-to-br from-rose-50 to-pink-50">
                    <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_30%_20%,rgba(236,72,153,0.12),transparent_40%),radial-gradient(circle_at_70%_60%,rgba(217,70,239,0.12),transparent_35%)]"></div>

                    <div class="space-y-2">
                      <p class="text-sm font-medium tracking-wider uppercase text-rose-500">Escorts Directory</p>
                      <p class="text-3xl font-bold leading-tight text-rose-800">You look stunning,
                        <span class="text-rose-600">but this page doesn’t.</span>
                      </p>
                      <p class="text-sm text-rose-600">Let's get you back to somewhere more exciting.</p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="flex flex-wrap items-center gap-3 mt-5">
                      <a href="{{ url('/') }}" class="inline-flex items-center justify-center rounded-2xl bg-rose-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-rose-600/20 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-300">Go Home</a>
                      <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center rounded-2xl bg-white px-5 py-2.5 text-sm font-semibold text-rose-700 ring-1 ring-rose-200 hover:bg-rose-50">Contact Support</a>
                    </div>
                  </div>

                  <!-- Floating Accent Badge -->
                  <div class="absolute px-3 py-1 text-xs font-semibold bg-white rounded-full shadow-lg select-none -right-3 -top-3 text-rose-600 ring-1 ring-rose-100">
                    24/7 Assistance
                  </div>
                </div>

                <!-- Small Note -->
                <p class="mt-4 text-xs text-rose-500">Error code: <span class="font-mono">404</span></p>
              </div>
            </div>
          </div>
        </div>


    </main>



    @include('includes.error-footer')
  </body>
</html>
