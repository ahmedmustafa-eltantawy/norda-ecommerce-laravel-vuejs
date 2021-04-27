<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Product\ShopProductController;
use App\Http\Controllers\Api\Product\ProductReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Products API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get( '/products/new-arrivals', [ ShopProductController::class, 'newArrivals' ] )->name('new-arrivals');
Route::get( '/products/best-seller', [ ShopProductController::class, 'bestSeller' ] )->name('best-seller');
Route::get( '/products/most-discounted', [ ShopProductController::class, 'mostDiscountedProuducts' ] )->name('most-discounted');
Route::get( '/shop/filter-products', [ ShopProductController::class, 'shopProductsFilteration' ] )->name('shop.filter-products');
Route::get( '/products/{product}', [ ShopProductController::class, 'singleProduct' ] )->name('single-product');
Route::get( '/products/{product}/related-products', [ ShopProductController::class, 'relatedProducts' ] )->name('related-products');
Route::get( '/products/{product}/review', [ ProductReviewController::class, 'show' ] )->name('product-review');
