@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="space-y-10">
        <div class="glow-panel rounded-[2rem] p-10">
            <div class="max-w-3xl space-y-6">
                <p class="text-xs uppercase tracking-[0.36em] text-slate-400">SPACE GRID</p>
                <h1 class="text-5xl font-semibold text-white sm:text-6xl">Routing Control Center</h1>
                <p class="text-slate-300 leading-8">Antarmuka praktikum Laravel dengan tema sci-fi dan efek glow putih.</p>
            </div>
        </div>

        <div class="grid gap-4 sm:grid-cols-2">
            <div class="glow-panel rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">Home</p>
                <p class="mt-4 text-3xl font-semibold text-white">/</p>
            </div>
            <div class="glow-panel rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">About</p>
                <p class="mt-4 text-3xl font-semibold text-white">/about</p>
            </div>
            <div class="glow-panel rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">User</p>
                <p class="mt-4 text-3xl font-semibold text-white">/user/{name}</p>
            </div>
            <div class="glow-panel rounded-[2rem] p-8">
                <p class="text-sm text-slate-400">Product</p>
                <p class="mt-4 text-3xl font-semibold text-white">/product/{id}</p>
            </div>
            <div class="glow-panel rounded-[2rem] p-8 sm:col-span-2">
                <p class="text-sm text-slate-400">City</p>
                <p class="mt-4 text-3xl font-semibold text-white">/city/{name}</p>
            </div>
        </div>
    </section>
@endsection
