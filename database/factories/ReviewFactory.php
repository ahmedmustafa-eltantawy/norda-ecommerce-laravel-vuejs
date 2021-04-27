<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'review' => $this->faker->sentence(),
            'rate' => rand(1,5),
            'user_id' => User::whereHas( 'roles', function($query){
                $query->whereIn('name', ['buyer']);
            })->inRandomOrder()->pluck('id')->first(),
            'product_id' => Product::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
