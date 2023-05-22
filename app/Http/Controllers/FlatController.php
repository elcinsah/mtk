<?php

namespace App\Http\Controllers;

use App\Http\Requests\flatRequest;
use App\Models\flat;
use App\Models\plaza;
use App\Models\User;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    public function flat()
    {
        $flat = flat::with('plaza')->get();
//dd($flat);
        return view("admin.allflat", compact('flat'));

    }

    public function addFlat()
    {

        $user = User::select("id", "name")->get();
        $plaza = plaza::select("id", "name")->get();
//dd($plaza);
        return view("admin.addflat", compact("user", "plaza"));

    }




    public function createFlat(flatRequest $req)
    {
        $creat = new flat();
        $creat->flat_no = $req->flat_no;
        $creat->flat_flour = $req->flour;
        $creat->user_id = $req->useplaza;
        $creat->plaza_id = $req->plaza;



        $creat->save();
        return redirect()->route('all.flat');

    }
public function flatdel($id){

       $delflat=flat::find($id)->delete();

  return redirect()->route("all.flat");

}

}
