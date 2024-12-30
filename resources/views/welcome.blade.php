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
    @endif
</head>

<body>
    <main class="p-4">
        <!-- Navbar -->
        <nav class="p-4 bg-gray-600">
            <div class="flex items-center justify-between">
                <!-- Logo or Title -->
                <h1 class="text-4xl font-extrabold text-gray-300">AutoVault</h1>

                <!-- Navbar links (Login and Register Buttons) -->
                <div class="flex items-center space-x-4">
                    @auth
                    <a href="{{ url('/dashboard') }}" 
                       class="px-4 py-2 text-white transition bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                        Dashboard
                    </a>
                    @else
                    <a href="{{ route('login') }}" 
                       class="px-4 py-2 text-white transition bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                        Log in
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" 
                       class="px-4 py-2 text-white transition bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                        Register
                    </a>
                    @endif
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Full-Width Image Below Navbar -->
        <img src="https://cdn.leonardo.ai/users/da809447-1e02-4c0c-b312-4dbda017e5f0/generations/07c906b3-39a6-433a-ac06-2c76659cbf23/Leonardo_Kino_XL_newly_branded_lots_of_various_types_of_vehicl_3.jpg" 
             alt="vehicle home page pic1" class="w-full h-auto">

        <!-- Vehicle Registration Description -->
        <section class="p-8 bg-white">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="mb-4 text-3xl font-bold text-gray-800">Welcome to AutoVault</h2>
                <p class="text-lg leading-relaxed text-gray-600">
                    AutoVault is your go-to platform for hassle-free vehicle registration and management. 
                    Whether you're registering your first vehicle or renewing your documents, our system 
                    makes the process quick, easy, and secure. Explore a seamless way to handle your 
                    vehicle-related needs with just a few clicks!
                </p>
            </div>
        </section>
    </main>
</body>

</html>

