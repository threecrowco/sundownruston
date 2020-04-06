<?php

use InstagramScraper\Instagram;

if (!function_exists('isOpen')) {

    function instaFeed() {
        $instagram = new Instagram();
        $account = $instagram->getMedias('sundownruston');
        dump($account);
    }

}
