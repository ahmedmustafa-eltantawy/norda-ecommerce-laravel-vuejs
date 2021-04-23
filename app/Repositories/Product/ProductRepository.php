<?php

namespace App\Repositories\Product;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductFilterCollection;

class ProductRepository implements ProductRepositoryInterface
{
    public function GetNewArrivals(): object
    {
        $new_arrivals = Product::query()
                        ->orderByDesc('created_at')
                        ->paginate(20);

        return new ProductCollection($new_arrivals);
    }

    public function GetBestSellerInCategory()
    {
        $best_seller_in_category =  DB::table('products')
            ->join('sales', 'products.id', '=', 'sales.product_id')
            ->join('categorables', 'products.id', '=', 'categorables.categorable_id')
            ->join('categories', function ($join){
                if( request()->catetogry_name ){
                    $join->on('categories.id', '=', 'categorables.category_id')
                    ->where('categories.name', 'LIKE', "%".request()->catetogry_name."%");
                }else{
                    $join->on('categories.id', '=', 'categorables.category_id');
                }
            })
            ->select('products.id','products.name', 'products.price', \DB::raw('categories.name as category_name'), \DB::raw('COUNT(*) as total_sales') )
            ->groupBy('products.id', 'products.name', 'products.price', 'categories.name')
            ->orderByRaw('total_sales DESC , categories.name DESC')
            ->limit(8)
            ->get();

        return new ProductCollection($best_seller_in_category);
    }

    public function getMostDiscountedProducts()
    {
        $most_discounted_prouducts = Product::query()
                ->orderByRaw('price - discounted_price desc')
                ->take(3)
                ->get();

        return new ProductCollection($most_discounted_prouducts);
    }

    public function GetShopProductsWithFilteration()
    {
        return new ProductFilterCollection(Product::shopProductsFilteration());
    }
}
