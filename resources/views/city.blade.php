@extends('layouts.app')

@section('title', 'City')

@section('content')
    <section class="glow-panel rounded-2xl p-10">
        <div class="space-y-6">
            <p class="text-xs uppercase tracking-widest text-gray-400">GALACTIC</p>
            <h1 class="text-6xl font-bold text-white">{{ ucfirst($name) }}</h1>
            <p class="text-gray-400">{{ $description ?? 'Route dinamis untuk menampilkan nama kota.' }}</p>
        </div>
    </section>
@endsection
