<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

// Employee ROute
Route::post('create' , 'App\Http\Controllers\EmployeeContrller@store');
Route::get('employee' , 'App\Http\Controllers\EmployeeContrller@index');
Route::delete('employee/delete/{id}' , 'App\Http\Controllers\EmployeeContrller@delete');
Route::get('/employeeedit/{id}' , 'App\Http\Controllers\EmployeeContrller@edit');
Route::patch('employee/update/{id}' , 'App\Http\Controllers\EmployeeContrller@update');


// Supplier Route
Route::apiResource('/supplier' , 'App\Http\Controllers\SupplierController');