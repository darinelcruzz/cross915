<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'hour', 'members', 'monday', 'tuesday', 'wednesday',
        'thursday', 'friday', 'saturday', 'sunday',
    ];
}
