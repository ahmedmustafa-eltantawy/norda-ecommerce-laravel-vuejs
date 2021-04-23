<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            UserRolesSeeder::class,
            ProductSeeder::class,
            DiscountedPriceSeeder::class,
            CategorySeeder::class,
            CategorableSeeder::class
        ]);

    }
}
