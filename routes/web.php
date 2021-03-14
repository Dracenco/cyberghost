<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('primary/{voucher?}', 'App\Http\Controllers\SubscriptionController@index');
Route::get('secondary/{voucher?}', 'App\Http\Controllers\SubscriptionController@index');
Route::get('pricelist', 'App\Http\Controllers\SubscriptionController@showPrices');
