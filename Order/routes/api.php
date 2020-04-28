<?php

use App\Http\Controllers\StatusController;
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

Route::get('/carts', 'CartController@show');
Route::get('/carts/all', 'CartController@show_all');
Route::get('/statuses', 'StatusController@show');
Route::get('/orders', 'OrderController@show');
Route::get('/total_orders', 'Total_OrderController@show_all');
Route::get('/total_orders/id', 'Total_OrderController@show_id');

//carts
Route::post('/carts/add', 'CartController@add');
Route::put('/carts/update', 'CartController@update_status');

//status
Route::post('/statuses/add', 'StatusController@add');
Route::put('/statuses/update', 'StatusController@update');

//order
Route::post('/orders/add', 'OrderController@add');

//total order
Route::post('/total_orders/add', 'Total_OrderController@add');
Route::post('/total_orders/remove', 'Total_OrderController@remove');
Route::put('/total_orders/update', 'Total_OrderController@update_status');
