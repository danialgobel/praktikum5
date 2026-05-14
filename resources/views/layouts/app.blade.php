<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-slate-950 text-slate-100">
        <div class="relative overflow-hidden">
            <div class="pointer-events-none absolute inset-0 bg-[radial-gradient(circle_at_top,rgba(255,255,255,0.08),transparent_18%),radial-gradient(circle_at_70%_10%,rgba(255,255,255,0.05),transparent_10%),radial-gradient(circle_at_25%_75%,rgba(255,255,255,0.04),transparent_14%)]"></div>
            <div class="mx-auto max-w-6xl px-4 py-6 sm:px-6 lg:px-8 relative">
                <header class="mb-8 overflow-hidden rounded-[2rem] border border-white/10 bg-slate-950/80 p-6 shadow-[0_0_80px_rgba(255,255,255,0.06)] backdrop-blur-xl">
                    <div class="pointer-events-none absolute inset-x-10 top-0 h-28 rounded-b-[3rem] bg-white/5 blur-3xl"></div>
                    <div class="relative flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <a href="{{ route('home') }}" class="inline-block text-3xl font-semibold tracking-[0.12em] text-white">Praktikum 5</a>
                            <p class="mt-2 text-sm text-slate-400">Sci-fi routing interface.</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <span class="glow-pill"></span>
                            <span class="glow-pill"></span>
                        </div>
                    </div>
                    <nav class="mt-6 flex flex-wrap gap-3">
                        <a href="{{ route('home') }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100 transition hover:border-white/20 hover:bg-white/10">Home</a>
                        <a href="{{ route('about') }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100 transition hover:border-white/20 hover:bg-white/10">About</a>
                        <a href="{{ route('user', ['name' => 'Danial']) }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100 transition hover:border-white/20 hover:bg-white/10">User</a>
                        <a href="{{ route('product', ['id' => 123]) }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100 transition hover:border-white/20 hover:bg-white/10">Product</a>
                        <a href="{{ route('city', ['name' => 'Jakarta']) }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100 transition hover:border-white/20 hover:bg-white/10">City</a>
                    </nav>
                </header>

                <main>
                    @yield('content')
                </main>

                <footer class="mt-10 border-t border-white/10 pt-5 text-sm text-slate-500">
                    <p>Laravel 11 | PHP 8.3 | Routing demo</p>
                </footer>
            </div>
        </div>
    </body>
</html>
