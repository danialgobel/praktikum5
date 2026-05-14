<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100">
        <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8">
            <header class="mb-8 rounded-3xl border border-slate-700 bg-slate-900/80 p-6 shadow-xl shadow-slate-950/40 backdrop-blur-sm">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <a href="{{ route('home') }}" class="inline-block text-3xl font-semibold tracking-tight text-white">Praktikum 5</a>
                        <p class="mt-2 text-sm text-slate-400">Demo routing Laravel 11 untuk postest praktikum.</p>
                    </div>
                    <nav class="flex flex-wrap gap-3">
                        <a href="{{ route('home') }}" class="rounded-full border border-slate-700 bg-slate-800/80 px-4 py-2 text-sm text-slate-200 transition hover:border-slate-500 hover:bg-slate-700">Home</a>
                        <a href="{{ route('about') }}" class="rounded-full border border-slate-700 bg-slate-800/80 px-4 py-2 text-sm text-slate-200 transition hover:border-slate-500 hover:bg-slate-700">About</a>
                        <a href="{{ route('user', ['name' => 'Danial']) }}" class="rounded-full border border-slate-700 bg-slate-800/80 px-4 py-2 text-sm text-slate-200 transition hover:border-slate-500 hover:bg-slate-700">User</a>
                        <a href="{{ route('product', ['id' => 123]) }}" class="rounded-full border border-slate-700 bg-slate-800/80 px-4 py-2 text-sm text-slate-200 transition hover:border-slate-500 hover:bg-slate-700">Product</a>
                        <a href="{{ route('city', ['name' => 'Jakarta']) }}" class="rounded-full border border-slate-700 bg-slate-800/80 px-4 py-2 text-sm text-slate-200 transition hover:border-slate-500 hover:bg-slate-700">City</a>
                    </nav>
                </div>
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="mt-10 border-t border-slate-800 pt-5 text-sm text-slate-500">
                <p>Laravel 11 | PHP 8.3 | Routing demo</p>
            </footer>
        </div>
    </body>
</html>
