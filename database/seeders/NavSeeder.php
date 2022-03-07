<?php

namespace Database\Seeders;

use App\Models\Nav;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $navLinks = [
        [
            "name" => "Home",
            "route" => "home",
            "order" => 1,
            "admin" => 0
        ],
        [
            "name" => "Restaurants",
            "route" => "restaurants.index",
            "order" => 2,
            "admin" => 0
        ],
        [
            "name" => "Contact",
            "route" => "contact",
            "order" => 3,
            "admin" => 0
        ],
        [
            "name" => "Author",
            "route" => "author",
            "order" => 4,
            "admin" => 0
        ],
        [
            "name" => "Dashboard",
            "icon" => 'fas fa-tachometer-alt',
            "route" => "admin.dashboard",
            "order" => 1,
            "admin" => 1
        ],
        [
            "name" => "Actions",
            "icon" => 'fas fa-tasks',
            "route" => "admin.actions",
            "order" => 2,
            "admin" => 1
        ],
        [
            "name" => "Users",
            "icon" => 'fa fa-user',
            "route" => "admin.users.index",
            "order" => 3,
            "admin" => 1
        ],
        [
            "name" => "Restaurants",
            "icon" => 'fa fa-cutlery',
            "route" => "admin.restaurants",
            "order" => 4,
            "admin" => 1
        ],
        [
            "name" => "Food",
            "icon" => 'fa-solid fa-burger',
            "route" => "admin.food.index",
            "order" => 5,
            "admin" => 1
        ],
        [
            "name" => "Food Categories",
            "icon" => 'fas fa-pizza-slice',
            "route" => "admin.categories.index",
            "order" => 6,
            "admin" => 1
        ],
        [
            "name" => "Orders",
            "icon" => 'fas fa-shopping-cart',
            "route" => "admin.orders",
            "order" => 7,
            "admin" => 1
        ]
    ];

    public function run()
    {
        foreach($this->navLinks as $nl)
            \DB::table("nav")->insert($nl);
    }
}
