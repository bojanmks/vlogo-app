<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $foodCategories = [
        [
            "name" => "Pizza",
            "listed" => true
        ],
        [
            "name" => "Burgers",
            "listed" => true
        ],
        [
            "name" => "Sides",
            "listed" => false
        ],
        [
            "name" => "Desserts",
            "listed" => true
        ],
        [
            "name" => "Coffee",
            "listed" => true
        ],
        [
            "name" => "Chicken",
            "listed" => true
        ],
        [
            "name" => "Mexican",
            "listed" => true
        ],
        [
            "name" => "Combos",
            "listed" => false
        ],
        [
            "name" => "Breakfast",
            "listed" => true
        ],
        [
            "name" => "Beverages",
            "listed" => false
        ],
        [
            "name" => "Sandwiches",
            "listed" => true
        ],
        [
            "name" => "Salads",
            "listed" => true
        ],
        [
            "name" => "Wraps",
            "listed" => true
        ],
        [
            "name" => "Extras",
            "listed" => false
        ],
        [
            "name" => "Pasta",
            "listed" => true
        ]
    ];

    public function run()
    {
        foreach($this->foodCategories as $fc) {
            $fc["created_at"] = now();
            \DB::table("food_category")->insert($fc);
        }
    }
}
