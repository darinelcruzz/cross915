<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Member extends Model
{
    protected $fillable = [
        'name', 'birthdate', 'gender', 'blood', 'email', 'cellphone', 'comments', 'visits',
        'membership_id', 'registration', 'schedule_id', 'user_id', 'status', 'ingress',
        'payment', 'validity'
    ];

    function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    function getBirthdayAttribute()
    {
        $birthdate = new Date(strtotime($this->birthdate));
        return $birthdate->format('j \d\e F');
    }

    function getDate($date)
    {
        $datef = new Date(strtotime($this->$date));
        return $datef->format('d/F/y');
    }

    function getShortDate($date)
    {
        $datef = new Date(strtotime($this->$date));
        return $datef->format('d/m/y');
    }

    function getPendigDaysAttribute()
    {
        $payment = new Date(strtotime($this->payment));
        $validity = new Date(strtotime($this->validity));
        $interval = $payment->diff($validity);
        return $interval->format('%a días');
    }
}
