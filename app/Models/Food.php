<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function get() {
        return \DB::table('food as f')
            ->join('food_category as fc', 'f.category_id', '=', 'fc.id')
            ->join('restaurant as r', 'f.restaurant_id', '=', 'r.id')
            ->orderBy('f.name')
            ->select(['f.*', 'fc.name as category_name', 'r.name as restaurant_name'])
            ->get();
    }

    public function find($id) {
        return \DB::table('food')->find($id);
    }

    public function insert($name, $image, $restaurant, $category, $price) {
        \DB::table('food')->insert([
            'name' => $name,
            'image' => $image,
            'restaurant_id' => $restaurant,
            'category_id' => $category,
            'price' => $price,
            'created_at' => now()
        ]);
    }

    public function myUpdate($id, $name, $restaurant, $category, $price, $image = null) {
        $valuesArray = [
            'name' => $name,
            'restaurant_id' => $restaurant,
            'category_id' => $category,
            'price' => $price,
            'updated_at' => now()
        ];

        if($image != null)
            $valuesArray['image'] = $image;

        \DB::table('food')
            ->where('id', $id)
            ->update($valuesArray);
    }

    public function myDelete($id) {
        \DB::table('food')->delete($id);
    }
}
