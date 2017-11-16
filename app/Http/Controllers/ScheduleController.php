<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    function index()
    {
        $schedules = Schedule::all();
        return view('schedules.index', compact('schedules'));
    }

    function create()
    {
        return view('schedules.create');
    }

    function store(Request $request)
    {

    }

    function show(Schedule $schedule)
    {
        //
    }

    function edit(Schedule $schedule)
    {
        return view('schedules.edit', compact('schedule'));
    }

    function update(Request $request, Schedule $schedule)
    {
        //
    }

    function destroy(Schedule $schedule)
    {
        //
    }
}
