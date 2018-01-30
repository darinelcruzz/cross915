<?php

namespace App\Http\Controllers;

use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Sale;
use App\Member;
use App\Membership;
use App\Discount;
use App\Deposit;
use App\Payment;

class AdminController extends Controller
{
    function cash(Request $request)
    {
        $date = $request->date == 0 ? Date::now()->format('Y-m-d') : $request->date;
        $fdate = new Date(strtotime($date));
        $fdate = $fdate->format('l, j F Y');

        $payments = Payment::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->get();
        $sumP = Payment::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->sum('amount');

        $sales = Sale::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->where('credit', '0')->get();
        $sumS = Sale::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->where('credit', '0')->sum('total');

        $salesC = Sale::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->where('credit', '1')->get();
        $sumSC = Sale::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->where('credit', '1')->sum('total');

        $deposits = Deposit::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->get();
        $sumD = Deposit::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->sum('amount');

        $sumA= $sumP + $sumS + $sumSC + $sumD;
        $sum= $sumP + $sumS + $sumD;

        return view('admin.balance', compact('date', 'fdate', 'payments', 'sumP', 'sales', 'sumS', 'salesC', 'sumSC','deposits', 'sumD', 'sumA', 'sum'));
    }

    function indexMD()
    {
        $memberships = Membership::all();
        $discounts = Discount::all();

        return view('admin.indexMD', compact('memberships', 'discounts'));
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
