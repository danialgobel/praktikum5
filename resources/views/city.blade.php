@extends('layouts.app')

@section('title', 'City Info')

@section('content')
    <section class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
        <div class="space-y-6">
            <div class="rounded-3xl bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-400 p-6 text-white shadow-lg shadow-slate-950/20">
                <p class="text-sm uppercase tracking-[0.4em] text-slate-200">City Route</p>
                <h1 class="mt-3 text-4xl font-semibold">Kota: {{ ucfirst($name) }}</h1>
                <p class="mt-4 text-slate-100/80 leading-7">Halaman ini memanfaatkan parameter nama kota untuk menampilkan informasi dinamis di sisi view.</p>
            </div>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-950/70 p-6 text-slate-200">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Route</p>
                    <p class="mt-3 text-xl font-semibold text-white">/city/{{ $name }}</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6 text-slate-200">
                    <p class="text-sm uppercase tracking-[0.3em] text-slate-400">Keterangan</p>
                    <p class="mt-3 text-slate-400">Route ini cocok untuk menampilkan halaman lokasi atau informasi berbasis nama.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
