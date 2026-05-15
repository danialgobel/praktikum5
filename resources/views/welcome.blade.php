@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="space-y-10">
        <div class="glow-panel rounded-2xl p-10">
            <div class="max-w-3xl space-y-6">
                <p class="text-xs uppercase tracking-widest text-gray-400">POSTEST ROUTING</p>
                <h1 class="text-5xl font-bold text-white sm:text-6xl">Postest Rekayasa Web</h1>
                <p class="text-gray-300 leading-8">Lima route Laravel aktif: dua tanpa parameter (/ dan /about) dan tiga dengan parameter (/user/{name}, /product/{id}, /city/{name}). Arahkan browser ke setiap jalur untuk memverifikasi fungsi.</p>
                <div class="flex flex-wrap gap-3">
                    <span class="rounded-full bg-blue-900/50 px-3 py-2 text-xs uppercase tracking-widest text-blue-300 border border-blue-500/30">Static route (tanpa parameter)</span>
                    <span class="rounded-full bg-green-900/50 px-3 py-2 text-xs uppercase tracking-widest text-green-300 border border-green-500/30">Parameterized route (dengan parameter)</span>
                </div>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-2">
            <div class="route-card rounded-2xl p-8 transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <p class="text-sm text-gray-400">Home</p>
                <p class="mt-4 text-3xl font-bold text-white">/</p>
                <p class="mt-3 text-gray-500">Halaman utama. (Static route)</p>
                <p class="mt-4 text-xs uppercase tracking-widest text-gray-500">Contoh: <span class="text-blue-400">/</span></p>
            </div>
            <div class="route-card rounded-2xl p-8 transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <p class="text-sm text-gray-400">About</p>
                <p class="mt-4 text-3xl font-bold text-white">/about</p>
                <p class="mt-3 text-gray-500">Informasi proyek. (Static route)</p>
                <p class="mt-4 text-xs uppercase tracking-widest text-gray-500">Contoh: <span class="text-blue-400">/about</span></p>
            </div>
            <div class="route-card rounded-2xl p-8 transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <p class="text-sm text-gray-400">User</p>
                <p class="mt-4 text-3xl font-bold text-white">/user/{name}</p>
                <p class="mt-3 text-gray-500">Menampilkan nama pengguna. (Parameterized route)</p>
                <p class="mt-4 text-xs uppercase tracking-widest text-gray-500">Contoh: <span class="text-blue-400">/user/Dani</span></p>
            </div>
            <div class="route-card rounded-2xl p-8 transition-all duration-500 hover:scale-105 hover:shadow-2xl">
                <p class="text-sm text-gray-400">Product</p>
                <p class="mt-4 text-3xl font-bold text-white">/product/{id}</p>
                <p class="mt-3 text-gray-500">Menampilkan ID produk. (Parameterized route)</p>
                <p class="mt-4 text-xs uppercase tracking-widest text-gray-500">Contoh: <span class="text-blue-400">/product/123</span></p>
            </div>
            <div class="route-card rounded-2xl p-8 transition-all duration-500 hover:scale-105 hover:shadow-2xl lg:col-span-2">
                <p class="text-sm text-gray-400">City</p>
                <p class="mt-4 text-3xl font-bold text-white">/city/{name}</p>
                <p class="mt-3 text-gray-500">Menampilkan nama kota. (Parameterized route)</p>
                <p class="mt-4 text-xs uppercase tracking-widest text-gray-500">Contoh: <span class="text-blue-400">/city/Yogyakarta</span></p>
            </div>
        </div>
    </section>
@endsection
