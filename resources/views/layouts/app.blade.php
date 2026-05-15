<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-gray-950 text-gray-100">
        <div class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.05),transparent_50%),radial-gradient(circle_at_bottom,rgba(255,255,255,0.03),transparent_50%)]"></div>
            <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8 relative">
                <header class="mb-8 overflow-hidden rounded-2xl border border-gray-700 bg-gray-900/90 p-6 shadow-2xl backdrop-blur-md">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <h1 class="text-3xl font-bold text-white">Praktikum 5</h1>
                            <p class="mt-2 text-sm text-gray-400">Postest Rekayasa Web</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="h-3 w-3 rounded-full bg-blue-500 animate-pulse"></div>
                            <div class="h-3 w-3 rounded-full bg-green-500 animate-pulse"></div>
                        </div>
                    </div>
                    <nav class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('home') }}" class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-300 {{ request()->routeIs('home') ? 'bg-blue-600 text-white hover:bg-blue-700 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/25' : 'bg-gray-700 text-gray-200 hover:bg-gray-600 hover:scale-105 hover:shadow-lg' }}">Home</a>
                        <a href="{{ route('about') }}" class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-300 {{ request()->routeIs('about') ? 'bg-blue-600 text-white hover:bg-blue-700 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/25' : 'bg-gray-700 text-gray-200 hover:bg-gray-600 hover:scale-105 hover:shadow-lg' }}">About</a>
                        <a href="{{ route('user', ['name' => 'Danial']) }}" class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-300 {{ request()->routeIs('user') ? 'bg-blue-600 text-white hover:bg-blue-700 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/25' : 'bg-gray-700 text-gray-200 hover:bg-gray-600 hover:scale-105 hover:shadow-lg' }}">User</a>
                        <a href="{{ route('product', ['id' => 123]) }}" class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-300 {{ request()->routeIs('product') ? 'bg-blue-600 text-white hover:bg-blue-700 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/25' : 'bg-gray-700 text-gray-200 hover:bg-gray-600 hover:scale-105 hover:shadow-lg' }}">Product</a>
                        <a href="{{ route('city', ['name' => 'Yogyakarta']) }}" class="rounded-lg px-4 py-2 text-sm font-medium transition-all duration-300 {{ request()->routeIs('city') ? 'bg-blue-600 text-white hover:bg-blue-700 hover:scale-105 hover:shadow-lg hover:shadow-blue-500/25' : 'bg-gray-700 text-gray-200 hover:bg-gray-600 hover:scale-105 hover:shadow-lg' }}">City</a>
                    </nav>
                </header>

                <main>
                    @yield('content')
                </main>

                <footer class="mt-10 border-t border-gray-700 pt-5 text-sm text-gray-500">
                    <p>Laravel 11 | PHP 8.3 | Postest Routing</p>
                </footer>
            </div>
        </div>
    </body>
</html>
