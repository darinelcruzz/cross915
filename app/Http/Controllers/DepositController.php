<?php

namespace App\Http\Controllers;

use App\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required'
        ]);

        Deposit::create($request->all());

        return back();
    }

    public function show(Deposit $deposit)
    {
        //
    }

    public function edit(Deposit $deposit)
    {
        //
    }

    public function update(Request $request, Deposit $deposit)
    {
        //
    }

    public function destroy(Deposit $deposit)
    {
        //
    }
}
