<?php

namespace App\Http\Controllers;

use App\Attendence;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Member;

class AttendenceController extends Controller
{

    public function index(Request $request)
    {
        $date = $request->date == 0 ? Date::now()->format('Y-m-d') : $request->date;
        $fdate = new Date(strtotime($date));
        $fdate = $fdate->format('l, j F Y');

        $attendences = Attendence::whereBetween('created_at', [$date . ' 00:00:00', $date . ' 23:59:59'])->get();

        return view('attendences.index', compact('date', 'fdate', 'attendences'));
    }

    public function create()
    {
        $members = Member::pluck('name', 'id')->toArray();

        return view('attendences.create', compact('members'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'member_id' => 'required',
        ]);

        Attendence::create($request->all());

        return redirect(route('attendences.show', [$request->member_id]));
    }

    public function show(Member $member)
    {
        $members = Member::pluck('name', 'id')->toArray();

        return view('attendences.show', compact('member', 'members'));
    }

    public function edit(Attendance $attendance)
    {
        //
    }

    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    public function destroy(Attendance $attendance)
    {
        //
    }
}
