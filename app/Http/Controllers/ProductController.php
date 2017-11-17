<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::All();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        ]);

        $product = Product::create($request->except(['img']));

        $file = $request->img;
        $filename = $request->code;
        $ext = $file->extension();
        $file->storeAs('public/products', "$filename.$ext");

        $product->update([
            'img' => Storage::url("products/$filename.$ext")
        ]);


        return redirect(route('products.index'));
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
