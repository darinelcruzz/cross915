<?php

namespace App\Http\Controllers;

use App\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        // esta en AdminController@indexMD
    }

    public function create()
    {
        return view('discounts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        Discount::create($request->all());

        return redirect(route('admin.indexMD'));
    }

    public function show(Discount $discount)
    {
        //
    }

    public function edit(Discount $discount)
    {
        return view('discounts.edit', compact('discount'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        Discount::find($request->id)->update($request->all());

        return redirect(route('admin.indexMD'));
    }

    public function destroy(Discount $discount)
    {
        $discount->update([
            'status' => 0
        ]);

        return redirect(route('admin.indexMD'));
    }
}
