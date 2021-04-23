<?php

namespace App\Http\Controllers\Api\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\Api\ApiResponseGenrator;
use App\Http\Resources\ProductCollection;
use App\Repositories\Product\ProductRepository;

class ShopProductController extends Controller
{
    use ApiResponseGenrator;

    public function newArrivals()
    {
        return ( new ProductRepository )->GetNewArrivals();
    }

    public function bestSeller()
    {
        return ( new ProductRepository )->GetBestSellerInCategory();
    }

    public function mostDiscountedProuducts()
    {
        return ( new ProductRepository )->GetMostDiscountedProducts();
    }

    public function shopProductsFilteration()
    {
        return ( new ProductRepository )->GetShopProductsWithFilteration();
    }
}
