@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="space-y-8">
        <div class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
            <div class="max-w-3xl space-y-6">
                <h1 class="text-5xl font-semibold text-white">Praktikum Routing</h1>
                <p class="text-slate-300 leading-8">Aplikasi web yang menunjukkan implementasi routing dinamis dengan Laravel.</p>
            </div>
        </div>

        <div class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
            <h2 class="text-2xl font-semibold text-white mb-6">Routes</h2>
            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-3xl bg-slate-950/70 p-6">
                    <p class="text-white font-semibold text-lg">Home</p>
                    <p class="text-slate-400 mt-2">/</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6">
                    <p class="text-white font-semibold text-lg">About</p>
                    <p class="text-slate-400 mt-2">/about</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6">
                    <p class="text-white font-semibold text-lg">User</p>
                    <p class="text-slate-400 mt-2">/user/{name}</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6">
                    <p class="text-white font-semibold text-lg">Product</p>
                    <p class="text-slate-400 mt-2">/product/{id}</p>
                </div>
                <div class="rounded-3xl bg-slate-950/70 p-6 sm:col-span-2">
                    <p class="text-white font-semibold text-lg">City</p>
                    <p class="text-slate-400 mt-2">/city/{name}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
