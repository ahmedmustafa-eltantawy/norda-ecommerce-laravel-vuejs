<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::get()
            ->map( function( $user , $key ){
            $user->roles()->attach(Role::query()->inRandomOrder()->pluck('id')->first());
        });
    }
}
