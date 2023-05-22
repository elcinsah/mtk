<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RahatMtkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name=["kbt","akkord","serur","blue"];


        for ($i=0;$i<count($name);$i++){
            DB::table("rahat_mtks")->insert([

                'name'=>$name[$i],
            ]);
        }

    }
}
