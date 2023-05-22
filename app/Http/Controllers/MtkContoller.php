<?php

namespace App\Http\Controllers;

use App\Http\Requests\mtkRequest;
use App\Models\flat;
use App\Models\rahatMtk;
use Illuminate\Http\Request;

class MtkContoller extends Controller
{
    public function mtk()
    {
        $mtk = rahatMtk::all();

        return view("admin.allmtk", compact("mtk"));
    }

    public function addMtk()
    {

        return view("admin.addmtk");
    }

    public function creatMtk(mtkRequest $req)
    {


        $mtkname = new rahatMtk();
        $mtkname->name = $req->name;
        $mtkname->save();
        return redirect()->route('all.mtk');

    }
    public function del($id){
        $delmtk=rahatMtk::find($id)->delete();
        return redirect()->route('all.mtk');


    }

    public function delHard($id){

        $teamdel= rahatMtk::onlyTrashed()->find($id);


        $teamdel->forceDelete();

        return redirect()->back();

    }



}
