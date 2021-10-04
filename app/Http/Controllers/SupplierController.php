<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'shop' => 'required',
            'email' => 'email|unique:suppliers',
            'phone' => 'required||unique:suppliers',

        ]);

        // File Upload function

        if($request->photo){
            $file = $request->photo;
            $pos = strpos($file, ';');
            $sub = substr($file , 0 , $pos);
            $extension = explode('/',$sub)[0];
            $unique = md5(time().rand()). '.' . $extension;
            $location = 'uploads/supplier';
            $file_img = Image::make($file)->resize(200,200);
            $file_name = $location.$unique;
            $file_img->save($location);
        }else{
            $file_name = '';
        }


        // Data Insert Into Database
        Supplier::create([
            'name'   =>  $request->name,
            'email'  =>  $request->email,
            'phone'  =>  $request->phone,
            'address' =>  $request->address,
            'shop' =>    $request->shop,
            'photo' =>  $file_name,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        return response()->json($supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        return response()->json($supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier_photo =$supplier -> photo;

        $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'shop' => 'required',
            'email' => ['email' , Rule::unique('suppliers')->ignore($supplier)],
            'phone' => 'required||unique:suppliers',

        ]);

         // File Upload function

         if($request->new_photo){
            $file = $request->new_photo;
            $pos = strpos($file, ';');
            $sub = substr($file , 0 , $pos);
            $extension = explode('/',$sub)[0];
            $unique = md5(time().rand()). '.' . $extension;
            $location = 'uploads/supplier';
            $file_img = Image::make($file)->resize(200,200);
            $file_name = $location.$unique;
            $file_img->save($location);
            unlink($supplier_photo);
        }else{
            $file_name = $request->photo;
        }

        $supplier -> name = $request -> name;
        $supplier-> email = $request -> email;
        $supplier -> phone = $request -> phone;
        $supplier-> address = $request -> address;
        $supplier-> shop = $request -> shop;
        $supplier -> photo = $file_name;

        $supplier -> update();





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        $supplier_photo = $supplier -> photo;
        if($supplier_photo){
            unlink($supplier_photo);
            $supplier -> delete();
        }else{
            $supplier -> delete();
        }

    }
}
