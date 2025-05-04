@extends('layouts.app')

@section('title', 'Rumah Jahit Hilly | Kelola Layanan')

@section('show-sidebar')
@endsection

@section('content')
    <div class="w-full">
        <h1 class="font-bold text-2xl">Kelola Layanan</h1>
        <div>
            <table class="w-full">
                <thead>
                    <tr class="border-b-1 border-primer py-1">
                        <th>No.</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Foto Produk</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas['layanans'] as $index => $katalog)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}.</td>
                            <td>{{ $katalog['nama'] }}</td>
                            <td>{{ number_format($katalog['harga'], 0, ',', '.') }}</td>
                            <td class="flex justify-center items-center"><img src="{{ asset($katalog['gambar']) }}" alt="Foto" class="h-8 aspect-square object-cover rounded-sm"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('hide-footer')
@endsection
