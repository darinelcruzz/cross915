<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'member_id', 'membership_id', 'amount'
    ];

    function member()
    {
        return $this->belongsTo(Member::class);
    }
}
