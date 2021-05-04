<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'user_id' => $user_id,
            'product_id' => Product::inRandomOrder()->pluck('id')->first(),
            'invoice_id' => $invoice_id
        ];
    }
}
