<?php

namespace App\Http\Controllers;

use App\Training;
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
        return view('trainings.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Training $training)
    {
        //
    }

    public function edit(Training $training)
    {
        return view('trainings.create', compact('training'));
    }

    public function update(Request $request, Training $training)
    {
        //
    }

    public function destroy(Training $training)
    {
        //
    }
}
