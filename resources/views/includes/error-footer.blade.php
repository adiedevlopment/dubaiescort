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
