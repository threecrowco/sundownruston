@extends('layouts.frontend')

@section('title', 'Upcoming Events')

@section('content')
<section class="container flex flex-col items-center justify-between mx-auto bg-white">
    <div>
        <h1 class="text-xl font-medium">Upcoming Events</h1>
    </div>
    <div class="w-full px-6 py-4">
        @foreach ($events as $event)
            <div class="flex items-center justify-between w-full">
                <div>{{ carbon($event->date)->format('M d') }}</div>
                <div class="flex-1 ml-6">{{ $event->title }}</div>
                <div>
                    <a href="{{ $event->infoUrl }}">More Info</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section class="container flex items-center justify-between mx-auto bg-white">
    @foreach ($instagramImages as $image)
        <div class="w-1/6">
            <a href="{{ $image->getLink() }}">
                <img src="{{ $image->getImageHighResolutionUrl() }}" alt="">
            </a>
        </div>
    @endforeach
</section>
@endsection
