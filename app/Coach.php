<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Coach extends Model
{
    protected $fillable = [
        'name', 'birthdate', 'gender', 'username'
    ];

    function getBirthdayAttribute()
    {
        $birthdate = new Date(strtotime($this->birthdate));
        return $birthdate->format('j \d\e F');
    }
}
