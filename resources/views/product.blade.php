@extends('layouts.app')

@section('title', 'Product')

@section('content')
    <section class="glow-panel rounded-2xl p-10">
        <div class="space-y-6">
            <p class="text-xs uppercase tracking-widest text-gray-400">PRODUCT MODULE</p>
            <h1 class="text-6xl font-bold text-white">#{{ $id }}</h1>
            <p class="text-gray-400">Route dinamis untuk menampilkan ID produk.</p>
        </div>
    </section>
@endsection
