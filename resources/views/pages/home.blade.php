@extends('layouts.frontend')

@section('title', 'Welcome to Sundown Tavern')

@section('content')
    <div class="container mx-auto bg-white">
        <h1>Welcome to Sundown Tavern</h1>
    </div>

    {{-- @livewire('event-form') --}}
    @auth
        <x-event-form />
    @endauth
@endsection
