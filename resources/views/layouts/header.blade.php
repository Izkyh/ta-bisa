<div id="scrolled" class="hidden lg:block z-10 fixed w-full bg-[#121212] transition-transform duration-300 transform">
    <div class="flex justify-between h-full items-center px-10 w-screen mx-auto md:max-w-6xl lg:max-w-[1480px]">
        <a href="/" class="flex items-center">
            <img class="w-auto h-16" src="{{ asset('/images/logo.png') }}" alt="">
        </a>
        <div class="flex items-center gap-10 uppercase font-segoe font-semibold text-white">
            <a href="/" class="relative group">
                <div class="text-lg font-light tracking-widest">Beranda</div>
                <div id="hvr-black" class="absolute left-0 bottom-[-10px] w-0 h-[3px] bg-[#ffff] transition-all duration-300 group-hover:w-full text-amber-300"></div>
            </a>
            <a href="/#product" class="relative group">
                <div class="text-lg font-light tracking-widest">Video</div>
                <div id="hvr-black" class="absolute left-0 bottom-[-10px] w-0 h-[3px] bg-[#ffff] transition-all duration-300 group-hover:w-full text-amber-300"></div>
            </a>
            <a href="/#layanan" class="relative group">
                <div class="text-lg font-light tracking-widest">Artikel</div>
                <div id="hvr-black" class="absolute left-0 bottom-[-10px] w-0 h-[3px] bg-[#ffff] transition-all duration-300 group-hover:w-full text-amber-300"></div>
            </a>
            <a href="/#kontak" class="relative group">
                <div class="text-lg font-light tracking-widest">Kontak</div>
                <div id="hvr-black" class="absolute left-0 bottom-[-10px] w-0 h-[3px] bg-[#ffff] transition-all duration-300 group-hover:w-full text-amber-300"></div>
            </a>
            <a href="/about" class="relative group">
                <div class="text-lg font-light tracking-widest">Tentang Kami</div>
                <div id="hvr-black" class="absolute left-0 bottom-[-10px] w-0 h-[3px] bg-[#ffff] transition-all duration-300 group-hover:w-full text-amber-300"></div>
            </a>
        </div>
    </div>
</div>

<script>
    const header = document.getElementById('scrolled');
    let lastScroll = 0;

    window.addEventListener('scroll', function () {
        const currentScroll = window.pageYOffset;

        // Ganti warna saat scroll (tetap dipakai)
        header.classList.toggle('text-[#121212]', currentScroll > 0);
        document.querySelectorAll('#hvr-black').forEach(function (el) {
            el.classList.toggle('bg-[#121212]', currentScroll > 0);
        });

        // Deteksi arah scroll
        if (currentScroll > lastScroll && currentScroll > 100) {
            // Scroll ke bawah -> sembunyikan
            header.classList.add('-translate-y-full');
        } else {
            // Scroll ke atas -> tampilkan
            header.classList.remove('-translate-y-full');
        }

        lastScroll = currentScroll;
    });
</script>
