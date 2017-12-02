<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Coach;
use App\Workout;
use App\Training;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    function index()
    {
        $schedules = Schedule::all();
        $trainings = Training::all();
        $coaches = Coach::all();

        $this->fillTrainings(date('W'), Training::first());

        return view('schedules.index', compact('schedules', 'trainings', 'coaches'));
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

    function fillTrainings($week, $training)
    {
        if($training->workout_id == 0) {
            $workouts = Workout::where('week', $week)->get();
            foreach ($workouts as $workout) {
                $date = Date::createFromFormat('Y-m-d', $workout->date);
                $trainings = Training::where('weekday', $date->format('D'))->get();
                foreach ($trainings as $training) {
                    $training->update(['workout_id' => $workout->id]);
                }
            }
            return;
        }

        if($week != $training->workout->week){
            $workouts = Workout::where('week', $week)->get();
            foreach ($workouts as $workout) {
                $date = Date::createFromFormat('Y-m-d', $workout->date);
                $trainings = Training::where('weekday', $date->format('D'))->get();
                foreach ($trainings as $training) {
                    $training->update(['workout_id' => $workout->id]);
                }
            }
            return;
        }


    }
}
