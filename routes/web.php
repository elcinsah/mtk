<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MtkContoller;
use App\Http\Controllers\PlazaController;
use App\Http\Controllers\FlatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ViewController;


Route::get('/', function () {
    return view('home');
})->name('login.regester');

route::get('logout', [loginController::class, 'logout'])->name('logout');
route::prefix("admin/")->middleware(['auth', 'isadmin'])->group(function () {
    route::get("", [AdminController::class, "index"])->name("admin.index");
    route::get("mtk", [MtkContoller::class, "mtk"])->name("all.mtk");
    route::get("plaza", [PlazaController::class, "plaza"])->name("all.plaza");
    route::get("flat", [FlatController::class, "flat"])->name("all.flat");
    route::get("user", [UserController::class, "user"])->name("all.user");
    route::get("user/add", [UserController::class, "addUser"])->name("user.add");
    route::get("flat/add", [FlatController::class, "addFlat"])->name("flat.add");
    route::get("plaza/add", [PlazaController::class, "addPlaza"])->name("plaza.add");
    route::get("mtk/add", [MtkContoller::class, "addMtk"])->name("mtk.add");
    route::post("post/flat", [FlatController::class, "createFlat"])->name("flat.post");
    route::get("flat/del{id}", [FlatController::class, "flatdel"])->name("flat.del");
    route::post("post/user", [UserController::class, "creatUser"])->name("user.post");
    route::get("user/del{id}", [UserController::class, "delUser"])->name("user.del");
    route::post("post/plaza", [PlazaController::class, "creatPlaza"])->name("post.plaza");
    route::get("plaza/del{id}", [PlazaController::class, "plazaDel"])->name("plaza.del");
    route::post("post/mtk", [MtkContoller::class, "creatMtk"])->name("post.mtk");
    route::get("mtk/del{id}", [MtkContoller::class, "del"])->name("mtk.del");


});


route::middleware(['auth', 'isuser'])->group(function () {
    route::get("user/page", [ViewController::class, "userView"])->name("user.view");
});


route::get("regester", [loginController::class, "regester"])->name("regester");
route::post("regester/post", [loginController::class, "createAcount"])->name("regester.post");
route::post("login", [loginController::class, "checkLogin"])->name("login.post");


