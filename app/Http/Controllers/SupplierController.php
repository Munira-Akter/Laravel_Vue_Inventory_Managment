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
        $file_name = '';
        if($request->photo){
            //  GEt position index of ;
            $position = strpos($request->photo,';');
            // Get sub string from whole string with substr function
            $substr = substr($request->photo , 0 , $position);
            // Make string to array where / exixi then get 1 index value;
            $extention = explode('/', $substr)[1];

            // genatrate unique extention
            $unique_ex = md5(time().rand()). '.' . $extention;

            // Make image resize using image intervation
            $img= Image::make($request->photo)->resize(200,200);

            // Upload location get
            $location = 'uploads/supplier/';

            // genatrate image uploaded name
            $image_url = $location.$unique_ex;

            // upload photo in project folder
            $img->save($image_url);
            // Data Insert Into Database
        Supplier::create([
            'name'   =>  $request->name,
            'email'  =>  $request->email,
            'phone'  =>  $request->phone,
            'address' =>  $request->address,
            'shop' =>    $request->shop,
            'photo' =>  $file_name,
        ]);
        }else{
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
        if(file_exists($supplier_photo)){
            unlink($supplier -> photo);
            $supplier -> delete();
        }else{
            $supplier -> delete();
        }

        return false;

    }
}