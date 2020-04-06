<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Contentful\Delivery\Client as DeliveryClient;

class EventContentController extends Controller
{
    private $client;

    public function __construct(DeliveryClient $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        $events = $this->client->getEntries();
        $assets = $this->client->getAssets();
        return view('pages.events', compact('events', 'assets'));
    }
}
