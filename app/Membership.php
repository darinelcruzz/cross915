<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'name', 'description', 'type', 'amount', 'status'
    ];
}