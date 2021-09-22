<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeContrller extends Controller
{
    //store Employee

    public function store (Request $request){
        return $request -> all;
    }

}