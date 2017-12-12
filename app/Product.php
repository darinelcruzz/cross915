<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $guarded = [];

    function getImgUrlAttribute()
    {
        return Storage::url("products/" . $this->img);
    }
}
