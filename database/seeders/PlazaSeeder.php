<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlazaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


$name=["xetairez","nermanovrez","ecemirez","genclikrez"];
$address=["xetai","nermanov","ecemi","genclik"];
$mtk_id=[1,2,3,4];
for ($i=0;$i<count($address);$i++){
    DB::table('plazas')->insert([
        'name'=>$name[$i],
        'address'=>$address[$i],
        'rahatMtk_id'=>$mtk_id[$i],
    ]);
}




    }
}
