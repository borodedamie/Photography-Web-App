<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $fillable = [
        'name'
    ];

    protected $casts = [
        'role_id' => 'integer',
        'name' => 'string'
    ];

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
