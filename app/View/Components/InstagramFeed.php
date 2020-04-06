<?php

namespace App\View\Components;

use Illuminate\View\Component;
use InstagramScraper\Instagram;

class InstagramFeed extends Component
{

    public function render()
    {
        $ig = new Instagram();
        $instagramImages = array_slice($ig->getMedias('sundownruston'), 0, 6);
        return view('components.instagram-feed', compact('instagramImages'));
    }
}
