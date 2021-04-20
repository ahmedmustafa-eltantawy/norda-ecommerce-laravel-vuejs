<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::inRandomOrder()->get()->map( function( $product , $key ){
            $product->categories()->sync(Category::inRandomOrder()->pluck('id')->first());
        });

    }
}
