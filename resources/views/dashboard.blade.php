@extends('layouts.master')

@section('content')

{{-- Tentang Kami --}}
<div class="bg-[#ffffff] py-50 px-4 md:px-8">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center gap-10">
        <div class="md:w-1/2">
            <h2 class="text-2xl md:text-4xl font-bold text-[#121212] mb-4">
                Sudah Mengenal TIBA (Tim Bisindo dan Aksesibilitas Surabaya)?
            </h2>
            <p class="text-gray-700 leading-relaxed">
                TIBA adalah tim yang bergerak dalam edukasi bahasa isyarat dan kesetaraan aksesibilitas bagi masyarakat. Tim ini berfokus pada pelatihan, produksi media edukatif, serta penyebaran informasi yang ramah disabilitas.
            </p>
        </div>
        <div class="md:w-1/2">
            <div class="aspect-video bg-gray-300 rounded-lg overflow-hidden shadow">
                <iframe class="w-full h-full" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="mt-4">
                <a href="/about" class="text-[#121212] font-semibold hover:underline">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

{{-- Papan Informasi --}}
<div class="bg-[#0f0f0f] py-16 px-4 md:px-8 text-white">
    <div class="max-w-6xl mx-auto text-center">
        <h3 class="text-2xl md:text-3xl font-semibold text-yellow-400 mb-6">PAPAN INFORMASI</h3>
        <div class="grid md:grid-cols-2 gap-6">
            <a href="https://www.instagram.com" target="_blank" class="bg-white text-black p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-xl font-bold mb-2">Kegiatan Pelatihan</h4>
                <p>Simak dokumentasi pelatihan bahasa isyarat terbaru yang kami adakan di Surabaya!</p>
            </a>
            <a href="https://www.instagram.com" target="_blank" class="bg-white text-black p-6 rounded shadow hover:shadow-lg transition">
                <h4 class="text-xl font-bold mb-2">Event Bulan Inklusi</h4>
                <p>Kami akan hadir di pameran Inklusi Nasional, cek IG kami untuk detailnya.</p>
            </a>
        </div>
    </div>
</div>

{{-- Video Edukasi --}}
<div class="bg-white py-16 px-4 md:px-8">
    <div class="max-w-6xl mx-auto text-center">
        <h3 class="text-2xl md:text-3xl font-semibold text-[#002F1F] mb-4">Belajar Bahasa Isyarat Indonesia (BISINDO)</h3>
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
            @for ($i = 1; $i <= 8; $i++)
            <div class="bg-black text-white rounded-lg overflow-hidden shadow-lg">
                <div class="aspect-video bg-gray-300">
                    <iframe class="w-full h-full" src="" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="p-4 text-sm">Materi BISINDO #{{ $i }}</div>
            </div>
            @endfor
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
                <p class="text-sm">Inklusi sosial adalah pendekatan yang menekankan kesetaraan akses dan partisipasi bagi seluruh kelompok masyarakat...</p>
            </div>
            @endfor
        </div>
    </div>
</div>

@endsection
