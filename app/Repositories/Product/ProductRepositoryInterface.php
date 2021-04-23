<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function GetNewArrivals(): object;

    public function GetBestSellerInCategory();

    public function getMostDiscountedProducts();
}
