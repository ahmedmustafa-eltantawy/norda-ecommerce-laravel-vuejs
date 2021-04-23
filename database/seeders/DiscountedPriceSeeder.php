<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DiscountedPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::inRandomOrder()->get()->map(function ( $product, $key ){
            $product->update( [
                'discounted_price' => floor($product->price / rand(1,3))
            ] );
        });
    }
}
