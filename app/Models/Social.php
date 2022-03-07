<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    public function getSocials() {
        return \DB::table("social")->where("author", false)->orderBy("order")->get();;
    }

    public function getAuthorSocials() {
        return \DB::table("social")->where("author", true)->orderBy("order")->get();
    }
}
