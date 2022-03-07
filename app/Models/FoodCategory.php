<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{
    public function get($onlyListed = false) {
        $query = \DB::table("food_category")->orderBy("name");

        if($onlyListed)
            $query->where("listed", true);

        return $query->get();
    }

    public function find($id) {
        return \DB::table('food_category')->find($id);
    }

    public function insert($name, $listed) {
        \DB::table('food_category')->insert([
            "name" => $name,
            "listed" => $listed,
            "created_at" => now()
        ]);
    }

    public function myUpdate($id, $name, $listed) {
        \DB::table('food_category')
            ->where('id', $id)
            ->update([
                "name" => $name,
                "listed" => $listed,
                "updated_at" => now()
            ]);
    }

    public function myDelete($id) {
        \DB::table('food_category')->delete($id);
    }
}
