<!-- resources/views/auth/register-dark.blade.php -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register — Girls Of Goa</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen p-6 text-gray-100 bg-gradient-to-b from-gray-900 via-black to-gray-900">
  <div class="grid w-full max-w-4xl grid-cols-1 gap-8 md:grid-cols-2">

    <!-- Left: Brand / Info -->
    <div class="hidden md:flex flex-col justify-center px-8 py-10 bg-[url('/images/texture.jpg')] bg-cover rounded-xl shadow-xl">
      <h1 class="text-4xl font-extrabold">Girls Of Goa</h1>
      <p class="mt-2 text-gray-400">Join the most exclusive escort & companion service network.</p>
      <ul class="mt-6 space-y-3 text-sm text-gray-300">
        <li class="flex items-start gap-3">
          <span class="inline-block p-2 text-xs font-semibold bg-pink-600 rounded-full">✓</span>
          Access verified and elite profiles
        </li>
        <li class="flex items-start gap-3">
          <span class="inline-block p-2 text-xs font-semibold bg-pink-600 rounded-full">✓</span>
          Private & discreet booking system
        </li>
        <li class="flex items-start gap-3">
          <span class="inline-block p-2 text-xs font-semibold bg-pink-600 rounded-full">✓</span>
          24/7 concierge support
        </li>
      </ul>
    </div>

    <!-- Right: Registration Form -->
    <div class="p-8 shadow-lg bg-gray-800/60 backdrop-blur-sm rounded-xl">
      <h2 class="mb-4 text-2xl font-semibold">Create your account</h2>
      <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <div>
          <label class="text-sm text-gray-300">Full Name</label>
          <input name="name" type="text" required
                 class="w-full px-3 py-2 mt-1 text-gray-100 bg-gray-900 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                 placeholder="John Doe">
        </div>

        <div>
          <label class="text-sm text-gray-300">Email</label>
          <input name="email" type="email" required
                 class="w-full px-3 py-2 mt-1 text-gray-100 bg-gray-900 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                 placeholder="you@example.com">
        </div>

        <div>
          <label class="text-sm text-gray-300">Phone Number</label>
          <input name="phone" type="text"
                 class="w-full px-3 py-2 mt-1 text-gray-100 bg-gray-900 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                 placeholder="+91 98xxxxxxx">
        </div>

        <div>
          <label class="text-sm text-gray-300">Password</label>
          <div class="relative">
            <input id="pwd" name="password" type="password" required
                   class="w-full px-3 py-2 mt-1 text-gray-100 bg-gray-900 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                   placeholder="••••••••">
            <button type="button" onclick="togglePwd()" class="absolute text-sm text-gray-400 right-2 top-2">Show</button>
          </div>
        </div>

        <div>
          <label class="text-sm text-gray-300">Confirm Password</label>
          <input name="password_confirmation" type="password" required
                 class="w-full px-3 py-2 mt-1 text-gray-100 bg-gray-900 border border-gray-700 rounded-md focus:outline-none focus:ring-2 focus:ring-pink-500"
                 placeholder="••••••••">
        </div>

        <div class="flex items-start gap-2 text-xs text-gray-400">
          <input type="checkbox" required class="w-4 h-4 mt-1 text-pink-600 rounded" />
          <span>I agree to the <a href="/terms" class="text-pink-400 hover:underline">Terms & Conditions</a></span>
        </div>

        <div>
          <button type="submit" class="w-full py-2 font-medium text-white bg-pink-600 rounded-md hover:bg-pink-700">
            Sign up
          </button>
        </div>

        <p class="mt-4 text-sm text-center text-gray-400">
          Already have an account?
          <a href="{{ route('login') }}" class="text-pink-400 hover:underline">Sign in</a>
        </p>
      </form>
    </div>
  </div>

<script>
function togglePwd(){
  const p = document.getElementById('pwd');
  p.type = p.type === 'password' ? 'text' : 'password';
}
</script>
</body>
</html>
