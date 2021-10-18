<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::latest()->get();
        return response()->json($cat);
    }

    public function supplier(){
        $supplier = Supplier::latest()->get();
        return response()->json($supplier);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileupload = (new EssentialController)->fileupload($request , 'photo','uploads/product/');

        Product::create([
            'name' => $request -> name,
            'qty' => $request -> qty,
            'selling_price' => $request -> selling_price,
            'buying_price' => $request -> buying_price,
            'root' => $request -> root,
            'code' => $request -> code,
            'buying_date' => $request -> buying_date,
            'photo' => $fileupload,
            'supplier_id' => $request -> supplier_id,
            'category_id' => $request -> category_id,

        ]);


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
