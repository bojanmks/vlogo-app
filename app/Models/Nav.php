<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nav extends Model
{
    public static function getClientNav() {
        return \DB::table("nav")->where("admin", false)->orderBy("order")->get();
    }

    public static function getAdminNav() {
        return \DB::table("nav")->where("admin", true)->orderBy("order")->get();
    }
}
