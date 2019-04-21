<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $primaryKey = 'gallery_id';

    protected $fillable = [ 'name', 'description', 'image', 'category_id' ];

    public function category(){

        return $this->belongsTo('App\Category');
    }
}
