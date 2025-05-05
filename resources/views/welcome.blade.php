<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | SmartMinutes</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-[#f9fafb] via-[#f2f4f6] to-[#e9ecf0] text-[#1b1b18] flex flex-col">

    <!-- Header -->
    <header class="w-full px-6 py-4 flex justify-end max-w-6xl mx-auto text-sm">
        @if (Route::has('login'))
            <nav class="flex items-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-blue-600 hover:underline">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col justify-center items-center text-center px-6">
        <h1 class="text-5xl lg:text-6xl font-semibold mb-4">
            Welcome to <span class="text-blue-600">SmartMinutes</span>
        </h1>
        <p class="text-gray-700 text-lg max-w-2xl mb-8">
            Streamline your meeting documentation process. Create, manage, and access minutes efficiently with AI-enhanced tools.
        </p>

        @guest
            <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md shadow transition">
                Get Started
            </a>
        @endguest
    </main>

    <!-- Footer-->
    <footer class="text-center text-xs text-gray-500 py-4">
        &copy; {{ date('Y') }} SmartMinutes. All rights reserved.
    </footer>
</body>
</html>
