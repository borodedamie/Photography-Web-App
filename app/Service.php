<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $primaryKey = 'service_id';

    protected $fillable = [ 'service_title', 'service_description', 'service_image'];
}
