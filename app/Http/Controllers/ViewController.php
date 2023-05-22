<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function userView(){
        $user=Auth::user();

        return view("userview",compact('user'));

    }
}
