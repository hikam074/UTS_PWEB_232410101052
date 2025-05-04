@extends('layouts.app')

@section('title', 'Rumah Jahit Hilly | Dashboard')

@section('show-sidebar')
@endsection

@section('content')
    <div class="w-full">
        <h1 class="font-bold text-2xl">Dashboard</h1>
        <p class="font-light">Ringkasan Toko & Website Anda</p>
        <div class="flex gap-5 my-5 w-full flex-wrap lg:flex-nowrap">
            <div class="border p-4 rounded-md min-w-55 w-full">
                <p class="mb-2">Pengunjung web hari ini</p>
                <h2 class="mb-2 font-bold text-3xl">{{  $summaries['pengunjung'] }}</h2>
            </div>
            <div class="border p-4 rounded-md min-w-55 w-full">
                <p class="mb-2">Penjualan hari ini</p>
                <h2 class="mb-2 font-bold text-3xl">Rp. {{ number_format($summaries['saleDay'], 0, ',', '.') }}</h2>
            </div>
            <div class="border p-4 rounded-md min-w-55 w-full">
                <p class="mb-2">Penjualan bulan ini</p>
                <h2 class="mb-2 font-bold text-3xl">Rp. {{ number_format($summaries['saleMonth'], 0, ',', '.') }}</h2>
            </div>
        </div>
        <h2 class="font-semibold text-xl py-2">Pesanan Terbaru</h2>
        <div>
            <table class="w-full">
                <thead>
                    <tr class="border-b-1 border-primer py-1">
                        <th>No.</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Pemesan</th>
                        <th>Batas Pengiriman</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanans['orders'] as $index => $order)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}.</td>
                            <td>{{ $order['nama'] }}</td>
                            <td class="text-center">{{ $order['qty'] }}</td>
                            <td>{{ $order['pemesan'] }}</td>
                            <td class="text-center">{{ $order['tenggat'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('hide-footer')
@endsection
