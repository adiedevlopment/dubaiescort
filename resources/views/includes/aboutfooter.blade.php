<style>
    body {
        padding-bottom: 60px;
        /* prevent content hiding behind fixed footer */
    }

    .fixed-footer-bar {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background: #222;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 10px 0;
        z-index: 9999;
    }

    .fixed-footer-bar a {
        flex: 1;
        text-align: center;
        padding: 12px 0;
        font-size: 18px;
        font-weight: bold;
        color: white;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: background 0.3s ease;
    }

    .fixed-footer-bar .whatsapp-btn {
        background: #25D366;
    }

    .fixed-footer-bar .call-btn {
        background: #007BFF;
    }

    .fixed-footer-bar a:hover {
        opacity: 0.9;
    }

    /* Blink animation for text and icon */
    .fixed-footer-bar a i,
    .fixed-footer-bar a span {
        animation: blinkText 1.2s infinite;
    }

    @keyframes blinkText {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.4;
        }
    }
</style>

<div class="fixed-footer-bar">
    <a href="https://wa.me/919876543210" target="_blank" class="whatsapp-btn">
        <i class="fab fa-whatsapp"></i> <span>WhatsApp</span>
    </a>
    <a href="tel:+919876543210" class="call-btn">
        <i class="fas fa-phone"></i> <span>Call Now</span>
    </a>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">





<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background: #d35400;
        /* Orange gradient background */
        color: #fff;
    }

    footer {
        padding: 30px;
        text-align: center;
    }

    .footer-columns {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .footer-column h3 {
        margin-bottom: 15px;
        font-size: 18px;
        text-transform: uppercase;
    }

    .footer-column button {
        display: block;
        width: 100%;
        background: #000;
        color: #fff;
        border: none;
        padding: 10px;
        margin: 6px 0;
        cursor: pointer;
        border-radius: 6px;
        transition: 0.3s;
        font-size: 14px;
    }

    .footer-column button:hover {
        background: #24d08f;
        /* Hover green */
        color: #111;
    }

    .copyright {
        margin-top: 20px;
        font-size: 14px;
        color: #fff;
    }
</style>

<!-- Fixed Footer Bar -->
<div class="fixed bottom-0 left-0 z-50 flex items-center justify-around w-full py-2 bg-gray-900">
    <a href="https://wa.me/919876543210" target="_blank"
        class="flex items-center justify-center w-1/2 gap-2 py-3 text-lg font-bold text-white transition bg-green-500 hover:opacity-90">
        <i class="fab fa-whatsapp"></i> <span class="animate-pulse">WhatsApp</span>
    </a>
    <a href="tel:+919876543210"
        class="flex items-center justify-center w-1/2 gap-2 py-3 text-lg font-bold text-white transition bg-blue-600 hover:opacity-90">
        <i class="fas fa-phone"></i> <span class="animate-pulse">Call Now</span>
    </a>
</div>

 

<!-- Footer Columns -->
<footer class="px-6 py-10 mt-12 text-white bg-[#1a1a1a] ">
    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-5">

        <!-- Pages -->
        <div>
            <h3 class="mb-4 text-lg font-semibold uppercase">Pages</h3>
            <div class="flex flex-col gap-2">
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Home</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Vip
                    Escorts</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">All
                    Escorts</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Rates</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Contact</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Services</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Jobs</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Faqs</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Terms
                    & Conditions</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Blog</button>
                <button
                    class="px-3 py-2 text-white transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Sitemap</button>
            </div>
        </div>

        <!-- Escorts Type -->
        <div>
            <h3 class="mb-4 text-lg font-semibold uppercase">Escorts Type</h3>
            <div class="flex flex-col gap-2">
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">High
                    Class</button>
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Celebrity</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Model
                    Escorts</button>
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Airhostess</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">GFE
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Hotel
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Russian
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Travel
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Busty
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Slim
                    Escorts</button>
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Housewife</button>
            </div>
        </div>

        <!-- Location -->
        <div>
            <h3 class="mb-4 text-lg font-semibold uppercase">Location</h3>
            <div class="flex flex-col gap-2">
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Aerocity
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Mahipalpur
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Connaught
                    Place Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Gurgaon
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Noida
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Nehru Place
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Dwarka
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Saket
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Surajkund
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Karol Bagh
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Vasant
                    Kunj</button>
            </div>
        </div>

        <!-- City -->
        <div>
            <h3 class="mb-4 text-lg font-semibold uppercase">City</h3>
            <div class="flex flex-col gap-2">
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Ghaziabad
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Raipur
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Agra
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Surat
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Mumbai
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Ahmedabad
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Bangalore
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Chandigarh
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Chennai
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Dehradun
                    Escorts</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Jaipur
                    Escorts</button>
            </div>
        </div>

        <!-- States -->
        <div>
            <h3 class="mb-4 text-lg font-semibold uppercase">States</h3>
            <div class="flex flex-col gap-2">
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Goa</button>
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Gujarat</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Himachal
                    Pradesh</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Jammu &
                    Kashmir</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Andhra
                    Pradesh</button>
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Punjab</button>
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Rajasthan</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Tamil
                    Nadu</button>
                <button
                    class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Uttarakhand</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">Uttar
                    Pradesh</button>
                <button class="px-3 py-2 transition bg-black rounded hover:bg-green-400 hover:text-pink-400">West
                    Bengal</button>
            </div>
        </div>
    </div>

    <div class="mt-8 text-sm text-center">
        © 2018-2025 Delhi Beauty Escorts. All Rights Reserved.
    </div>
</footer>
