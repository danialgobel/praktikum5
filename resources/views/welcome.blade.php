@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="space-y-10">
        <div class="glow-panel rounded-[2rem] p-10">
            <div class="max-w-3xl space-y-6">
                <p class="text-xs uppercase tracking-[0.36em] text-slate-400">NAVIGATION ARRAY</p>
                <h1 class="text-5xl font-semibold text-white sm:text-6xl">Space Route Command</h1>
                <p class="text-slate-300 leading-8">Lima route Laravel aktif: dua tanpa parameter dan tiga dinamis. Arahkan browser ke setiap jalur untuk memverifikasi fungsi.</p>
                <div class="flex flex-wrap gap-3">
                    <span class="rounded-full bg-white/5 px-3 py-2 text-xs uppercase tracking-[0.3em] text-slate-200">Static route</span>
                    <span class="rounded-full bg-white/5 px-3 py-2 text-xs uppercase tracking-[0.3em] text-slate-200">Parameterized route</span>
                </div>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-2">
            <div class="route-card rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">Home</p>
                <p class="mt-4 text-3xl font-semibold text-white">/</p>
                <p class="mt-3 text-slate-500">Halaman utama.</p>
                <p class="mt-4 text-xs uppercase tracking-[0.28em] text-slate-500">Contoh: <span class="text-white">/</span></p>
            </div>
            <div class="route-card rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">About</p>
                <p class="mt-4 text-3xl font-semibold text-white">/about</p>
                <p class="mt-3 text-slate-500">Informasi proyek.</p>
                <p class="mt-4 text-xs uppercase tracking-[0.28em] text-slate-500">Contoh: <span class="text-white">/about</span></p>
            </div>
            <div class="route-card rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">User</p>
                <p class="mt-4 text-3xl font-semibold text-white">/user/{name}</p>
                <p class="mt-3 text-slate-500">Menampilkan nama pengguna.</p>
                <p class="mt-4 text-xs uppercase tracking-[0.28em] text-slate-500">Contoh: <span class="text-white">/user/Dani</span></p>
            </div>
            <div class="route-card rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">Product</p>
                <p class="mt-4 text-3xl font-semibold text-white">/product/{id}</p>
                <p class="mt-3 text-slate-500">Menampilkan ID produk.</p>
                <p class="mt-4 text-xs uppercase tracking-[0.28em] text-slate-500">Contoh: <span class="text-white">/product/123</span></p>
            </div>
            <div class="route-card rounded-[2rem] p-8 lg:col-span-2">
                <p class="text-sm text-slate-400">City</p>
                <p class="mt-4 text-3xl font-semibold text-white">/city/{name}</p>
                <p class="mt-3 text-slate-500">Menampilkan nama kota.</p>
                <p class="mt-4 text-xs uppercase tracking-[0.28em] text-slate-500">Contoh: <span class="text-white">/city/Jakarta</span></p>
            </div>
        </div>
    </section>
@endsection
