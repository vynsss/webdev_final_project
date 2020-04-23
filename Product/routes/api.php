<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get method
Route::get('/products', 'ProductController@show');
Route::get('/categories', 'CategoryController@show');
Route::get('/statuses', 'StatusController@show');

//product controller
Route::post('/products/category', 'ProductController@show_category');
Route::post('/products/create', 'ProductController@insert');
Route::put('/products/update', 'ProductController@update');

//category controller
Route::post('/categories/create', 'CategoryController@insert');
Route::delete('/categories/delete', 'CategoryController@delete');

//status controller
