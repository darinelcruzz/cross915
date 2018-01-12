<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $guarded = [];

    function saler()
    {
        return $this->belongsTo(Sale::class, 'sale');
    }
}
