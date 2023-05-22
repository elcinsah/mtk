<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\flat;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        $users = User::with('flatUser')->get();
//dd($users);

        return view("admin.alluser", compact('users'));
    }

    public function addUser()
    {

        $flats = flat::all();
        return view("admin.adduser", compact('flats'));

    }

    public function creatUser(userRequest $req)
    {
        $user = new User();
        $user->role=$req->role;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->pass;
        $user->save();
        return redirect()->route("all.user");

    }

    public function delUser($id)
    {
        $deluser = User::findOrFail($id)->delete();
        return redirect()->route("all.user");

    }

}
