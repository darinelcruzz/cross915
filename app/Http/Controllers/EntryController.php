<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Product;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    function index()
    {
        return view('entries.index')->with('entries', Entry::all());
    }

    function create(Product $product)
    {
        return view('entries.create', compact('product'));
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'ticket' => 'required',
            'unisize' => 'sometimes|required',
        ]);

        $product = Product::find($request->product_id);

        $entry = Entry::create([
            'date' => $request->date,
            'product_id' => $request->product_id,
            'new' => $this->getNewQuantity($request),
            'old' => $product->quantity,
            'user_id' => auth()->user()->id,
            'ticket' => $request->ticket,

        ]);

        $product->update($request->only(['unisize', 'xsmall', 'small', 'medium', 'large', 'xlarge']));

        return redirect(route('entries.index'));
    }

    function getNewQuantity($request)
    {
        if($request->small) {
            return serialize([
                'xs' => $request->xsmall,
                's' => $request->small,
                'm' => $request->medium,
                'l' => $request->large,
                'xl' => $request->xlarge,
            ]);
        }

        return strval($request->unisize);
    }
}
