<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $table = "instagrams";

    protected $primaryKey = "image_id";
    
    protected $fillable = [
        'image_id' , 'image'
    ];
}
