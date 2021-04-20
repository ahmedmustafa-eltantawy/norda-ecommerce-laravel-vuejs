<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::whereHas('roles' ,function($query){
            $query->whereIn('name', ['seller']);
        })->inRandomOrder()->pluck('id')->first();

        return [
            'name' => $this->faker->name,
            'owner_id' => $user_id,
            'description' => $this->faker->sentence($nbWords = 16, $variableNbWords = true),
            'colors' => $this->faker->randomElement([ 'blue,symon', 'red,yellow', 'blue,symon,red,yellow' ]),
            'sizes' => $this->faker->randomElement([ 'xl,lg,md', 'xl,lg', 'xl,md', 'lg,md' ]),
            'price' => rand(100,500),
            'stock_q' => rand(50,100),
        ];
    }
}
