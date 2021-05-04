<?php

namespace App\Repositories\Product;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductFilterResource;
use App\Http\Resources\ProductFilterCollection;
use App\Http\Resources\ProductReviewsCollection;

class ProductRepository implements ProductRepositoryInterface
{
    public function GetNewArrivals(): object
    {
        $new_arrivals = Product::query()
                        ->withAvg('reviews', 'rate')
                        ->orderByDesc('created_at')
                        ->take(20)
                        ->get();

        return new ProductCollection($new_arrivals);
    }

    public function GetBestSellerInCategory()
    {
        $best_seller_in_category =  DB::table('products')
            ->join('sales', 'products.id', '=', 'sales.product_id')
            ->join('categorables', 'products.id', '=', 'categorables.categorable_id')
            ->join('product_reviews', 'products.id', '=', 'product_reviews.product_id')
            ->join('categories', function ($join){
                if( request()->catetogry_name ){
                    $join->on('categories.id', '=', 'categorables.category_id')
                    ->where('categories.name', 'LIKE', "%".request()->catetogry_name."%");
                }else{
                    $join->on('categories.id', '=', 'categorables.category_id');
                }
            })
            ->select('products.id',
                    'products.name',
                    'products.price',
                    'products.discounted_price',
                    \DB::raw('categories.name as category_name'),
                    \DB::raw('COUNT(*) as total_sales'),
                    \DB::raw('ceil(avg(product_reviews.rate)) as reviews_avg_rate'))
            ->groupBy('products.id', 'products.name', 'products.price','products.discounted_price', 'categories.name')
            ->orderByRaw('total_sales DESC , categories.name DESC')
            ->limit(8)
            ->get();

        return new ProductCollection($best_seller_in_category);
    }

    public function getMostDiscountedProducts()
    {
        $most_discounted_prouducts = Product::query()
                ->withAvg('reviews', 'rate')
                ->orderByRaw('price - discounted_price desc')
                ->take(3)
                ->get();

        return new ProductCollection($most_discounted_prouducts);
    }

    public function GetShopProductsWithFilteration()
    {
        return new ProductFilterCollection(Product::shopProductsFilteration());
    }

    public function getRelatedProducts($product_id)
    {
        $product = Product::findOrFail($product_id);

        $product_categories = $product->categories()->pluck('categories.id');

        $product = Product::query()
            ->withAvg('reviews', 'rate')
            ->with('categories')
            ->where( 'products.id', '!=', $product_id)
            ->whereHas( 'categories', function($query) use($product_categories){
                $query->whereIn( 'categories.id', $product_categories);
            })
            ->take(4)
            ->get();

        return new ProductCollection($product);
    }

    public function getProductReviews($product_id)
    {
        $product_reviews = Review::query()
                            ->where( 'product_id', $product_id )
                            ->with( 'user' )
                            ->orderByDesc('created_at')
                            ->paginate(8);

        return new ProductReviewsCollection($product_reviews);
    }
}
