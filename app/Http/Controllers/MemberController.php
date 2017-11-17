<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Member;

class MemberController extends Controller
{
    function index()
    {
        $members = Member::all();
        return view('members.index', compact('members'));
    }

    function create()
    {
        $memberships = ['Mensual', 'Horas'];
        $schedules = ['06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00'];
        return view('members.create', compact('memberships', 'schedules'));
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'blood' => 'required'
        ]);

        $member = Member::create($request->all());

        User::create([
            'name' => $member->name,
            'email' => $member->id,
            'password' => Hash::make($member->birthdate),
            'level' => 3
        ]);

        return redirect(route('members.index'));
    }

    function show(Member $member)
    {
        return view('members.show', compact('member'));
    }

    function edit(Member $member)
    {
        $memberships = ['Mensual', 'Horas'];
        $schedules = ['06:00', '07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00'];
        return view('members.edit', compact('member', 'memberships', 'schedules'));
    }

    function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'blood' => 'required'
        ]);

        Member::find($request->id)->update($request->all());

        return redirect(route('members.index'));
    }

    function destroy($id)
    {
        //
    }
}
