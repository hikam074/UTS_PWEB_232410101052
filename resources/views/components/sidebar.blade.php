@props(['username'])

<div class="hidden bg-sekunder text-white text-xl p-8 sm:flex flex-col sm:min-w-55 gap-3 h-screen">
    <a href="{{ route('dashboard', ['username' => $username]) }}" class="flex gap-3 items-center p-1 hover:bg-aksen"><img src="{{ asset('img/logoDashboard.png') }}" class="h-9 w-auto">Dashboard</a>
    <a href="{{ route('profile', ['username' => $username]) }}" class="flex gap-3 items-center p-1 hover:bg-aksen"><img src="{{ asset('img/profileAvatar.png') }}" class="h-9">Profil</a>
    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="flex gap-3 items-center p-1 hover:bg-aksen"><img src="{{ asset('img/logoBox.png') }}" class="h-9">Manajemen Stok</a>
    <a href="{{ route('layanan', ['username' => $username]) }}" class="flex gap-3 items-center p-1 hover:bg-aksen"><img src="{{ asset('img/logoGunting.png') }}" class="h-9">Kelola Layanan</a>
</div>
