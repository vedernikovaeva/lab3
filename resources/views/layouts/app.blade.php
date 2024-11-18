<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div id="app" class="min-h-screen flex flex-col">
        <header class="bg-white shadow">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <h1 class="text-xl font-semibold">
                    <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
                </h1>
                <nav>
                    @auth
                        <a href="{{ route('dashboard') }}" class="mr-4 text-blue-600 hover:underline">Dashboard</a>
                        <a href="{{ route('employees.index') }}" class="mr-4 text-blue-600 hover:underline">Employees</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-red-600 hover:underline">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="mr-4 text-blue-600 hover:underline">Login</a>
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Register</a>
                    @endauth
                </nav>
            </div>
        </header>

        <main class="flex-grow container mx-auto px-4 py-6">
            @yield('content')
        </main>

        <footer class="bg-white shadow py-4 text-center">
            <p class="text-gray-600">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>