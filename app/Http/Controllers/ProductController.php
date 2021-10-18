<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\EssentialController;

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

    public function all(){
        $all = Product::latest()->get();
        return response()->json($all);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $file = EssentialController::photoupdate($request,$request -> new_photo, 'uploads/product/', $request -> photo);

        $product -> name = $request -> name;
        $product -> code = $request -> code;
        $product -> root = $request -> root;
        $product -> buying_date = $request -> buying_date;
        $product -> buying_price = $request -> buying_price;
        $product -> selling_price = $request -> selling_price;
        $product -> qty = $request -> qty;
        $product -> photo = $file;
        $product -> supplier_id = $request -> supplier_id;
        $product -> category_id = $request -> category_id;
        $product->update();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        EssentialController::delete($product);
    }
}
