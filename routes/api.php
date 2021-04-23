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

Route::get('/products', function () {
    return 'Lijst met alle producten:';

});

Route::post('/products', function () {
    //to do create new product

    return 'A new product has been made:';
});

Route::get('/products/{id}', function ($id) {
    return 'products ' . $id;
})->where('id', '[0-9]+');

Route::patch('/products/{id}', function ($id) {
    return 'Edit product ' . $id;
})->where('id', '[0-9]+');

Route::get('/search', 'ShopController@search')->name('search');
