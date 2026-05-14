@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
        <div class="space-y-6">
            <h1 class="text-4xl font-semibold text-white">Tentang Halaman</h1>
            <p class="text-slate-300 leading-8">Halaman ini dibuat untuk menjelaskan fungsi routing tanpa parameter di proyek praktikum. Desainnya sudah ditingkatkan menjadi tampilan web yang lebih menarik.</p>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-950/70 p-6 text-slate-200">
                    <h2 class="text-xl font-semibold text-white">Route tanpa parameter</h2>
                    <p class="mt-3 text-slate-400">Route ini ditampilkan langsung tanpa input tambahan, cocok untuk halaman statis seperti About.</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6 text-slate-200">
                    <h2 class="text-xl font-semibold text-white">Tujuan praktikum</h2>
                    <p class="mt-3 text-slate-400">Menunjukkan pemahaman routing dasar Laravel dan kemampuan membuat tampilan web yang bersih.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
