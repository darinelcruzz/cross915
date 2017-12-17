<?php

namespace App\Http\Controllers;

use App\Expense;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{

    function create()
    {
        $date = Date::now()->format('Y-m-d');
        $expenses = Expense::all();

        return view('expenses.create', compact('date', 'expenses'));
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'date' => 'required',
            'amount' => 'required',
        ]);

        Expense::create($request->all());

        return redirect(route('expenses.create'));
    }

    function edit(Expense $expense)
    {
        return view('expenses.edit', compact('expense'));
    }

    function update(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'date' => 'required',
            'amount' => 'required',
        ]);

        Expense::find($request->id)->update($request->all());

        return redirect(route('expense.create'));
    }

}
