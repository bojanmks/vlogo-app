<?php

namespace Database\Seeders;

use App\Models\Nav;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            NavSeeder::class,
            SocialSeeder::class,
            UserSeeder::class,
            RoleSeeder::class,
            FoodCategorySeeder::class,
            RestaurantSeeder::class,
            FoodSeeder::class
        ]);
    }
}
