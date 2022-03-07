<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "username" => "korisnik1",
                "email" => "korisnik1@gmail.com",
                "password" => md5(env('USER_PASSWORD')),
                "role_id" => 1
            ],
            [
                "username" => "korisnik2",
                "email" => "korisnik2@gmail.com",
                "password" => md5(env('USER_PASSWORD')),
                "role_id" => 1
            ],
            [
                "username" => "admin1",
                "email" => "admin1@gmail.com",
                "password" => md5(env('ADMIN_PASSWORD')),
                "role_id" => 2
            ],
            [
                "username" => "admin2",
                "email" => "admin2@gmail.com",
                "password" => md5(env('ADMIN_PASSWORD')),
                "role_id" => 2
            ]
        ];

        foreach($users as $u) {
            $u["created_at"] = now();
            \DB::table("user")->insert($u);
        }
    }
}
