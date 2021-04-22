<?php

namespace Database\Factories;

use App\Models\Sale;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sale::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customer_id = User::whereHas('roles' ,function($query){
            $query->whereIn('name', ['buyer']);
        })->inRandomOrder()->pluck('id')->first();

        return [
            'product_id' => Product::inRandomOrder()->pluck('id')->first(),
            'customer_id' => $customer_id,
        ];
    }
}
