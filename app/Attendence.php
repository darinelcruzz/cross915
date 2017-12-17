<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = [
        'member_id'
    ];

    function getNiceDate($date)
    {
        $fdate = new Date(strtotime($this->$date));
        return $fdate->format('l, j F Y');
    }
}
