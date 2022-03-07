<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function get() {
        return \DB::table('order as o')
            ->join('user as u', 'o.user_id', '=', 'u.id')
            ->join('order_detail as od', 'o.id', '=', 'od.order_id')
            ->join('food as f', 'od.food_id', '=', 'f.id')
            ->join('restaurant as r', 'f.restaurant_id', '=', 'r.id')
            ->groupBy(['o.id', 'o.address', 'u.username', 'r.name', 'o.created_at', 'o.updated_at'])
            ->select(['o.id', 'o.address', 'u.username', 'r.name as restaurant_name', 'o.created_at', 'o.updated_at', \DB::raw('SUM(od.price_at_the_time * od.amount) as total_price')])
            ->get();
    }

    public function store($userId, $address, $items) {
        $orderId = \DB::table('order')->insertGetId([
            'user_id' => $userId,
            'address' => $address,
            'created_at' => now()
        ]);

        $itemsToInsert = [];

        foreach($items as $i) {
            $itemsToInsert[] = [
                'order_id' => $orderId,
                'food_id' => $i->id,
                'price_at_the_time' => $i->price,
                'amount' => $i->amount,
                'created_at' => now()
            ];
        }

        \DB::table('order_detail')->insert($itemsToInsert);

        return $orderId;
    }

    public function getCount() {
        return \DB::table('order')
            ->count();
    }

    public function getTotalEarnings() {
        return \DB::table('order as o')
            ->join('order_detail as od', 'o.id', '=', 'od.order_id')
            ->sum(\DB::raw('od.price_at_the_time * od.amount'));
    }

    public function details($id) {
        return \DB::table('order_detail as od')
            ->join('food as f', 'od.food_id', '=', 'f.id')
            ->where('od.order_id', $id)
            ->get();
    }
}
