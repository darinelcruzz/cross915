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
        //
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
