<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $name = ["elcin", "kenan", "murad", "elxan"];
        $email = ["elcin@gmail.com", "kenan@gmail.com", "murad@gmail.com", "elxan@gmail.com"];
        $password = ["101010", "202020", "303030", "404040"];

        for ($i = 0; $i < count($name); $i++) {
            DB::table("users")->insert([
                'name' => $name[$i],
                'email' => $email[$i],
                'password' => bcrypt($password[$i]),


            ]);
        }
    }
}
