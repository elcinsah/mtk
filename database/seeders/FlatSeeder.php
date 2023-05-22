<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      $flat_flour=[5,8,8,2];
$flat_no=[155,106,55,85];
 $plaza_id=[1,2,2,3];
$user_id=[1,2,2,3];

 for ($i=0;$i<count($flat_no);$i++){
     DB::table("flats")->insert([
         'flat_flour'=>$flat_flour[$i],
         'flat_no'=>$flat_no[$i],
         'plaza_id'=>$plaza_id[$i],
'user_id'=>$user_id[$i],
     ]);
 }

    }
}
