<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use App\Member;
use App\Membership;
use App\Discount;


class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    public function create($member)
    {
        $members = Member::pluck('name', 'id')->toArray();
        $discounts = Discount::where('status', '1')->pluck('name', 'id')->toArray();
        $memberships = Membership::where('status', '1')->pluck('name', 'id')->toArray();
        $date = Date::now()->format('Y-m-d');
        return view('payments.create', compact('members', 'memberships', 'discounts','date', 'member'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'member_id' => 'required',
            'membership_id' => 'required',
        ]);

        $payment = Payment::create($request->all());

        $membership = Membership::find($request->membership_id);
        $member = Member::find($request->member_id);
        $validity = new Date(strtotime($payment->date_start));
        $validity->add($membership->months . 'month')->format('Y-m-d');

        $member->update([
            'visits' => $membership->visits,
            'payment' => $payment->date_start,
            'membership_id' => $payment->membership_id,
            'validity' => $validity,
        ]);

        return redirect(route('payments.index'));
    }

    public function show(Payment $payment)
    {
        //
    }

    public function edit(Payment $payment)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Payment $payment)
    {
        //
    }
}
