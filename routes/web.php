<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\FlatController;
use \App\Http\Controllers\ClientController;
use \App\Http\Controllers\SaleController;

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

Route::resource('houses', \App\Http\Controllers\HouseController::class);
Route::resource('flats', \App\Http\Controllers\FlatController::class);
Route::resource('clients', \App\Http\Controllers\ClientController::class);
Route::resource('sales', \App\Http\Controllers\SaleController::class);
