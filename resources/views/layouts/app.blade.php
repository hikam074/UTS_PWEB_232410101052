<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @unless (View::hasSection('hide-navbar'))
        <x-navbar :username="$username"/>
    @endunless

    <main class="mt-16">
        @if (View::hasSection('show-sidebar'))
            <div class="flex gap-5">
                @include('components.sidebar', ['username' => $username])
                <div class="text-primer p-5">
                    @yield('content')
                </div>
            </div>
        @else
            @yield('content')
        @endif
    </main>

    @unless (View::hasSection('hide-footer'))
        <x-footer />
    @endunless

</body>
</html>
