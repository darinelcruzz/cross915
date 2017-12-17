<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Attendence extends Model
{
    protected $fillable = [
        'member_id'
    ];

    function member()
    {
        return $this->belongsTo(Member::class);
    }

    function getHourAttribute()
    {
        $hour = new Date(strtotime($this->created_at));
        return $hour->format('g:i a');
    }

    function getHourDateAttribute()
    {
        $hour = new Date(strtotime($this->created_at));
        return $hour->format('g:i a d/M/y');
    }
}
