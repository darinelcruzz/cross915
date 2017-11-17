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
        $instructions = <<<EOD

## Título o encabezado

Formato a las palabras:
_guiones bajos_, **asteriscos** o `comillas`.

Para hacer listas:

+ Utiliza el símbolo `+`
* O asteriscos
- O el signo `-`
EOD;

        return view('workouts.create', compact('instructions'));
    }

    function store(Request $request)
    {

    }

    function show(Workout $workout)
    {
        return view('workouts.show', compact('workout'));
    }

    function edit(Workout $workout)
    {
        $instructions = <<<EOD

## Título o encabezado

Formato a las palabras:
_guiones bajos_, **asteriscos** o `comillas`.

Para hacer listas:

+ Utiliza el símbolo `+`
* O asteriscos
- O el signo `-`
EOD;
        return view('workouts.edit', compact('workout', 'instructions'));
    }

    function update(Request $request, Workout $workout)
    {
        //
    }

    function destroy(Workout $workout)
    {
        //
    }
}
