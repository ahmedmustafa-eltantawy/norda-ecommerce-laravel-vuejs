<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_id = User::whereHas('roles' ,function($query){
            $query->whereIn('name', ['buyer']);
        })->inRandomOrder()->pluck('id')->first();

        $current = Carbon::now()->subDays(rand(10,120));
        $created_at = $current->subMonth(rand(3,24));
        $created_at = $created_at->format('Y-m-d h:i:s');

        return [
            'id' => rand(10000,10000000),
            'user_id' => $user_id,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
