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

Route::get('/', [ \App\Http\Controllers\Shop\ShopController::class, 'home' ])->name('shop.home');

Route::get('/shop', [ \App\Http\Controllers\Shop\ShopController::class, 'shop' ])->name('shop.main');

Route::get('/products/{id}', [ \App\Http\Controllers\Shop\ShopController::class, 'singleProduct' ])->name('shop.single-product');

Route::middleware(['auth'])->group(function () {

    // Buyer Routes
    Route::resource('/customer', \App\Http\Controllers\Customer\CustomerController::class)
    ->middleware(['is_customer']);

});


require __DIR__.'/auth.php';
