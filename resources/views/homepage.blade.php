@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/fullcalendar/main.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar/main.min.js"></script>

@section('title', 'Rumah Jahit Hilly | Homepage')

@section('content')

    <div class="w-full bg-bground text-center py-5 px-0">
        @if($username)
        <h1 class="font-bold text-2xl">Selamat Datang, <a class="text-sekunder">{{ $username }}</a>, di Rumah Jahit Hilly!</h1>
        @else
        <h1 class="font-bold text-2xl">Selamat Datang di Rumah Jahit Hilly!</h1>
        @endif
        <p class="font-light">Solusi tepat untuk semua kebutuhan tailor anda</p>
    </div>

    <div class="w-full py-5 px-10 scroll-mt-16" id="layanan">
        <div class="">
            <h2 class="text-2xl">Layanan</h2>
            <p class="font-light">Dari vermak hingga bikin pakaian kustom, semua bisa!</p>
        </div>
        <div class="flex flex-wrap gap-5">
            @foreach($datas['layanans'] as $layanan)
            <div class="w-40 p-4 rounded-2xl shadow-xl m-1 flex flex-col justify-between bg-white transition-transform duration-300 ease-in-out hover:-translate-y-2">
                <img src="{{ asset($layanan['gambar']) }}" alt="Foto {{ $layanan['nama'] }}" class="w-full aspect-square object-cover rounded-md">
                <div class="pt-5 flex-grow">
                    <span class="font-medium text-lg">{{ $layanan['nama'] }}</span> <br>
                    <span class="font-light">Mulai dari Rp. {{ number_format($layanan['harga'], 0, ',', '.') }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="w-full flex px-10 py-5 gap-5 lg:flex-row flex-col">
        <div class="w-full scroll-mt-16" id="produk">
            <div class="">
                <h2 class="text-2xl">Sewing Kit</h2>
                <p class="font-light">Perlengkapan menjahit. Stok tersedia, langsung gas checkout!</p>
            </div>
            <div class="flex flex-wrap gap-5">
                @foreach($datas['katalogs'] as $katalog)
                <div class="w-40 p-4 rounded-2xl shadow-xl m-1 flex flex-col justify-between bg-white transition-transform duration-300 ease-in-out hover:-translate-y-2">
                    <img src="{{ asset($katalog['gambar']) }}" alt="Foto {{ $katalog['nama'] }}" class="w-full aspect-square object-cover rounded-md">
                    <div class="pt-5 flex-grow">
                        <span class="font-medium">{{ $katalog['nama'] }}</span> <br>
                        <span class="font-light">Rp. {{ number_format($katalog['harga'], 0, ',', '.') }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="scroll-mt-16 lg:max-w-100" id="jadwal">
            <h2 class="text-2xl">Jadwal Kami</h2>
            <p class="font-light">Hendak mengunjungi kami? Silahkan pada hari kita buka, ya! Kami buka tiap hari kecuali yang ditandai tutup</p>
            <p class="font-extralight text-aksen">*jadwal valid adalah hingga 2 bulan sesudah tanggal hari ini, diluar itu tunggu update terbaru ya</p>
            <div id="kalender" class="pt-5 w-100 h-auto"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('kalender');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                height: 'auto',
                events: [
                    { title: 'Tutup', start: '2025-05-10' },
                    { title: 'Tutup', start: '2025-05-15', end: '2025-05-17' }
                ],
            });
            calendar.render();
        });
    </script>
@endsection
