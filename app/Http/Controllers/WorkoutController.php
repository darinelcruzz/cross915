<?php

namespace App\Http\Controllers;

use App\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    function index()
    {
        $workouts = Workout::all();
        return view('workouts.index', compact('workouts'));
    }

    function create()
    {
        return view('workouts.create', compact('instructions'));
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'duration' => 'required',
            'difficulty' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        Workout::create($request->all());

        return redirect(route('workouts.index'));
    }

    function show(Workout $workout)
    {
        return view('workouts.show', compact('workout'));
    }

    function edit(Workout $workout)
    {
        return view('workouts.edit', compact('workout', 'instructions'));
    }

    function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'duration' => 'required',
            'difficulty' => 'required',
            'description' => 'required',
            'type' => 'required',
        ]);

        $workout = Workout::find($request->id);

        $workout->update($request->except(['id']));

        return redirect(route('workouts.index'));
    }

    function destroy(Workout $workout)
    {
        //
    }
}
