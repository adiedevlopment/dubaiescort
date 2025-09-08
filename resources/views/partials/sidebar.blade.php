<div class="w-full space-y-8 md:w-72">

<!-- Special Offer -->
<div class="p-6 rounded-2xl bg-gradient-to-br from-[#2b0a0a] via-[#3d0d0d] to-[#4A0E0E] border border-yellow-700 shadow-xl shadow-yellow-900/30">

  <!-- Header -->
  <div class="mb-4 text-center">
    <h2 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-200 drop-shadow-lg">
      ✨ Special Offer ✨
    </h2>
    <p class="mt-1 text-sm text-gray-300">Best Dubai Russian Escorts</p>
  </div>

  <!-- Offer Image -->
  <div class="my-5">
    <img src="/frontend/gif.gif" alt="Offer GIF"
      class="object-cover w-full h-56 rounded-xl shadow-lg shadow-yellow-900/40 ring-2 ring-yellow-600/50">
  </div>

  <!-- Title -->
  <div class="pb-3 mb-5 text-center border-b border-yellow-700">
    <h1 class="text-xl font-bold text-yellow-300"> Dubai Escorts Providing </h1>
  </div>

  <!-- Service List -->
  <ul class="space-y-3">
    @php
      $services = [
        'Blow Job',
        'Anal Sex',
        'Blow Job Without Condom',
        'Cum in Mouth',
        'Cum on Body',
        'Deep French Kissing',
        'Doggy Style',
        'Group Sex',
        'Sex in All Positions (With Condom)',
      ];
    @endphp

    @foreach ($services as $service)
      <li>
        <a href="{{ url('/') }}"
          class="flex items-center px-3 py-2 text-base font-medium transition duration-200 rounded-lg text-gray-200 hover:text-yellow-300 hover:bg-[#5a1a1a]/60">
          <span class="mr-2 text-yellow-400">✔</span> {{ $service }}
        </a>
      </li>
    @endforeach
  </ul>
</div>


  <!-- Local Areas -->
  <div class="p-5 border bg-gradient-to-br from-[#2b0a0a] via-[#3d0d0d] to-[#4A0E0E] border border-yellow-700 shadow-xl shadow-yellow-900/30 rounded-2xl">
    <div class="pb-2 mb-4 border-b border-yellow-700">
      <h1 class="text-lg font-bold text-yellow-300">Local Area in Dubai</h1>
    </div>
    <ul class="space-y-3">
      @php
     $areas = [
    'Downtown Dubai', 'Business Bay', 'Dubai Marina', 'Jumeirah', 'Palm Jumeirah',
    'JLT', 'Deira', 'Bur Dubai', 'Karama', 'Al Barsha',
    'Al Quoz', 'Dubai Silicon Oasis', 'International City', 'Mirdif', 'Al Nahda',
    'Jumeirah Village Circle', 'Jumeirah Village Triangle', 'Motor City', 'Sports City', 'Discovery Gardens',
    'Dubai Hills', 'Arabian Ranches', 'The Springs', 'The Meadows', 'Bluewaters Island',
];

      @endphp
      @foreach ($areas as $area)
        <li>
          <a href="{{ url('/' ) }}"
            class="block text-base font-medium text-gray-200 transition duration-200 hover:text-yellow-400">
            {{ $area }} 
          </a>
        </li>
      @endforeach
    </ul>
  </div>

  <!-- New Category -->
  <div class="p-5 border bg-gradient-to-br from-[#2b0a0a] via-[#3d0d0d] to-[#4A0E0E] border border-yellow-700 shadow-xl shadow-yellow-900/30 rounded-2xl">
    <div class="pb-2 mb-4 border-b border-yellow-700">
      <h1 class="text-lg font-bold text-yellow-300">Our New Category You Like</h1>
    </div>
    <ul class="space-y-3">
      @php
        $categories = [
          'College Escorts', 'High Profile Escorts', 'Housewife Escort', 'Muslim Girls',
          'Party Girl Escorts', 'Russian Escorts', 'Sexy Bhabhi Escorts', 'South Indian Girl',
          'Vip Model Escorts', 'Young Girl Escorts', 'Independent Escorts', 'Massage Escorts',
        ];
      @endphp
      @foreach ($categories as $category)
        <li>
          <a href="{{ url('/' ) }}"
            class="block text-base font-medium text-gray-200 transition duration-200 hover:text-yellow-400">
            {{ $category }} 
          </a>
        </li>
      @endforeach
    </ul>
  </div>

  <!-- Search Keywords -->
  <div class="p-5 border bg-gradient-to-br from-[#2b0a0a] via-[#3d0d0d] to-[#4A0E0E] border border-yellow-700 shadow-xl shadow-yellow-900/30 rounded-2xl">
    <div class="pb-2 mb-4 border-b border-yellow-700">
      <h1 class="text-lg font-bold text-yellow-300">What You Are Looking For</h1>
    </div>
    <ul class="space-y-3">
      @php
        $keywords = [
          'Dubai escorts services', 'independent escorts Dubai', 'escort agency Dubai',
          'vip escorts Dubai', 'escort girls in Dubai', 'call girls Dubai', 'luxury escorts Dubai',
          'Dubai female escorts', 'escort models Dubai', 'cheap escorts Dubai', 'Dubai escorts near me',
          'college escorts Dubai', 'discreet escorts Dubai', 'escorts in north Dubai', 'escort booking Dubai',
          'escort websites Dubai', '24 hour escorts Dubai', 'verified escorts Dubai', 'Dubai nightlife escorts',
          'party escorts Dubai',
        ];
      @endphp
      @foreach ($keywords as $keyword)
        <li>
          <a href="{{ url('/' ) }}"
            class="block text-base font-medium text-gray-200 transition duration-200 hover:text-yellow-400">
            {{ $keyword }}
          </a>
        </li>
      @endforeach
    </ul>
  </div>

</div>
