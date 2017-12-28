<?php

namespace App\Http\Controllers;

use App\Attendence;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

        $member = Member::find($request->member_id);
        $visits = $member->visits - 1;

        $member->update([
            'visits' => "$visits",
        ]);

        return redirect(route('attendences.show', [$request->member_id]));
    }

    public function show(Member $member)
    {
        $members = Member::pluck('name', 'id')->toArray();

        return view('attendences.show', compact('member', 'members'));
    }

    public function edit()
    {
        return view('attendences.photos');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'photo' => 'required',
        ]);

        if($request->img) {
            Storage::delete("photos/" . $request->photo . '.jpeg');
            $file = $request->img;
            $filename = $request->photo;
            $file->storeAs('public/photos', "$filename.jpeg");
        }

        return redirect(route('attendences.edit'));
    }

    public function destroy(Attendance $attendance)
    {
        //
    }
}
