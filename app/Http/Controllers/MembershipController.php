<?php

namespace App\Http\Controllers;

use App\Membership;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

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
            'visits' => 'required',
            'months' => 'required',
            'amount' => 'required',
        ]);

        $membership = Membership::create($request->all());

        $type = $request->visits == 0 ? 'm' : 'v';
        $membership->update([
            'type' => "$type"
        ]);

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
            'visits' => 'required',
            'months' => 'required',
            'amount' => 'required',
        ]);
        Membership::find($request->id)->update($request->all());
        $type = $request->visits == 0 ? 'm' : 'v';
        Membership::find($request->id)->update([
            'type' => "$type"
        ]);

        return redirect(route('admin.indexMD'));
    }

    function destroy(Membership $membership)
    {
        $membership->update([
            'status' => 0
        ]);

        return redirect(route('admin.indexMD'));
    }
}
