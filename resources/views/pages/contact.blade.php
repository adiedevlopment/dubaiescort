@extends('layouts.about')

@section('title', 'Contact | GirlOfDubai')

@section('content')
    <!-- Hero / Breadcrumb -->
    <section class="relative text-white bg-null">
        <div class="container px-6 py-20 mx-auto text-center">
            <h1 class="text-4xl font-bold md:text-5xl">Contact Us</h1>
            <p class="mt-4 text-lg text-pink-100">We’d love to hear from you — reach out anytime.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-null">
        <div class="container px-6 mx-auto">
            <div class="grid gap-10 md:grid-cols-2">

                <!-- Contact Info -->
                <div>
                    <h2 class="mb-6 text-2xl font-bold text-pink-800">Get in Touch</h2>
                    <p class="mb-6 text-white">
                        Whether you have questions, feedback, or collaboration ideas, our team is here to help.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <span class="flex items-center justify-center w-10 h-10 mr-4 text-pink-700 bg-pink-100 rounded-full">
                                📍
                            </span>
                            <span>
 Dubai Escorts
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex items-center justify-center w-10 h-10 mr-4 text-pink-700 bg-pink-100 rounded-full">
                                📞
                            </span>
                            <span>
                                +91 98765 43210
                            </span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex items-center justify-center w-10 h-10 mr-4 text-pink-700 bg-pink-100 rounded-full">
                                ✉️
                            </span>
                            <span>
                                support@girlofDubai.com
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- Contact Form -->
                <div class="p-8 shadow bg-pink-50 rounded-2xl">
                    <h2 class="mb-6 text-2xl font-bold text-pink-800">Send Us a Message</h2>
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" name="email" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-700">Phone Number</label>
                            <input type="tel" name="phone" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500">
                        </div>
                        <div>
                            <label class="block mb-1 text-sm font-medium text-gray-700">Message</label>
                            <textarea name="message" rows="4" required class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-pink-500"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 font-semibold text-white transition bg-pink-700 rounded-lg hover:bg-pink-800">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="h-96">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224345.5070788256!2d77.06889995!3d28.52728035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd36bc1a4b2f%3A0x4e3c70a2d1cf0c71!2sConnaught%20Place%2C%20New%20Dubai!5e0!3m2!1sen!2sin!4v1693839499329!5m2!1sen!2sin"
            class="w-full h-full border-0"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </section>
@endsection
