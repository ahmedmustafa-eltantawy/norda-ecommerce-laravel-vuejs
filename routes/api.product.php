<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Product\ShopProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Products API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api.seller" middleware group. Enjoy building your API!
|
*/

Route::get( '/products/new-arrivals', [ ShopProductController::class, 'newArrivals' ] )->name('new-arrivals');
Route::get( '/products/best-seller', [ ShopProductController::class, 'bestSeller' ] )->name('best-seller');
Route::get( '/products/most-discounted', [ ShopProductController::class, 'mostDiscountedProuducts' ] )->name('most-discounted');
Route::get( '/shop/filter-products', [ ShopProductController::class, 'shopProductsFilteration' ] )->name('shop.filter-products');
