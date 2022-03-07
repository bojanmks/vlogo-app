<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $restaurants = [
        [
            "name" => "McDonald's",
            "image" => "mcdonalds.jpg",
            "recommended" => true
        ],
        [
            "name" => "KFC",
            "image" => "kfc.jpg",
            "recommended" => true
        ],
        [
            "name" => "Domino's Pizza",
            "image" => "dominos.jpg",
            "recommended" => true
        ],
        [
            "name" => "Subway",
            "image" => "subway.jpg",
            "recommended" => true
        ],
        [
            "name" => "Chick-Fil-A",
            "image" => "chick_fil_a.jpg",
            "recommended" => true
        ],
        [
            "name" => "Papa John's",
            "image" => "papa_johns.jpg",
            "recommended" => true
        ],
        [
            "name" => "Dunkin Donut's",
            "image" => "dunkin_donuts.jpg",
            "recommended" => false
        ],
        [
            "name" => "Starbucks",
            "image" => "starbucks.jpg",
            "recommended" => false
        ],
        [
            "name" => "Chipotle",
            "image" => "chipotle.jpg",
            "recommended" => false
        ],
        [
            "name" => "Little Caesars",
            "image" => "little_caesars.jpg",
            "recommended" => false
        ]
    ];

    public function run()
    {
        foreach($this->restaurants as $r) {
            $r["created_at"] = now();
            \DB::table("restaurant")->insert($r);
        }
    }
}
