@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <section class="glow-panel rounded-[2rem] p-10">
        <div class="space-y-6">
            <p class="text-xs uppercase tracking-[0.36em] text-slate-400">PRODUCT MODULE</p>
            <h1 class="text-6xl font-semibold text-white">#{{ $id }}</h1>
            <p class="text-slate-400">Route dinamis untuk menampilkan ID produk.</p>
        </div>
    </section>
@endsection
