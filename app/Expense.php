<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'description', 'date', 'amount'
    ];

    function getNiceDate($date)
    {
        $fdate = new Date(strtotime($this->$date));
        return $fdate->format('l, j F Y');
    }
}
