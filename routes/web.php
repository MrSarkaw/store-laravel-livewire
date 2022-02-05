<?php

use Illuminate\Support\Facades\Route;


Route::get('/',"Index")->name("index");
Route::get('/detail/{id}',"ShowPost")->name("detail");
route::get("/login","Auth\Login")->name("login");
route::get("/register","Auth\Register")->name("register");
route::get("/register","Auth\Register")->name("register");


Route::middleware(['auth', 'isAdmin'])->group(function () {
    // dashboard
    route::get("/admin/home","Admin\Home")->name("admin.home");

    // users
    route::get("/admin/users","Admin\Users")->name("admin.users");
    route::get("/admin/users/{id}","Admin\UserSection\Edituser")->name("admin.users.edit");

    // posts
    route::get("/admin/posts","Admin\Posts\Index")->name("admin.posts");
   
    // order
    route::get("/admin/order","Admin\Order\Order")->name("admin.order");

});


Route::middleware(["auth","isUser"])->group(function(){
    route::get("/user/home","User\Home")->name("user.index");
    route::get("/user/edit","User\Edit")->name("user.edit");
    route::get("/user/favorite","User\ShowUserFavorite")->name("user.favorite");
    route::get("/user/order","User\ShowOrder")->name("user.showOrder");
});




