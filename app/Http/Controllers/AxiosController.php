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
}
