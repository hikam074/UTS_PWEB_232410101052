<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
</head>
<body class="bg-sekunder">
    <div class="h-screen flex justify-center items-center text-primer bg-sekunder">
        <section class="w-[50%] min-w-xs max-w-lg flex flex-col justify-center bg-white rounded-lg p-5">
            <div class="flex flex-col justify-center items-center text-center p-4">
                <a href="{{ route('homepage') }}"><img class="h-[12vh] m-5" src="{{ asset('img/logoLogin.png') }}" alt=""></a>
                <h1 class="font-bold text-4xl p-2">Login</h1>
                <p class="font-thin text-lg" p-2>Belum memiiki akun? <a href="" class="text-darkground">Mode Guest</a></p>
            </div>
            <div class="w-full">
                <form action="{{ route('login.process') }}" method="POST">
                    @csrf
                    <div class="w-full px-2">
                        <label for="username" class="text-lg">Username</label><br>
                        <input type="text" name="username" class="bg-bground rounded-md p-2 my-2 w-full">
                    </div>
                    <div class="w-full px-2">
                        <label for="password" class="text-lg">Password</label><br>
                        <input type="password" name="password" class="bg-bground rounded-md p-2 my-2 w-full">
                    </div>
                    <div class="w-full p-2">
                        <button type="submit" class="w-full rounded-lg p-3 bg-primer text-white font-bold">Log-in</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
