<?php

namespace App\Repositories\Product;

interface ProductRepositoryInterface
{
    public function GetNewArrivals(): object;

    public function GetBestSellerInCategory($category_name);

    public function GetLatestProuductsOnSales();
}
