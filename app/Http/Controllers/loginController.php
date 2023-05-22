<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function regester()
    {

        return view('regester');
    }

    public function createAcount(userRequest $req)
    {

        $regester = new User();
        $name = strip_tags(htmlspecialchars($req->name));
        $password = bcrypt(md5($req->name));
        $regester->name = $name;

        $regester->email = $req->email;
        $regester->password = $password;
        $regester->save();
        return redirect()->route('login.regester');

    }

    public function checkLogin(loginRequest $req)
    {
        $user = [
            'email' => $req->email,
            'password' => $req->pass,
        ];

        if (Auth::attempt($user)) {
            if (Auth::user()->role === 1) {
                return redirect()->route('admin.index');
            } elseif (Auth::user()->role === 0) {
                return redirect()->route('user.view');
            }

        } else {
            return redirect()->route('login.regester');

        }


    }
public function logout(){
   auth()->logout();
    return redirect()->route('login.regester');
}

}
