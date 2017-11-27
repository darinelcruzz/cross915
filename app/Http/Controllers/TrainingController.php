<?php

namespace App\Http\Controllers;

use App\Training;
use App\Coach;
use App\Workout;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $trainings = Training::all();
        return view('trainings.index', compact('trainings'));
    }

    public function create()
    {
        $coaches = Coach::pluck('name', 'id')->toArray();
        $workouts = Workout::pluck('name', 'id')->toArray();
        return view('trainings.create', compact('coaches', 'workouts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'coach_id' => 'required',
            'workout_id' => 'required'
        ]);

        Training::create($request->all());

        return redirect(route('trainings.index'));
    }

    public function show(Training $training)
    {
        //
    }

    public function edit(Training $training)
    {
        $coaches = Coach::pluck('name', 'id')->toArray();
        $workouts = Workout::pluck('name', 'id')->toArray();
        return view('trainings.edit', compact('training', 'coaches', 'workouts'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'coach_id' => 'required',
            'workout_id' => 'required'
        ]);

        $training = Training::find($request->id);

        $training->update($request->only(['coach_id', 'workout_id']));

        return redirect(route('trainings.index'));
    }

    public function destroy(Training $training)
    {
        //
    }
}
