@extends('layouts.app')

@section('title', 'User')

@section('content')
    <section class="rounded-[2rem] border border-slate-700 bg-slate-900/90 p-8 shadow-2xl shadow-slate-950/40">
        <div class="space-y-6">
            <div class="rounded-3xl bg-gradient-to-r from-indigo-500 via-sky-500 to-cyan-400 p-8 text-white shadow-lg">
                <h1 class="text-5xl font-semibold">{{ ucfirst($name) }}</h1>
            </div>
        </div>
    </section>
@endsection
