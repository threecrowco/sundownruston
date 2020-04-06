<section class="container flex items-center justify-between mx-auto bg-white">
    @foreach ($instagramImages as $image)
    <div class="w-1/6">
        <a href="{{ $image->getLink() }}">
            <img src="{{ $image->getImageHighResolutionUrl() }}" alt="">
        </a>
    </div>
    @endforeach
</section>
