<!-- resources/views/auth/login-dark.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Admin Login — Girls Of Dubai</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen p-6 text-gray-100 bg-gradient-to-b from-gray-900 via-black to-gray-900">

    <div class="grid w-full max-w-3xl grid-cols-1 gap-8 md:grid-cols-2">
    <!-- Left: Brand / Promo -->
    <div class="hidden md:flex flex-col justify-center px-8 py-10 bg-[url('/images/texture.jpg')] bg-cover rounded-xl shadow-xl">
      <div class="mb-6">
        <h1 class="text-4xl font-extrabold tracking-tight">Girls Of Dubai</h1>
        <p class="mt-2 text-gray-400">Private, professional matches — secure booking & discreet support.</p>
      </div>
      <ul class="space-y-3 text-gray-300">
        <li class="flex items-start gap-3">
          <span class="inline-block p-2 text-xs font-semibold bg-pink-600 rounded-full">✓</span>
          <span class="text-sm">Verified profiles</span>
        </li>
        <li class="flex items-start gap-3">
          <span class="inline-block p-2 text-xs font-semibold bg-pink-600 rounded-full">✓</span>
          <span class="text-sm">Secure payments</span>
        </li>
        <li class="flex items-start gap-3">
          <span class="inline-block p-2 text-xs font-semibold bg-pink-600 rounded-full">✓</span>
          <span class="text-sm">Discreet support 24/7</span>
        </li>
      </ul>
    </div>
     <!-- Right: Login form -->
    <div class="p-8 shadow-lg bg-gray-800/60 backdrop-blur-sm rounded-xl">
      <h2 class="mb-4 text-2xl font-semibold">Sign in to your account</h2>
      <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <div>
          <label class="text-sm text-gray-300">Email</label>
          <input name="email" type="email" required
                 class="w-full px-3 py-2 mt-1 text-gray-100 bg-gray-900 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                 placeholder="you@example.com">
        </div>

        <div>
          <label class="text-sm text-gray-300">Password</label>
          <div class="relative">
            <input name="password" type="password" required id="pwd"
                   class="w-full px-3 py-2 mt-1 text-gray-100 bg-gray-900 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                   placeholder="••••••••">
            <button type="button" onclick="togglePwd()" class="absolute text-sm text-gray-400 right-2 top-2">Show</button>
          </div>
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center gap-2 text-gray-300">
            <input type="checkbox" name="remember" class="w-4 h-4 text-pink-600 rounded" />
            Remember me
          </label>
          <a href="{{ route('password.request') }}" class="text-pink-400 hover:underline">Forgot?</a>
        </div>

        <div>
          <button type="submit" class="w-full py-2 font-medium text-white bg-pink-600 rounded-md hover:bg-pink-700">Sign in</button>
        </div>

        <div class="text-xs text-center text-gray-400">or continue with</div>
        <div class="flex gap-3 mt-2">
          <a href="#" class="flex-1 py-2 text-center text-gray-200 border border-gray-700 rounded-md hover:bg-gray-700">Google</a>
          <a href="#" class="flex-1 py-2 text-center text-gray-200 border border-gray-700 rounded-md hover:bg-gray-700">Apple</a>
        </div>

        <p class="mt-4 text-sm text-center text-gray-400">
          New to Girls Of Dubai?
          <a href="{{ route('register') }}" class="text-pink-400 hover:underline">Create an account</a>
        </p>
      </form>
    </div>
  </div>

<script>
function togglePwd(){
  const p = document.getElementById('pwd');
  if(p.type === 'password'){ p.type = 'text'; } else { p.type = 'password'; }
}
</script>
</body>
</html>
