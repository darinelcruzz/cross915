<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['coach_id', 'workout_id', 'color'];

    function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    function workout()
    {
        return $this->belongsTo(Workout::class);
    }
}
