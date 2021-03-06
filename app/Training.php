<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $fillable = ['coach_id', 'workout_id', 'color', 'extra1', 'extra2', 'weekday'];

    function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    function workout()
    {
        return $this->belongsTo(Workout::class);
    }

    function extra1()
    {
        return $this->belongsTo(Workout::class, 'extra1');
    }

    function extra2()
    {
        return $this->belongsTo(Workout::class, 'extra2');
    }
}
