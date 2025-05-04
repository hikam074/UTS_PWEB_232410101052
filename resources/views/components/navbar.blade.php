@props(['username'])

<nav class="z-1000 fixed top-0 left-0 right-0 flex bg-sekunder justify-between px-5 text-white h-16 border-b-2 border-white">
    <div>
        <a href="{{ route('homepage', request()->query()) }}"><img src="{{ asset('img/logoHome.png') }}" class="h-[8vh] m-2"></a>
    </div>
    <div class="flex align-middle">
        <div class="md:flex hidden items-center gap-5 font-bold">
            <a href="{{ route('homepage', request()->query()) }}#layanan">Layanan</a>
            <a href="{{ route('homepage', request()->query()) }}#produk">Produk</a>
            <a href="{{ route('homepage', request()->query()) }}#jadwal">Jadwal Kami</a>
        </div>
    </div>
    <div class="flex align-middle">
        <div class="flex items-center gap-5">
            @if(!$username)
                <a href="{{ route('login') }}" class="border border-white rounded-xl px-4 py-2">Log-in</a>
                <a href="{{ route('login') }}" class="border border-white rounded-xl px-4 py-2">Sign-up</a>
            @else
                <div class="relative">
                    <a id="profilBtn" class="flex items-center gap-2 border border-white rounded-full pl-3 cursor-pointer">
                        {{ $username }}
                        <img src="{{ asset('img/profileAvatar.png') }}" class="h-10">
                    </a>
                    <div id="dropdownProfil" class="right-0 absolute w-40 text-primer bg-white shadow-lg p-4 rounded-sm  border-t-1 border-primer invisible
                        ">
                        <div class="pb-2 border-b-1 border-gray-500">
                            <span >{{ $username }}</span><br>
                            <span class="font-light">Admin</span>
                        </div>
                        <div class="py-2 border-b-1 border-gray-500 hover:bg-bground">
                            <a href="{{ route('profile', ['username' => $username]) }}" class="flex gap-2 items-center px-2"><img src="img/profileAvatar.png" class="h-5 rounded-full bg-aksen"> Profil</a>
                        </div>
                        <div class="py-2 hover:bg-bground">
                            <a href="{{ route('login') }}" class="flex gap-2 items-center px-2"><img src="img/logoLogout.svg" class="h-5">Log Out</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        function showDropdown() {
            if (document.getElementById('dropdownProfil').classList.contains('invisible')) {
                document.getElementById('dropdownProfil').classList.remove('invisible');
            } else {
                document.getElementById('dropdownProfil').classList.add('invisible');
            }
        }

        document.getElementById('profilBtn').addEventListener('click', (e) => {
            e.stopPropagation();
            showDropdown();
        });
        document.addEventListener('click', (e) => {
            if (!(document.getElementById('dropdownProfil').contains(e.target))) {
                document.getElementById('dropdownProfil').classList.add('invisible')
            }
        })
    });
</script>
