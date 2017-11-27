<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'hour', 'members', 'monday', 'tuesday', 'wednesday',
        'thursday', 'friday', 'saturday', 'sunday',
    ];

    function mondayc()
    {
        return $this->belongsTo(Training::class, 'monday');
    }

    function tuesdayc()
    {
        return $this->belongsTo(Training::class, 'tuesday');
    }

    function wednesdayc()
    {
        return $this->belongsTo(Training::class, 'wednesday');
    }

    function thursdayc()
    {
        return $this->belongsTo(Training::class, 'thursday');
    }

    function fridayc()
    {
        return $this->belongsTo(Training::class, 'friday');
    }
}
