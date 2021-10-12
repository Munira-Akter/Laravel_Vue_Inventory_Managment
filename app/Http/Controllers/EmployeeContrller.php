<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rules\Unique;

class EmployeeContrller extends Controller
{
    // index function for all data show
    public function index(){
        $employee = Employee::latest()->get();
        return response()->json($employee);
    }
    //store Employee

    public function store (Request $request){
        $request -> validate([
            'name'  => 'required',
            'email' => 'required|email|unique:employees',
            'phone' => 'required|unique:employees',
            'password' => 'required|min:3|max:6|confirmed',
            'salary' => 'required',
            'role' => 'required',
            'photo' => 'required',

           ]);

           $image_url = '';
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
                $location = 'uploads/employee/';

                // genatrate image uploaded name
                $image_url = $location.$unique_ex;

                // upload photo in project folder
                $img->save($image_url);

                Employee::create([
                    'name'   =>  $request->name,
                    'email'  =>  $request->email,
                    'phone'  =>  $request->phone,
                    'salary' =>  $request->salary,
                    'password' => Hash::make($request->password),
                    'role' =>  $request->role,
                    'photo' =>  $image_url,

                ]);


           }else{
                Employee::create([
                'name'   =>  $request->name,
                'email'  =>  $request->email,
                'phone'  =>  $request->phone,
                'salary' =>  $request->salary,
                'password' => Hash::make($request->password),
                'role' =>  $request->role,
                'photo' =>  $image_url,

            ]);

           }




    }

    // Selete Data from database
      public function delete($id){
        $employee = Employee::find($id)->first();
        $photo  = $employee -> photo;
        if($photo){
            unlink($photo);
            $employee -> delete();
        }else{
            $employee -> delete();
        }
    }

     // erturn Single user Data
     public function editEmployee($id){
        $edit_employee = Employee::where('id' , $id)->first();
        return response()->json($edit_employee);
    }

     // erturn Single user Data
     public function update(Request $request,$id){
         $user = Employee::where('id' , $id)->first();
         $request -> validate([
            'name'  =>  'required',
            'email' =>   ['required', 'email', Rule::unique('employees')->ignore($user)],
            'phone' =>   ['required', Rule::unique('employees')->ignore($user)],
            'salary' => 'required',
            'role' =>   'required',
            'photo' =>   'required',

           ]);


         if ($request->new_photo) {
             $file = $request->new_photo;
             $position = strpos($file, ';');
             $substr = substr($file, 0, $position);
             $arr = explode('/', $substr)[1];
             $unique = md5(time().rand()) . '.' . $arr;
             $location = 'uploads/employee/';
             $img= Image::make($file)->resize(200, 200);
             $im_url = $location.$unique;
             unlink($user -> photo);
             $img->save($im_url);
         }else{
             $im_url =  $user -> photo;
         }


         $user -> name = $request -> name;
         $user -> email = $request -> email;
         $user -> phone = $request -> phone;
         $user -> role = $request -> role;
         $user -> salary = $request -> salary;
         $user -> photo = $im_url;
         $user -> update();
         return true;
     }

}
