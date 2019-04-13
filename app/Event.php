<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'event_id';

    protected $fillable = [
        'event_id', 'event_title', 'event_image', 'event_description'
    ];
}
