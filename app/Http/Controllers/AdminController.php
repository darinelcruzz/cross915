<?php

namespace App\Http\Controllers;

use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Sales;
use App\Member;
use App\Membership;
use App\Payment;

class AdminController extends Controller
{
    function cash(Request $request)
    {
        $date = $request->date == 0 ? Date::now()->format('Y-m-d') : $request->date;
        $fdate = new Date(strtotime($date));
        $fdate = $fdate->format('l, j F Y');

        $payments = Payment::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->get();
        $sum = Payment::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->sum('amount');

        return view('admin.balance', compact('date', 'fdate', 'payments', 'sum'));
    }

    function indexMD()
    {
        $memberships = Membership::all();

        return view('admin.indexMD', compact('memberships'));
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
