<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function get() {
        return \DB::table("user as u")
            ->join("role as r", "u.role_id", "=", "r.id")
            ->select("u.*", "r.name as role_name")
            ->get();
    }

    public function find($id) {
        return \DB::table('user')->find($id);
    }

    public function where($column, $operator, $value, $multiple = false) {
        $query = \DB::table("user as u")->join("role as r", "u.role_id", "=", "r.id")->where("u." . $column, $operator, $value)->select("u.*", "r.name as role_name");

        if($multiple)
            return $query->get();

        return $query->first();
    }

    public function insert($username, $email, $password, $role) {
        return \DB::table("user")->insertGetId([
            "username" => $username,
            "email" => $email,
            "password" => md5($password),
            "role_id" => $role,
            "created_at" => now()
        ]);
    }

    public function myUpdate($id, $username, $email, $password, $role) {
        $valuesArray = [
            'username' => $username,
            'email' => $email,
            'role_id' => $role,
            'updated_at' => now()
        ];

        if($password != '')
            $valuesArray['password'] = md5($password);

        \DB::table('user')
            ->where('id', $id)
            ->update($valuesArray);
    }

    public function myDelete($id) {
        \DB::table('user')->delete($id);
    }
}
