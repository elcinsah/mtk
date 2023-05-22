<?php

namespace App\Http\Controllers;

use App\Http\Requests\plazaRequest;
use App\Models\plaza;
use App\Models\rahatMtk;
use Illuminate\Http\Request;

class PlazaController extends Controller
{
    public function plaza()
    {

        $plaza = plaza::with("mtk")->get();
        //dd($plaza);
        return view("admin.allplaza", compact("plaza"));

    }

    public function addPlaza()
    {
        $mtk = rahatMtk::all();

        return view("admin.addplaza", compact("mtk"));
    }

    public function creatPlaza(plazaRequest $req)
    {

        $plaza = new plaza();
        $plaza->name = $req->name;
        $plaza->address = $req->address;
        $plaza->rahatMtk_id = $req->mtk_id;
        $plaza->save();
        return redirect()->route("all.plaza");

    }

    public function plazaDel($id)
    {
        $delplaza=plaza::findOrFail($id)->delete();
        return redirect()->route("all.plaza");

    }
}
