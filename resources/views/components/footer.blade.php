<footer class="flex flex-col md:flex-row justify-between gap-10 md:gap-5 bg-aksen text-white px-8 py-5 mt-5">
    <div class="flex flex-col gap-2 font-light">
        <a href="{{ route('homepage', request()->query()) }}"><img src="{{ asset('img/logoHome.png') }}" class="h-12"></a>
        <p>
            Perumahan Graha Permata Indah Blok AB-45<br>
            kranjingan, Sumbersari, Jember, Jawa Timur
        </p>
    </div>
    <div class="flex flex-col gap-2 min-w-46">
        <span class="font-bold">Contact Us!</span>
        <a href="https://wa.me/6281249886901" target="blank" class="flex items-center gap-2">
            <img src="{{ asset('img/logoWhatsapp.png') }}" class="h-9 fill-white">
            +62 812 4988 6901
        </a>
        <a href="https://www.instagram.com/" target="blank" class="flex items-center gap-2">
            <img src="{{ asset('img/logoInstagram.png') }}" class="h-8">
            @rumah.jahit.hilly
        </a>
    </div>
    <div class="flex flex-col justify-between">
        <div class="flex flex-col align-middle">
            <span class="font-bold">Quick Links</span>
            <div class="flex items-center gap-8 underline">
                <a href="{{ route('homepage', request()->query()) }}#produk">Produk</a>
                <a href="{{ route('homepage', request()->query()) }}#layanan">Layanan</a>
                <a href="{{ route('homepage', request()->query()) }}#jadwal">Jadwal Kami</a>
            </div>
        </div>
        <div><a href="">@2025 Rumah Jahit Hilly</a></div>
    </div>
</footer>
