<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Invoice\InvoicesController;
use App\Http\Controllers\Api\Category\CategoryController;

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

Route::get('/categories', [ CategoryController::class, 'index' ] )->name('categories.list');

Route::middleware('auth:api')->group( function(){
    Route::get('customer/invoices',[ InvoicesController::class, 'index' ] )->name('invoices.list');
});
