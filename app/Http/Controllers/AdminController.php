<?php

namespace App\Http\Controllers;

use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Sales;
use App\Member;

class AdminController extends Controller
{
    function cash(Request $request)
    {
        $date = $request->date == 0 ? Date::now()->format('Y-m-d') : $request->date;
        $fdate = new Date(strtotime($date));
        $fdate = $fdate->format('l, j F Y');

        return view('cash.balance', compact('date', 'fdate'));
    }

    function create()
    {

    }

    function store(Request $request)
    {

    }

    function show(Member $member)
    {

    }

    function edit(Member $member)
    {

    }

    function update(Request $request)
    {

    }

    function destroy($id)
    {
        //
    }
}
