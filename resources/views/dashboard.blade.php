@extends('layouts.master')

@section('content')
    {{-- Tentang Kami --}}
    <div class="bg-[#ffffff] py-36 px-4 md:px-8">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-35">
            <div class="md:w-1/2">
                <h2 class="text-2xl md:text-4xl font-bold text-[#121212] mb-4">
                    Sudah Mengenal TIBA (Tim Bisindo dan Aksesibilitas Surabaya)?
                </h2>
                <p class="text-gray-700 leading-relaxed">
                    TIBA (Tim Bisindo dan Aksesibilitas Surabaya) adalah komunitas yang berfokus pada edukasi dan
                    pemberdayaan dalam bidang Bahasa Isyarat Indonesia (BISINDO) serta peningkatan aksesibilitas bagi
                    penyandang disabilitas, khususnya teman tuli. Komunitas ini berperan aktif dalam mengedukasi masyarakat
                    tentang pentingnya inklusi dan komunikasi dua arah dengan teman tuli melalui pelatihan dan sosialisasi
                    BISINDO, mendampingi lembaga atau institusi dalam menciptakan lingkungan yang ramah disabilitas, serta
                    mengembangkan media dan teknologi yang aksesibel seperti video berbahasa isyarat, subtitle, dan website
                    inklusif. Selain itu, TIBA juga memberdayakan teman tuli untuk berperan sebagai pelatih, narasumber, dan
                    relawan dalam berbagai kegiatan komunitas. </p>
            </div>
            <div class="max-w-sm rounded-xl overflow-hidden border-2">
                <iframe class="w-full h-full" src="https://www.youtube.com/embed/6biMWgD6_JY?si=tyXPTbRa1QGZbct-"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen title="Tentang Kami - TIBA"></iframe>
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Tentang Kami</div>
                    <p class="text-gray-700 text-base">
                        TIBA (Tim Bisindo dan Aksesibilitas Surabaya) adalah komunitas yang berfokus pada edukasi dan
                        pemberdayaan dalam bidang Bahasa Isyarat Indonesia (BISINDO) serta peningkatan aksesibilitas bagi
                        penyandang disabilitas, khususnya teman tuli.
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                </div>
            </div>
        </div>
    </div>

    {{-- Papan Informasi --}}
    <div class="bg-[#0f0f0f] py-12 px-4 md:px-8 text-white">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-2xl md:text-3xl font-semibold text-yellow-400 mb-6">PAPAN INFORMASI</h3>
            <p>Untuk menunjang pengembangan sumber daya manusia.
                Disediakan berbagai aspek program kerja di TIBA sebagai berikut</p>
            <div class="grid md:grid-cols-2 gap-6">
                <a href="https://www.instagram.com" target="_blank"
                    class="bg-white text-black p-6 rounded shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-bold mb-2">Kegiatan Pelatihan</h4>
                    <p>Simak dokumentasi pelatihan bahasa isyarat terbaru yang kami adakan di Surabaya!</p>
                </a>
                <a href="https://www.instagram.com" target="_blank"
                    class="bg-white text-black p-6 rounded shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-bold mb-2">Event Bulan Inklusi</h4>
                    <p>Kami akan hadir di pameran Inklusi Nasional, cek IG kami untuk detailnya.</p>
                </a>
            </div>
        </div>
    </div>

    {{-- Video Edukasi --}}
    <div class="bg-white py-16 px-4 md:px-8">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-2xl md:text-3xl font-semibold text-[#002F1F] mb-4">
                Belajar Bahasa Isyarat Indonesia (BISINDO)
            </h3>

            @php
                $videoIds = ['dQw4w9WgXcQ', '3JZ_D3ELwOQ', '9bZkp7q19f0', 'fJ9rUzIMcZQ', 'eY52Zsg-KVI', 'K4TOrB7at0Y'];
            @endphp

            <div class="grid md:grid-cols-3 lg:grid-cols-3 gap-6 mt-8">
                @foreach ($videoIds as $index => $videoId)
                    <div class="bg-black text-white rounded-lg overflow-hidden shadow-lg">
                        <div class="aspect-video bg-gray-300">
                            <iframe class="w-full h-full" src="https://www.youtube.com/embed/{{ $videoId }}"
                                frameborder="0" allow="autoplay; encrypted-media" allowfullscreen
                                title="Video Materi BISINDO #{{ $index + 1 }}">
                            </iframe>
                        </div>
                        <div class="p-2 text-sm">Materi BISINDO #{{ $index + 1 }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{-- Artikel Edukasi --}}
    <div class="bg-[#0f0f0f] py-16 px-4 md:px-8 text-white">
        <div class="max-w-6xl mx-auto text-center">
            <h3 class="text-2xl md:text-3xl font-semibold text-yellow-400 mb-6">Artikel Edukasi</h3>
            <div class="grid md:grid-cols-3 gap-6">
                @for ($j = 1; $j <= 6; $j++)
                    <div class="bg-white text-black p-6 rounded shadow hover:shadow-lg transition">
                        <h4 class="text-lg font-bold mb-2">Pengertian Inklusi #{{ $j }}</h4>
                        <p class="text-sm">Inklusi sosial adalah pendekatan yang menekankan kesetaraan akses dan partisipasi
                            bagi seluruh kelompok masyarakat...</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
