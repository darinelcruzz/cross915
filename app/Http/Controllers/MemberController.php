<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Storage;
use App\Member;
use App\User;
use App\Attendence;
use App\Membership;
use App\Payment;

class MemberController extends Controller
{
    function index()
    {
        $membersA = Member::where('status','1')->get();
        $membersC = Member::where('status','0')->get();
        return view('members.index', compact('membersA', 'membersC'));
    }

    function create()
    {
        $date = Date::now()->format('Y-m-d');
        $memberships = Membership::where('status','1')->pluck('name', 'id')->toArray();
        $schedules = ['07:00' => '07:00', '08:00' => '08:00', '09:00' => '09:00', '17:00' => '17:00',
            '18:00' => '18:00', '19:00' => '19:00', '20:00' => '20:00'];
        return view('members.create', compact('memberships', 'schedules', 'date'));
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'blood' => 'required',
            'schedule_id' => 'required',
            'membership_id' => 'required',
        ]);

        $member = Member::create($request->except(['img']));

        User::create([
            'name' => $member->name,
            'email' => $member->id,
            'password' => Hash::make($member->birthdate),
            'level' => 3
        ]);

        $membership = Membership::find($request->membership_id);
        $validity = new Date(strtotime($member->payment));
        $validity->add($membership->months . 'month')->format('Y-m-d');

        Payment::create([
            'member_id' => $member->id,
            'membership_id' => $member->membership_id,
            'amount' => "$membership->amount",
        ]);

        $member->update([
            'visits' => "$membership->visits",
            'validity' => "$validity",
        ]);

        if($request->img) {
            $file = $request->img;
            $filename = $member->id;
            $ext = $file->extension();
            $file->storeAs('public/members', "$filename.$ext");

            $member->update([
                'img' => "$filename.$ext"
            ]);
        }

        return redirect(route('members.index'));
    }

    function show(Member $member)
    {
        $attendences = Attendence::where('member_id', $member->id )->get();

        return view('members.show', compact('member','attendences'));
    }

    function edit(Member $member)
    {
        $memberships = Membership::where('status','1')->pluck('name', 'id')->toArray();
        $schedules = ['07:00' => '07:00', '08:00' => '08:00', '09:00' => '09:00', '17:00' => '17:00',
            '18:00' => '18:00', '19:00' => '19:00', '20:00' => '20:00'];
        return view('members.edit', compact('member', 'memberships', 'schedules'));
    }

    function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'sometimes|required',
            'birthdate' => 'sometimes|required',
            'gender' => 'sometimes|required',
            'blood' => 'sometimes|required',
            'schedule_id' => 'sometimes|required',
            'comments' => 'sometimes|required',
        ]);

        $member = Member::find($request->id);
        $member->update($request->except(['img']));

        if ($request->comments) {
            return redirect(route('members.show', ['id' => $request->id]));
        }

        if($request->img) {
            Storage::delete("members/" . $member->img);
            $file = $request->img;
            $filename = $member->id;
            $ext = $file->extension();
            $file->storeAs('public/members', "$filename.$ext");

            $member->update([
                'img' => "$filename.$ext"
            ]);
        }

        return redirect(route('members.index'));
    }

    function destroy(Member $member)
    {
        $member->update([
            'status' => 0
        ]);

        return redirect(route('members.index'));
    }
}
