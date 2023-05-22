<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        $name = ["Admin", "User", "murad", "elxan"];
        $email = ["admin@gmail.com", "user@gmail.com", "murad@gmail.com", "elxan@gmail.com"];
        $role = [1, 0, 0, 0];
        for ($i = 0; $i < count($name); $i++) {
            DB::table("users")->insert([
                'name' => $name[$i],
                'email' => $email[$i],
                'password' => bcrypt('123456'),
                'role' => $role[$i]
            ]);
        }
    }
}
