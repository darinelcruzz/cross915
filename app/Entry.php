<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'date', 'product_id', 'old', 'new', 'user_id', 'ticket'
    ];

    function product()
    {
        return $this->belongsTo(Product::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
