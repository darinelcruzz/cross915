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
            'code' => 'required|unique:products',
            'unisize' => 'sometimes|required',
            'xsmall' => 'sometimes|required',
            'small' => 'sometimes|required',
            'medium' => 'sometimes|required',
            'large' => 'sometimes|required',
            'xlarge' => 'sometimes|required',
            'public' => 'required',
            'price' => 'required',
        ]);

        $product = Product::create($request->except(['img', 'sizes']));

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
        return view('products.edit', compact('product'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'code' => 'required',
            'public' => 'required',
            'price' => 'required',
        ]);

        Product::find($request->id)->update($request->all());

        return redirect(route('products.index'));
    }

    public function destroy(Product $product)
    {
        //
    }
}
