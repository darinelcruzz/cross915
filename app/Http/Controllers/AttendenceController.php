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

        return view('attendences.index', compact('date', 'fdate'));
    }

    public function create()
    {
        return view('attendences.create');
    }

    public function store(Request $request)
    {
        return redirect(route('expenses.show'));
    }

    public function show(Member $member)
    {
        return view('attendences.show', compact('member'));
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
