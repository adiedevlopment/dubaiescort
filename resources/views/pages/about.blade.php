@extends('layouts.about')
@section('title', 'Abbout Dubai Escorts | VIP Call Girls in Dubai - GirlOfDubai')
@section('meta_description',
    'Find VIP escorts and call girls in Dubai. Browse profiles with verified photos, rates, and
    services. Book your dream companion today.')
@section('meta_keywords',
    'Dubai escorts, vip call girls in Dubai, Dubai escort service, baga escorts, calangute escorts,
    miramar escorts, Dubai female escorts')
@section('canonical', url('/'))



@section('content')

<!-- Hero -->
<section class="relative overflow-hidden bg-gradient-to-br from-gray-950 via-gray-900 to-black">
  <div class="absolute inset-0 -z-10 opacity-30 bg-[radial-gradient(circle_at_20%_10%,rgba(244,114,182,0.25),transparent_35%),radial-gradient(circle_at_80%_60%,rgba(192,132,252,0.25),transparent_40%)]"></div>
  <div class="grid items-center gap-10 px-6 py-16 mx-auto max-w-7xl md:grid-cols-2 md:py-20">
    <div>
      <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-rose-900/40 text-rose-200 ring-1 ring-rose-800">Trusted • Discreet • Verified</span>
      <h1 class="mt-5 text-4xl font-extrabold tracking-tight text-rose-100 sm:text-5xl">About <span class="text-rose-400">Girl Of Dubai</span></h1>
      <p class="mt-3 text-rose-300">We are Dubai's boutique companion directory—curated, verified, and privacy-first. Explore profiles with authentic photos, transparent rates, and clear service details. Our goal is to make booking simple, safe, and elegant.</p>
      <div class="flex flex-wrap gap-3 mt-6">
        <a href="{{ url('/escorts/Dubai') }}" class="rounded-2xl bg-rose-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-rose-600/20 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-400">Browse Escorts</a>
        <a href="{{ url('/contact') }}" class="rounded-2xl bg-gray-800 px-5 py-2.5 text-sm font-semibold text-rose-200 ring-1 ring-rose-800 hover:bg-gray-700">Contact Team</a>
      </div>

      <!-- Trust badges -->
      <dl class="grid grid-cols-2 gap-4 mt-8 text-sm text-rose-300 sm:grid-cols-3">
        <div class="p-4 border rounded-2xl border-rose-800/60 bg-gray-900/60"><dt class="font-semibold text-rose-200">Verified Photos</dt><dd>No stock or AI images</dd></div>
        <div class="p-4 border rounded-2xl border-rose-800/60 bg-gray-900/60"><dt class="font-semibold text-rose-200">Private & Secure</dt><dd>Discreet communication</dd></div>
        <div class="p-4 border rounded-2xl border-rose-800/60 bg-gray-900/60"><dt class="font-semibold text-rose-200">Clear Pricing</dt><dd>Rates & availability</dd></div>
      </dl>
    </div>

    <div class="relative">
      <div class="relative aspect-[4/5] overflow-hidden rounded-3xl border border-rose-800 bg-gradient-to-br from-gray-800 to-gray-900 shadow-2xl">
        <img src="{{ asset('frontend/assets/images/about/hero-Dubai.webp') }}" alt="Elegant Dubai companion" class="object-cover w-full h-full opacity-90" />
        <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/60 via-black/0"></div>
      </div>
      <div class="absolute px-4 py-2 text-xs font-semibold bg-gray-900 -bottom-4 -left-4 rounded-2xl text-rose-300 ring-1 ring-rose-800">100% Profile Vetting</div>
    </div>
  </div>
</section>

<!-- About Copy -->
<section class="bg-black py-14">
  <div class="max-w-6xl px-6 mx-auto">
    <div class="grid items-start gap-10 md:grid-cols-5">
      <div class="md:col-span-2">
        <h2 class="text-3xl font-bold text-rose-100">Who we are</h2>
        <p class="mt-3 text-rose-300">GirlOfDubai is a premium listing platform featuring independent companions and agencies across Dubai & NCR. We put authenticity first—every featured profile passes manual checks for identity, photos, and contact legitimacy.</p>
        <p class="mt-3 text-rose-300">We do not encourage explicit or unsafe behavior. Our focus is on companionship, etiquette, and transparent bookings between consenting adults.</p>
      </div>
      <div class="md:col-span-3">
        <div class="grid gap-4 sm:grid-cols-3">
          <div class="p-5 border rounded-2xl border-rose-800/60 bg-gray-900/60">
            <p class="text-3xl font-extrabold text-rose-300">1k+</p>
            <p class="text-sm text-rose-400">Happy clients served</p>
          </div>
          <div class="p-5 border rounded-2xl border-rose-800/60 bg-gray-900/60">
            <p class="text-3xl font-extrabold text-rose-300">250+</p>
            <p class="text-sm text-rose-400">Verified profiles</p>
          </div>
          <div class="p-5 border rounded-2xl border-rose-800/60 bg-gray-900/60">
            <p class="text-3xl font-extrabold text-rose-300">24/7</p>
            <p class="text-sm text-rose-400">Support & assistance</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services / Specialties (non‑explicit) -->
<section class="bg-gradient-to-b from-black to-gray-950 py-14">
  <div class="max-w-6xl px-6 mx-auto">
    <h3 class="text-2xl font-bold text-rose-100">What we feature</h3>
    <p class="mt-2 text-rose-300">Browse companions by city area, style, and availability. Listings highlight etiquette, interests, and time-based rates—no hidden surprises.</p>

    <div class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-3">
      <div class="p-6 border rounded-2xl border-rose-800/60 bg-gray-900/60">
        <h4 class="font-semibold text-rose-200">Independent & Agency</h4>
        <p class="mt-1 text-sm text-rose-400">Choose from verified independent companions or trusted agencies across Dubai NCR.</p>
      </div>
      <div class="p-6 border rounded-2xl border-rose-800/60 bg-gray-900/60">
        <h4 class="font-semibold text-rose-200">City-Wise Filters</h4>
        <p class="mt-1 text-sm text-rose-400">Connaught Place, Aerocity, South Dubai, Gurugram, Noida & more.</p>
      </div>
      <div class="p-6 border rounded-2xl border-rose-800/60 bg-gray-900/60">
        <h4 class="font-semibold text-rose-200">Real-time Availability</h4>
        <p class="mt-1 text-sm text-rose-400">Profiles update schedules and rates for smooth, timely bookings.</p>
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="bg-black py-14">
  <div class="max-w-6xl px-6 mx-auto">
    <h3 class="text-2xl font-bold text-rose-100">How booking works</h3>
    <div class="grid gap-6 mt-6 md:grid-cols-3">
      <div class="p-6 border rounded-2xl border-rose-800/60 bg-gray-900/60">
        <p class="text-sm font-semibold tracking-wide uppercase text-rose-400">Step 1</p>
        <h4 class="mt-1 font-semibold text-rose-200">Discover</h4>
        <p class="mt-1 text-rose-300">Use filters for area, language, interests, and appearance.</p>
      </div>
      <div class="p-6 border rounded-2xl border-rose-800/60 bg-gray-900/60">
        <p class="text-sm font-semibold tracking-wide uppercase text-rose-400">Step 2</p>
        <h4 class="mt-1 font-semibold text-rose-200">Connect</h4>
        <p class="mt-1 text-rose-300">Message directly via the contact options on each profile.</p>
      </div>
      <div class="p-6 border rounded-2xl border-rose-800/60 bg-gray-900/60">
        <p class="text-sm font-semibold tracking-wide uppercase text-rose-400">Step 3</p>
        <h4 class="mt-1 font-semibold text-rose-200">Confirm</h4>
        <p class="mt-1 text-rose-300">Agree on time, location, and rates. Keep it respectful and safe.</p>
      </div>
    </div>
  </div>
</section>

<!-- Gallery/Highlights (placeholders) -->
<section class="bg-gradient-to-b from-gray-950 to-black py-14">
  <div class="max-w-6xl px-6 mx-auto">
    <h3 class="text-2xl font-bold text-rose-100">Featured Dubai Companions</h3>
    <div class="grid gap-4 mt-6 sm:grid-cols-2 lg:grid-cols-4">
      @for ($i = 1; $i <= 4; $i++)
        <a href="{{ url('/escorts/Dubai') }}" class="relative block overflow-hidden border group rounded-2xl border-rose-800/60 bg-gray-900/60">
          <img src="{{ asset('/frontend/assets/images/featured/feature-' . $i . '.webp') }}" alt="Dubai companion {{ $i }}" class="aspect-[3/4] w-full object-cover transition group-hover:scale-105" />
          <div class="absolute inset-x-0 bottom-0 p-3 bg-gradient-to-t from-black/70 to-transparent">
            <p class="text-sm font-semibold text-rose-100">Model {{ $i }}</p>
            <p class="text-xs text-rose-300">South Dubai • Available today</p>
          </div>
        </a>
      @endfor
    </div>
  </div>
</section>

<!-- FAQ (no JS, details/summary) -->
<section class="bg-black py-14">
  <div class="max-w-5xl px-6 mx-auto">
    <h3 class="text-2xl font-bold text-rose-100">FAQs</h3>
    <div class="mt-6 space-y-4">
      <details class="p-5 border rounded-2xl border-rose-800/60 bg-gray-900/60" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary class="cursor-pointer text-rose-200">Are profiles real and verified?</summary>
        <div class="mt-2 text-rose-300" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Yes. We manually verify photos and contact details before listing.</p>
        </div>
      </details>
      <details class="p-5 border rounded-2xl border-rose-800/60 bg-gray-900/60" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary class="cursor-pointer text-rose-200">How do I book?</summary>
        <div class="mt-2 text-rose-300" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">Open a profile, use the listed contact to message, and confirm time & rates directly.</p>
        </div>
      </details>
      <details class="p-5 border rounded-2xl border-rose-800/60 bg-gray-900/60" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary class="cursor-pointer text-rose-200">Is my privacy protected?</summary>
        <div class="mt-2 text-rose-300" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p itemprop="text">We never share personal details. Communication is handled discreetly.</p>
        </div>
      </details>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bg-gradient-to-tr from-gray-950 via-black to-gray-900 py-14">
  <div class="max-w-6xl px-6 mx-auto">
    <div class="flex flex-col items-center justify-between gap-6 p-8 text-center border rounded-3xl border-rose-800/60 bg-gray-900/60 md:flex-row md:text-left">
      <div>
        <h3 class="text-2xl font-bold text-rose-100">Ready to explore Dubai companions?</h3>
        <p class="mt-1 text-rose-300">Browse curated profiles with authentic photos and clear details.</p>
      </div>
      <div class="flex gap-3">
        <a href="{{ url('/escorts/Dubai') }}" class="rounded-2xl bg-rose-600 px-5 py-2.5 text-sm font-semibold text-white shadow-lg shadow-rose-600/20 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-400">View Escorts</a>
        <a href="{{ url('/contact') }}" class="rounded-2xl bg-gray-800 px-5 py-2.5 text-sm font-semibold text-rose-200 ring-1 ring-rose-800 hover:bg-gray-700">Get Help</a>
      </div>
    </div>
  </div>
</section>


@endsection
