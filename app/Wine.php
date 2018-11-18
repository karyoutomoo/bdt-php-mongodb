<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Wine extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'winereviews';

    protected $fillable = [
        'points', 'title','description','taster_name','taster_twitter_handle','price','designation','variety','region_1','region_2','province','country','winery'
    ];
}
