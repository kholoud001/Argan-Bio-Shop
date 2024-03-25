<div class="hidden lg:flex justify-center items-center px-16 py-4 w-full bg-white shadow-sm text-neutral-700 max-md:px-5 max-md:max-w-full">
    <div class="flex gap-20 max-w-full w-[1194px] max-md:flex-wrap">
        <div class="flex-auto self-start mt-3 text-2xl font-semibold leading-4">
            <span class="font-medium text-red-300">Argan</span>
            <span class="font-medium text-neutral-700">Beauty</span>
        </div>
        <div class="flex gap-5 justify-center my-auto text-base max-md:flex-wrap tracking-wider">
            <a href="/nouveautes" class="font-semibold hover:text-red-300 transition duration-300">NOUVEAUTÉS</a>
            <a href="/best-sellers" class="font-semibold hover:text-red-300 transition duration-300">BEST SELLERS</a>
            <a href="/collection" class="font-semibold hover:text-red-300 transition duration-300">COLLECTION</a>
            <a href="/qui-sommes-nous" class="font-semibold hover:text-red-300 transition duration-300">QUI SOMMES-NOUS</a>
            <a href="/blog" class="font-semibold hover:text-red-300 transition duration-300">BLOG</a>
        </div>
        <div class="flex gap-5 text-xs uppercase whitespace-nowrap">
            <button class="flex flex-col transition duration-300 ease-in-out transform hover:scale-150">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c0784d928be5e9987df8954d18301b63ff3689659933213a336a1d54b3e28d0e?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="object-contain self-center w-6 aspect-[1.67]" />
                <div class="font-semibold mt-1.5">Recherche</div>
            </button>
            <button class="flex flex-col transition duration-300 ease-in-out transform hover:scale-150">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2eaa4f77a21bd615a704b0697e6844a2c544d2fe643a224fab7320cdd4c9ad3?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="self-center w-6 aspect-[1.67]" />
                <div class="mt-1.5 font-semibold">Compte</div>
            </button>
            <button class="flex flex-col transition duration-300 ease-in-out transform hover:scale-150">
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/78cc52cf36f4f3ff8f7118b624bfdad90c0cab20cb3b22e4082be8e0257c4e8c?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="self-center w-6 aspect-[1.67]" />
                <div class="mt-1.5 font-semibold">Panier</div>
            </button>
        </div>
    </div>
</div>

<!-- Mobile Navbar Toggle Button -->
<div class="lg:hidden self-start ml-5 mt-3 text-2xl font-semibold leading-4">
    <span class="font-medium text-red-300">Argan</span>
    <span class="font-medium text-neutral-700">Beauty</span>
</div>
<button class="lg:hidden block absolute top-4 right-4" id="mobileNavBtn">
    <svg class="h-6 w-6 text-gray-500 hover:text-red-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
    </svg>
</button>

<!-- Mobile Navbar -->
<div class="hidden lg:hidden bg-white shadow-sm py-2 absolute top-12 right-4" id="mobileNav">
    <a href="/nouveautes" class="block px-4 py-2 font-semibold hover:text-red-300 transition duration-300">NOUVEAUTÉS</a>
    <a href="/best-sellers" class="block px-4 py-2 font-semibold hover:text-red-300 transition duration-300">BEST SELLERS</a>
    <a href="/collection" class="block px-4 py-2 font-semibold hover:text-red-300 transition duration-300">COLLECTION</a>
    <a href="/qui-sommes-nous" class="block px-4 py-2 font-semibold hover:text-red-300 transition duration-300">QUI SOMMES-NOUS</a>
    <a href="/blog" class="block px-4 py-2 font-semibold hover:text-red-300 transition duration-300">BLOG</a>

    <!-- Additional buttons -->
    <div class="flex gap-5 bg-white text-xs uppercase">
        <button class="flex flex-col transition duration-300 ease-in-out transform hover:scale-150">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/c0784d928be5e9987df8954d18301b63ff3689659933213a336a1d54b3e28d0e?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="object-contain self-center w-6 aspect-[1.67]" />
            <div class="font-semibold mt-1.5 ">Recherche</div>
        </button>
        <button class="flex flex-col transition duration-300 ease-in-out transform hover:scale-150">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2eaa4f77a21bd615a704b0697e6844a2c544d2fe643a224fab7320cdd4c9ad3?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="self-center w-6 aspect-[1.67]" />
            <div class="mt-1.5 font-semibold">Compte</div>
        </button>
        <button class="flex flex-col transition duration-300 ease-in-out transform hover:scale-150">
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/78cc52cf36f4f3ff8f7118b624bfdad90c0cab20cb3b22e4082be8e0257c4e8c?apiKey=af967bf6e86c4dac8136aaedcc331868&" class="self-center w-6 aspect-[1.67]" />
            <div class="mt-1.5 font-semibold">Panier</div>
        </button>
    </div>
</div>

<script>
    // Toggle Mobile Navbar
    document.getElementById('mobileNavBtn').addEventListener('click', function() {
        document.getElementById('mobileNav').classList.toggle('hidden');
    });
</script>
