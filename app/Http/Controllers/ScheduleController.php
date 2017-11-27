<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Coach;
use App\Workout;
use App\Training;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    function index()
    {
        $schedules = Schedule::all();
        $trainings = Training::all();
        return view('schedules.index', compact('schedules', 'trainings'));
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
        $coaches = Coach::pluck('name', 'id')->toArray();
        $workouts = Workout::pluck('name', 'id')->toArray();
        return view('schedules.edit', compact('schedule', 'coaches', 'workouts'));
    }

    function update(Request $request)
    {

    }

    function assign(Request $request)
    {
        $schedule = Schedule::find($request->id);
        $schedule->update($request->except(['id']));

        return redirect(route('schedules.index'));
    }

    function destroy(Schedule $schedule)
    {
        //
    }
}
