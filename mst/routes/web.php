<?php

use App\Http\Controllers\Product;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Product 


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



Route::post('/afficher',[Product::class,'afficher']){
    return views 'productview' ;
}



