<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Self_;

class Restaurant extends Model
{
    protected $perPage = 6;
    private $perPageFood = 8;
    private $perPageSearch = 5;

    public function getAll() {
        return \DB::table('restaurant')
            ->orderBy('name')
            ->get();
    }

    public function get($recommended = false) {
        $query = \DB::table("restaurant")
            ->orderBy("name")
            ->where('active', true);

        if($recommended)
            $query = $query->where("recommended", true);

        $restaurants = $query->get();

        foreach($restaurants as $r) {
            $this->getCategoriesForRestaurant($r);
        }

        return $restaurants;
    }

    public function find($id) {
        $query = \DB::table("restaurant as r")
            ->where("r.id", $id);

        $restaurant = $query->first();

        $this->getCategoriesForRestaurant($restaurant);

        return $restaurant;
    }

    private function getCategoriesForRestaurant($restaurant) {
        $restaurant->categories = \DB::table("food as f")
            ->join("food_category as fc", "f.category_id", "=", "fc.id")
            ->select(["fc.id", "fc.name"])
            ->where("f.restaurant_id", $restaurant->id)
            ->groupBy(["fc.id", "fc.name"])
            ->orderBy("fc.name", "asc")
            ->get();

        $restaurant->topCategories = \DB::table("food as f")
            ->join("food_category as fc", "f.category_id", "=", "fc.id")
            ->select(["fc.id", "fc.name"])
            ->where("f.restaurant_id", $restaurant->id)
            ->groupBy(["fc.id", "fc.name"])
            ->orderBy(\DB::raw("count(f.id)"), "desc")
            ->orderBy("fc.name", "asc")
            ->where("fc.listed", true)
            ->limit(3)
            ->get();
    }

    public function search($keyword) {
        return \DB::table("restaurant")
            ->where('name', 'LIKE', '%' . $keyword . '%')
            ->where('active', true)
            ->orderBy("name")
            ->paginate($this->perPageSearch);
    }

    public function getFiltered($keyword, $sortOrder, $categories) {
        $query = \DB::table("restaurant as r")
            ->leftJoin("food as f", "r.id", "=", "f.restaurant_id")
            ->where("r.name", "LIKE", "%" . $keyword . "%")
            ->where('r.active', true);

        if(count($categories))
            $query->whereIn("f.category_id", $categories);

        if($sortOrder == 'nameDesc')
            $query->orderBy("r.name", "desc");
        else
            $query->orderBy("r.name", "asc");

        $columns = ["r.id", "r.name", "r.image"];

        $restaurants =  $query->groupBy($columns)->select($columns)->paginate($this->perPage);

        foreach($restaurants as $r) {
            $this->getCategoriesForRestaurant($r);
        }

        return $restaurants;
    }

    public function filterFood($id, $keyword, $sortOrder, $categories) {
        $query = \DB::table("food as f")
            ->where("f.restaurant_id", $id)
            ->where("f.name", "LIKE", "%" . $keyword . "%");

        if(count($categories))
            $query->whereIn("f.category_id", $categories);

        if($sortOrder == 'nameDesc')
            $query->orderBy("f.name", "desc");
        else if($sortOrder == 'priceAsc')
            $query->orderBy("f.price", "asc");
        else if($sortOrder == 'priceDesc')
            $query->orderBy("f.price", "desc");
        else
            $query->orderBy("f.name", "asc");

        return $query->paginate($this->perPageFood);
    }

    public function insert($name, $imageName, $recommended, $active) {
        \DB::table('restaurant')->insert([
            'name' => $name,
            'image' => $imageName,
            'recommended' => $recommended,
            'active' => $active,
            'created_at' => now()
        ]);
    }

    public function myUpdate($id, $name, $recommended, $active, $imageName = null) {
        $valuesArray = [
            'name' => $name,
            'recommended' => $recommended,
            'active' => $active,
            'updated_at' => now()
        ];

        if($imageName != null)
            $valuesArray['image'] = $imageName;

        \DB::table('restaurant')
            ->where('id', $id)
            ->update($valuesArray);
    }

    public function myDelete($id) {
        \DB::table('restaurant')->delete($id);
    }
}
