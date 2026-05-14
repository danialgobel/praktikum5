@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <section class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
        <div class="space-y-6">
            <div class="rounded-3xl bg-slate-800/90 p-6 shadow-lg shadow-slate-950/20">
                <p class="text-sm uppercase tracking-[0.4em] text-slate-400">Detail Produk</p>
                <h1 class="mt-3 text-4xl font-semibold text-white">Produk ID #{{ $id }}</h1>
                <p class="mt-4 text-slate-300 leading-8">Route ini menerima ID produk sebagai parameter dan menampilkan informasi produk secara sederhana.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-950/70 p-6 text-slate-200">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Route aktif</p>
                    <p class="mt-3 text-xl font-semibold text-white">/product/{{ $id }}</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6 text-slate-200">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Informasi</p>
                    <p class="mt-3 text-slate-400">Halaman ini memperlihatkan penggunaan parameter numerik di dalam URL.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
