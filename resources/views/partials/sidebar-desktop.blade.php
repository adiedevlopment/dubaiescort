<aside class="sticky top-0 hidden h-screen w-64 p-6 mt-4 overflow-y-auto bg-gradient-to-b from-[#4A0E0E] to-[#2E0707] text-yellow-200 border-r border-white-800 shadow-xl rounded-tr-2xl lg:block">
  <!-- Title -->
  <h2 class="mb-6 text-xl font-bold text-yellow-100 border-b border-white-700 pb-2">
    Dubai Local Area
  </h2>

  <!-- List -->
  <ul class="space-y-2">
    @foreach ($beaches as $beach)
      <li>
        <a href="{{ url('/dubai/' . $beach->slug) }}"
           class="flex items-center gap-3 p-3 text-sm font-medium rounded-lg transition-all duration-300 
                  hover:bg-yellow-200 hover:text-[#4A0E0E] hover:shadow-md">
          <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
            <circle cx="10" cy="10" r="5"></circle>
          </svg>
          {{ $beach->name }}
        </a>
      </li>
    @endforeach
  </ul>
</aside>
