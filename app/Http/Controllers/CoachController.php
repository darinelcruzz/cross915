<?php

namespace App\Http\Controllers;

use App\Coach;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CoachController extends Controller
{
    public function index()
    {
        $coaches = Coach::all();
        return view('coaches.index', compact('coaches'));
    }

    public function create()
    {
        return view('coaches.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'username' => 'required',
        ]);

        $coach = Coach::create($request->all());

        User::create([
            'name' => $coach->name,
            'email' => $coach->username,
            'password' => Hash::make($coach->birthdate),
            'level' => 2
        ]);

        return redirect(route('coaches.index'));
    }

    public function show(Coach $coach)
    {
        //
    }

    public function edit(Coach $coach)
    {
        return view('coaches.edit', compact('coach'));
    }

    public function update(Request $request, Coach $coach)
    {
        //
    }

    public function destroy(Coach $coach)
    {
        //
    }
}
