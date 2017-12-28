<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Storage;

class Member extends Model
{
    protected $fillable = [
        'name', 'birthdate', 'gender', 'blood', 'email', 'cellphone', 'comments', 'visits',
        'membership_id', 'registration', 'schedule_id', 'user_id', 'status', 'ingress',
        'payment', 'validity', 'civil', 'profession', 'address', 'img'
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
    function getShortWeekDate($date)
    {
        $datef = new Date(strtotime($this->$date));
        return $datef->format('D, d/m/y');
    }

    function getPendigDaysAttribute()
    {
        $payment = Date::now();
        $validity = new Date(strtotime($this->validity));
        $interval = $payment->diff($validity);
        return $interval->format('%r%a');
    }

    function getImgUrlAttribute()
    {
        return Storage::url("members/" . $this->img);
    }
}
