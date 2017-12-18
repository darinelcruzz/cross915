<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    function index()
    {
        // esta en AdminController@indexMD
    }

    function create()
    {
        return view('memberships.create');
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        Membership::create($request->all());

        return redirect(route('admin.indexMD'));
    }

    function show(Membership $membership)
    {
        //
    }

    function edit(Membership $membership)
    {
        return view('memberships.edit', compact('membership'));
    }

    function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);
        Membership::find($request->id)->update($request->all());

        return redirect(route('admin.indexMD'));
    }

    function destroy(Membership $membership)
    {
        $membership->update([
            'status' => 0
        ]);

        return redirect(route('memberships.index'));
    }
}
