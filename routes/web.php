<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WarehouseController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user', [ProductController::class, 'show']);

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

// products

Route::get('/products', [ProductController::class, 'show'])->middleware(['auth']);

Route::get('/product/{ean}', [ProductController::class, 'one'])->name('product.one');

Route::get('/product/{ean}/history', [ProductController::class, 'stockHistory']);

Route::get('/product/{ean}/edit', [ProductController::class, 'edit']);

Route::get('/product/{ean}/images', [ProductController::class, 'images']);

Route::get('/product/{ean}/warehouses', [ProductController::class, 'warehouses']);

Route::post('/product/{ean}/tag/{tagId}', [ProductController::class, 'addTagToProduct']);

Route::post('/search', [ProductController::class, 'search']);

// warehouses

Route::get('/warehouses', [WarehouseController::class, 'show']);

Route::get('/warehouses/{id}', [WarehouseController::class, 'one'])->name('warehouses.one');

Route::get('/warehouses/{id}/products', [WarehouseController::class, 'products']);

// file upload

Route::view('/file-upload/{ean}', 'upload');

Route::post('/file-upload/{ean}', [GeneralController::class, 'store'])->name('image.store');

Route::get('/orders', [OrderController::class, 'show']);

Route::get('/order/{order_id}', [OrderController::class, 'one'])->name('order.one');

require __DIR__ . '/auth.php';
