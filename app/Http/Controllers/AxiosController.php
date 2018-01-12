<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AxiosController extends Controller
{
    function products()
    {
        $products = \App\Product::select('id', 'description', 'public', 'type')->get();
        return $products->keyBy('id');
    }

    function descriptions()
    {
        $descriptions = \App\Membership::all();
        return $descriptions->keyBy('id');
    }

    function discounts()
    {
        $descriptions = \App\Discount::all();
        return $descriptions->keyBy('id');
    }
}
