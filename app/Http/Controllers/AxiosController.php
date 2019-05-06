<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class AxiosController extends Controller
{
    function products()
    {
        $products = \App\Product::where('status', 1)
            ->select('id', 'description', 'public', 'type')
            ->get();
        return $products->keyBy('id');
    }

    function member($member_id)
    {
        return Member::whereId($member_id)
            ->with('membership:id,name,amount', 'payments.discount')
            ->first();
    }

    function memberships()
    {
        $descriptions = \App\Membership::all();
        return $descriptions->keyBy('id');
    }

    function discounts()
    {
        $descriptions = \App\Discount::all();
        return $descriptions->keyBy('id');
    }

    function payments()
    {
        $payments = \App\Payment::orderBy('created_at', 'desc')
            ->get();

        return $payments->keyBy('member_id');
    }
}
