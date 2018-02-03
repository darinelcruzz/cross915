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

    function getQuantityAttribute()
    {
        if($this->type == 'sizes') {
            return serialize([
                'xs' => $this->xsmall,
                's' => $this->small,
                'm' => $this->medium,
                'l' => $this->large,
                'xl' => $this->xlarge,
            ]);
        }

        return strval($this->unisize);
    }
}
