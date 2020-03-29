<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'datetime',
        'title',
        'price',
        'description',
        'image',
        'video_url',
        'info_url',
        'featured',
    ];
}
