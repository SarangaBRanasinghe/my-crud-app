<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
    </style>
    @endif
</head>

<body>
    <div class="px-12 pt-8 mx-0">
        <header>
            @if (Route::has('login'))
            <nav class="flex justify-end flex-1 -mx-3">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="px-3 py-2 text-black transition rounded-md ring-1 ring-transparent hover:text-black/70 focus:outline-none ">
                    Dashboard
                </a>
                @else
                <a
                    href="{{ route('login') }}"
                    class="px-3 py-2 text-white bg-blue-500 rounded-md">
                    Log in
                </a>

                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Register
                </a>
                @endif
                @endauth
            </nav>
            @endif
        </header>
        <main>
            landing page
        </main>
    </div>
</body>

</html>