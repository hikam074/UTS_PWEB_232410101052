@extends('layouts.app')

@section('title', 'Rumah Jahit Hilly | Profil')

@section('show-sidebar')
@endsection

@section('content')
    <div>
        <h1 class="font-bold text-2xl">Profil Anda</h1>
        <div class="flex gap-10">
            <div>
                <img src="{{ asset('img/profileAvatarDark.png') }}" class="w-50 aspect-square object-cover my-5">
                <p class="border-2 border-dashed p-5 text-center">Ubah Foto Profil</p>
            </div>
            <div>
                <div class="p-2">
                    <label for="username">Username</label><br>
                    <input type="text" name="username" value="{{ $username }}" class="border-1 p-2 my-2 w-full border-primer" readonly>
                </div>
                <div class="p-2">
                    <label for="password">Password</label><br>
                    <input type="password" name="password" value="{{ $username }}" class="border-1 p-2 my-2 w-full border-primer" readonly>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('hide-footer')
@endsection
