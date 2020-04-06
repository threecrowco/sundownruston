@extends('layouts.frontend')

@section('title', 'Welcome to Sundown Tavern')

@section('content')
    <section id="hero" class="container flex items-center justify-center mx-auto bg-gray-600" style="min-height: 50vh; background-image: url({{ url('/images/hero_bg.png') }}); background-size: cover;">
        <img class="w-full max-w-3xl" src="{{ url('/images/hero_paint.png') }}" alt="">
    </section>

    <section id="specials" class="container flex items-center justify-center py-12 mx-auto border-t border-b border-gray-300" style="background: white url({{ url('/images/lattice.png') }})">
        <div class="flex items-center justify-between w-full max-w-4xl mx-auto bg-white border border-brand-gold">
            <div>image</div>
            <div class="flex flex-col p-6">
                <span class="mb-2 text-xs uppercase text-brand-gold tracking-widest-plus">specials</span>
                <h3>specials title</h3>
                <p class="py-2 font-serif text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente harum saepe nam unde esse labore!</p>
                <div>follow block</div>
            </div>
        </div>
    </section>

    {{-- @livewire('event-form') --}}
    @auth
        <x-event-form />
    @endauth
@endsection
