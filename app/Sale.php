<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];

    function clientr()
    {
        return $this->belongsTo(Member::class, 'client');
    }

    function deposits()
    {
        return $this->hasMany(Deposit::class, 'sale');
    }

    function product1()
    {
        return $this->belongsTo(Product::class, 'p1');
    }

    function product2()
    {
        return $this->belongsTo(Product::class, 'p2');
    }

    function product3()
    {
        return $this->belongsTo(Product::class, 'p3');
    }

    function product4()
    {
        return $this->belongsTo(Product::class, 'p4');
    }

    function product5()
    {
        return $this->belongsTo(Product::class, 'p5');
    }

    function getStatusStrAttribute()
    {
        return $this->status? 'PAGADO': 'PENDIENTE';
    }

    function getClientNameAttribute()
    {
        return $this->clientr->name;
    }

    function getPendingAttribute()
    {
        return $this->total - $this->deposits->sum('amount');
    }
}
