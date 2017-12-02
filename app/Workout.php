<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = [
        'name', 'description', 'duration', 'difficulty', 'type', 'date', 'priority', 'week',
    ];

    function getBombsAttribute()
    {
        $bombs = '';
        for ($i=0; $i < $this->difficulty; $i++) {
            $bombs .= '<i class="fa fa-bomb" aria-hidden="true"></i>';
        }
        return $bombs;
    }
}
