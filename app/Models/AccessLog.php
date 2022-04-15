<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
    public function create($ip, $path, $method) {
        \DB::table("access_log")->insert([
            "ip" => $ip,
            "path" => $path,
            "method" => $method,
            "created_at" => now()
        ]);
    }

    public function getUniqueVisitors() {
        return \DB::table('access_log')
            ->distinct('ip')
            ->where('created_at', '>', now()->subDays(7)->toDateTimeString())
            ->count();
    }
}
