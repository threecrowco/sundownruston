<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use InstagramScraper\Instagram;
use Contentful\Delivery\Client as DeliveryClient;

class PagesController extends Controller
{
    public function __construct(DeliveryClient $client)
    {
        $this->client = $client;
    }

    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function events()
    {
        $ig = new Instagram();
        $instagramImages = array_slice($ig->getMedias('sundownruston'), 0, 6);

        $events = $this->client->getEntries();
        $assets = $this->client->getAssets();

        return view('pages.events', [
            'instagramImages' => $instagramImages,
            'events' => $events,
            'assets' => $assets,
        ]);
    }

    public function menu()
    {
        return view('pages.menu');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
