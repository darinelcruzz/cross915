<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Member extends Model
{
    protected $fillable = [
        'name', 'birthdate', 'gender', 'blood', 'email', 'cellphone',
        'membership_id', 'registration', 'schedule_id', 'user_id', 'status', 'ingress'
    ];

    function getBirthdayAttribute()
    {
        $birthdate = new Date(strtotime($this->birthdate));
        return $birthdate->format('j \d\e F');
    }

    function getInscriptionAttribute()
    {
        $ingress = new Date(strtotime($this->ingress));
        return $ingress->format('j \d\e F, Y');
    }
}
