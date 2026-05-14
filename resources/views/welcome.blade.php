@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="space-y-8">
        <div class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
            <div class="max-w-3xl space-y-6">
                <p class="text-sm uppercase tracking-[0.3em] text-slate-500">Postest Praktikum</p>
                <h1 class="text-4xl font-semibold text-white sm:text-5xl">Selamat datang di latihan routing Laravel</h1>
                <p class="text-slate-300 leading-8">Halaman ini dibuat sebagai bagian dari postest untuk menunjukkan 5 route berbeda, termasuk route tanpa parameter dan route parameter dinamis.</p>
                <div class="grid gap-4 sm:grid-cols-2">
                    <div class="rounded-3xl border border-slate-700 bg-slate-950/90 p-5 shadow-lg shadow-slate-950/20">
                        <p class="text-slate-400 text-sm">Tanpa parameter</p>
                        <p class="mt-3 text-xl font-semibold text-white">/</p>
                        <p class="mt-2 text-slate-400">Halaman utama</p>
                    </div>
                    <div class="rounded-3xl border border-slate-700 bg-slate-950/90 p-5 shadow-lg shadow-slate-950/20">
                        <p class="text-slate-400 text-sm">Tanpa parameter</p>
                        <p class="mt-3 text-xl font-semibold text-white">/about</p>
                        <p class="mt-2 text-slate-400">Tentang aplikasi</p>
                    </div>
                    <div class="rounded-3xl border border-slate-700 bg-slate-950/90 p-5 shadow-lg shadow-slate-950/20">
                        <p class="text-slate-400 text-sm">Dengan parameter</p>
                        <p class="mt-3 text-xl font-semibold text-white">/user/{name}</p>
                        <p class="mt-2 text-slate-400">Tampilkan salam ke user</p>
                    </div>
                    <div class="rounded-3xl border border-slate-700 bg-slate-950/90 p-5 shadow-lg shadow-slate-950/20">
                        <p class="text-slate-400 text-sm">Dengan parameter</p>
                        <p class="mt-3 text-xl font-semibold text-white">/product/{id}</p>
                        <p class="mt-2 text-slate-400">Tampilkan ID produk</p>
                    </div>
                    <div class="rounded-3xl border border-slate-700 bg-slate-950/90 p-5 shadow-lg shadow-slate-950/20 sm:col-span-2">
                        <p class="text-slate-400 text-sm">Dengan parameter</p>
                        <p class="mt-3 text-xl font-semibold text-white">/city/{name}</p>
                        <p class="mt-2 text-slate-400">Tampilkan nama kota</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-[1.3fr_0.9fr]">
            <div class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
                <h2 class="text-2xl font-semibold text-white">Petunjuk singkat</h2>
                <p class="mt-4 text-slate-300 leading-7">Gunakan tautan navigasi di atas untuk mengunjungi masing-masing route. Setiap route menampilkan halaman yang sudah diberi desain lebih keren untuk mendukung nilai postest.</p>
                <div class="mt-6 space-y-3 text-slate-400">
                    <p><span class="font-semibold text-slate-200">Tip:</span> Ganti parameter pada route dengan nama atau ID lain untuk melihat perubahan konten.</p>
                    <p><span class="font-semibold text-slate-200">Contoh:</span> <code class="rounded-lg bg-slate-800 px-2 py-1 text-slate-200">/user/Aldi</code></p>
                </div>
            </div>
            <div class="rounded-[2rem] border border-slate-700 bg-gradient-to-br from-sky-500/20 to-cyan-600/20 p-8 shadow-2xl shadow-slate-950/40">
                <p class="text-sm uppercase tracking-[0.4em] text-cyan-200">Status</p>
                <h2 class="mt-4 text-3xl font-semibold text-white">Sudah siap untuk Postest</h2>
                <p class="mt-3 text-slate-200 leading-7">Halaman ini menunjukkan bahwa routing sudah lengkap dan sekarang tampil dengan desain sederhana tetapi modern.</p>
                <div class="mt-6 flex flex-wrap gap-3">
                    <span class="rounded-full bg-slate-950/80 px-4 py-2 text-sm text-slate-100">Laravel 11</span>
                    <span class="rounded-full bg-slate-950/80 px-4 py-2 text-sm text-slate-100">Tailwind CSS</span>
                    <span class="rounded-full bg-slate-950/80 px-4 py-2 text-sm text-slate-100">Routing</span>
                </div>
            </div>
        </div>
    </section>
@endsection
