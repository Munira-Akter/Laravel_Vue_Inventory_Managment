<?php
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
Route::get('/employee/{id}' , 'App\Http\Controllers\EmployeeContrller@editEmployee');
Route::patch('employee/update/{id}' , 'App\Http\Controllers\EmployeeContrller@update');


// Supplier Route
Route::apiResource('/supplier' , 'App\Http\Controllers\SupplierController');
Route::get('/supplier-edit/{id}' , 'App\Http\Controllers\SupplierController@editsupplier');
Route::post('/supplier/update/{id}' , 'App\Http\Controllers\SupplierController@supplierUpdate');


// Category Controller Route
Route::apiResource('/category' , 'App\Http\Controllers\CategoryController');


// Product Controller Route
Route::get('/suppliers' , 'App\Http\Controllers\ProductController@supplier');
Route::get('/products' , 'App\Http\Controllers\ProductController@all');
Route::apiResource('/product' , 'App\Http\Controllers\ProductController');