<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id','desc') -> paginate();
        return view('products.index-products', compact('products'));
    }

    public function create()
    {
        return view('products.create-products');
    }

    public function store(Request $request)
    {
        $product = new Product();

        $product -> name = $request -> name;
        $product -> description = $request -> description;
        $product -> number = $request -> number;
        $product -> price = $request -> price;

        $product -> save();

        return redirect()-> route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($products)
    {
     $productDetail= Product::find($products);
     return view('products.show-products', compact('productDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product)
    {
        $editProduct = Product::find($product);
        return view('products.update-products', compact('editProduct'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product -> name = $request -> name;
        $product -> description = $request -> description;
        $product -> number = $request -> number;
        $product -> price = $request -> price;

        $product -> save();

        return redirect()-> route('product.show', $product -> id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($product)
    {
        $eliminate= Product::find($product);
        $eliminate -> delete();
        return redirect() -> route('product.index');
    }
    public function report($product)
    {
        $report= Product::find($product);
        $pdf = Pdf::loadView('products.report-products', compact('report'));
        return $pdf->stream('invoice.pdf');
    }
}
