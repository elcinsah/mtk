<?php

namespace App\Http\Controllers;

use App\Models\flat;
use App\Models\plaza;
use App\Models\rahatMtk;
use App\Models\User;


use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index(){
/*$mtk=rahatMtk::with("getMtk")->get();
$plaza = plaza::with('getPlaza')->get();
$flat=flat::with('getFlat')->get();*/
$user=User::with("flats")->where('id',1)->first();
//dd($user->name);
/*
foreach ($user->flats as $u){
   dd($u->plaza->mtk->name);

}
*/

       // $hit=newsModel::with('getHit')->orderByDesc('hit')->limit(5)->get();



    return view("admin.index");
   }




}
