<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // protected $guarded = [];

    protected $table = "feedbacks"; 
    
    protected $primaryKey = "feedback_id";

    protected $fillable = ['feedback', 'name', 'job_title', 'img'];
}
