<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Http\Resources\ProductCollection;

class ProductRepository implements ProductRepositoryInterface
{
    public function GetNewArrivals(): object
    {
        $new_arrivals = Product::query()
                        ->orderByDesc('created_at')
                        ->paginate(20);

        return new ProductCollection($new_arrivals);
    }

    public function GetBestSellerInCategory($category_name)
    {
        return;
    }

    public function GetLatestProuductsOnSales()
    {
        return;
    }
}
