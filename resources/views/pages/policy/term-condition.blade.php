@extends('layouts.about')

@section('title', 'Terms & Conditions | GirlOfDelhi')
@section('meta_description', 'Read the Terms & Conditions for using GirlOfDelhi services.')
@section('canonical', url('/terms-and-conditions'))

@section('content')
<section class="py-16 bg-gradient-to-br from-gray-50 to-white">
    <div class="max-w-5xl px-6 mx-auto">
        <!-- Page Header -->
        <div class="mb-12 text-center">
            <h1 class="text-4xl font-extrabold text-pink-700 md:text-5xl">Terms & Conditions</h1>
            <p class="mt-4 text-lg text-gray-600">
                Please read our terms carefully before using our services.
            </p>
        </div>

        <!-- Terms Content -->
        <div class="p-8 bg-white shadow-lg rounded-2xl ring-1 ring-gray-100">
            <h2 class="mb-4 text-2xl font-bold text-pink-600">1. Acceptance of Terms</h2>
            <p class="mb-6 text-gray-700">
                By accessing and using our website or services, you accept and agree to be bound by these Terms & Conditions.
                If you do not agree, please do not use our platform.
            </p>

            <h2 class="mb-4 text-2xl font-bold text-pink-600">2. Age Restriction</h2>
            <p class="mb-6 text-gray-700">
                You must be at least 18 years old to access or use our services. By using the site, you confirm that you meet this requirement.
            </p>

            <h2 class="mb-4 text-2xl font-bold text-pink-600">3. Services Disclaimer</h2>
            <p class="mb-6 text-gray-700">
                All profiles listed on this website are for companionship purposes only. We are not responsible for any personal arrangements
                made beyond the scope of this platform.
            </p>

            <h2 class="mb-4 text-2xl font-bold text-pink-600">4. Privacy Policy</h2>
            <p class="mb-6 text-gray-700">
                We respect your privacy and ensure that your personal data is protected. For more details,
                please read our <a href="/privacy-policy" class="text-pink-600 hover:underline">Privacy Policy</a>.
            </p>

            <h2 class="mb-4 text-2xl font-bold text-pink-600">5. Limitation of Liability</h2>
            <p class="mb-6 text-gray-700">
                We are not liable for any damages, losses, or issues arising from your use of the website
                or any personal arrangements you make with individuals.
            </p>

            <h2 class="mb-4 text-2xl font-bold text-pink-600">6. Changes to Terms</h2>
            <p class="mb-6 text-gray-700">
                We reserve the right to update or modify these Terms & Conditions at any time without prior notice.
                Continued use of the website constitutes acceptance of any changes.
            </p>

            <div class="mt-8">
                <p class="text-sm text-gray-500">Last Updated: {{ date('F d, Y') }}</p>
            </div>
        </div>
    </div>
</section>
@endsection
