<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Payment extends Model
{
    protected $fillable = [
        'member_id', 'membership_id', 'amount', 'discount_id', 'date_start'
    ];

    function member()
    {
        return $this->belongsTo(Member::class);
    }

    function membership()
    {
        return $this->belongsTo(Membership::class);
    }
    function discount()
    {
        return $this->belongsTo(Discount::class);
    }

    function getDateAttribute()
    {
        $birthdate = new Date(strtotime($this->create_at));
        return $birthdate->format('d/F/y');
    }
}
