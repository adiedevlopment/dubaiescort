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
    <a href="https://wa.me/00000000" target="_blank" class="whatsapp-btn">
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


<!-- Beaches Links -->
<footer class="mt-8">
    <div class="w-full px-8 beaches-name">
        <h2 class="mb-6 text-2xl font-bold text-center text-pink-400"> People come to us from all these areas in Delhi </h2>
        <div class="flex flex-wrap justify-center gap-2">
            @foreach ($beaches as $beach)
                <a href="{{ url('/delhi/' . $beach->slug) }}"
                    class="px-3 py-1 text-sm font-medium text-white bg-[#222] rounded hover:bg-pink-400 hover:text-black transition">
                    {{ $beach->name }}
                </a>
            @endforeach
        </div>
</footer>


<div class="flex justify-center footerimg">
    <img src="/frontend/banner2.jpeg" alt="" class="mx-auto">
</div>


<!-- Footer Columns -->
 
    <div class="mt-8 text-sm text-center">
        © 2018-2025 Delhi Beauty Escorts. All Rights Reserved.
    </div>
</footer>
