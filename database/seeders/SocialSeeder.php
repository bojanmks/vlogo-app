<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $socials = [
        [
            "icon" => "fab fa-facebook",
            "asset" => false,
            "href" => "https://www.facebook.com/bojan.maksimovic.908",
            "author" => false,
            "order" => 1
        ],
        [
            "icon" => "fab fa-instagram",
            "asset" => false,
            "href" => "https://www.instagram.com/bojanm___/",
            "author" => false,
            "order" => 2
        ],
        [
            "icon" => "fab fa-twitter",
            "asset" => false,
            "href" => "https://twitter.com/bojanm_",
            "author" => false,
            "order" => 3
        ],
        [
            "icon" => "fas fa-file-pdf",
            "asset" => true,
            "href" => "documentation.pdf",
            "author" => false,
            "order" => 4
        ],
        [
            "icon" => "fab fa-facebook-f",
            "asset" => false,
            "href" => "https://www.facebook.com/bojan.maksimovic.908",
            "author" => true,
            "order" => 1
        ],
        [
            "icon" => "fab fa-twitter",
            "asset" => false,
            "href" => "https://twitter.com/bojanm_",
            "author" => true,
            "order" => 2
        ],
        [
            "icon" => "fab fa-github",
            "asset" => false,
            "href" => "https://github.com/bojanmks",
            "author" => true,
            "order" => 3
        ],
        [
            "icon" => "fas fa-file-pdf",
            "asset" => true,
            "href" => "documentation.pdf",
            "author" => true,
            "order" => 4
        ]
    ];

    public function run()
    {
        \DB::table("social")->insert($this->socials);
    }
}
