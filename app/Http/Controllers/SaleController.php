<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Product;
use App\Member;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    function index()
    {
        $sales = Sale::all();
        return view('sales.index', compact('sales'));
    }

    function create()
    {
        $products = Product::all();
        $members = Member::pluck('name', 'id');
        return view('sales.create', compact('products', 'members'));
    }

    function store(Request $request)
    {
        $this->validate($request, [
            'client' => 'required'
        ]);

        $sale = Sale::create($request->only(['client', 'total']));
        $products = $request->products;
        $quantities = $request->quantities;
        $amounts = $request->amounts;
        $sizes = $request->sizes;

        for ($i=1; $i <= count($products); $i++) {
            $product = Product::find($products[$i - 1]);

            if(!$product) {
                continue;
            }

            if ($sizes[$i - 1] == 'unisize') {
                $stock = $product->unisize - $quantities[$i - 1];
                $product->update([
                    'unisize' => $stock
                ]);
            } else {
                $before = $product->{$sizes[$i - 1]};
                $product->update([
                    "{$sizes[$i - 1]}" => $before - $quantities[$i - 1]
                ]);
            }

            $sale->update([
                "p$i" => $products[$i - 1],
                "q$i" => $quantities[$i - 1],
                "a$i" => $amounts[$i - 1],
            ]);
        }

        return redirect(route('sales.index'));
    }

    function show(Sale $sale)
    {
        //
    }

    function edit(Sale $sale)
    {
        //
    }

    function update(Request $request, Sale $sale)
    {
        //
    }

    function destroy(Sale $sale)
    {
        //
    }
}
