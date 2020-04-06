<?php

use Spatie\OpeningHours\OpeningHours;

if (!function_exists('isOpen')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function isOpen()
    {
        $openingHours = OpeningHours::create([
            'monday'     => ['11:00-01:00'],
            'tuesday'    => ['11:00-01:00'],
            'wednesday'  => ['11:00-01:00'],
            'thursday'   => ['11:00-01:00'],
            'friday'     => ['11:00-01:00'],
            'saturday'   => ['11:00-01:00'],
            'sunday'     => ['11:00-01:00'],
        ]);

        $now = new DateTime('now');
        $range = $openingHours->currentOpenRange($now);

        if ($range) {
            return "Yes! We're open until " . $range->end()->format('g:ia') . "!";
        } else {
            return "Sorry, we're closed for the day.";
        }
    }
}

if (!function_exists('weeklyHours')) {
    function weeklyHours()
    {
        $openingHours = OpeningHours::create([
            'monday'     => ['11:00-01:00'],
            'tuesday'    => ['11:00-01:00'],
            'wednesday'  => ['11:00-01:00'],
            'thursday'   => ['11:00-01:00'],
            'friday'     => ['11:00-01:00'],
            'saturday'   => ['11:00-01:00'],
            'sunday'     => ['11:00-01:00'],
        ]);

        dd($openingHours->forWeek());
    }
}
