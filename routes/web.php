<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});//->middleware('auth');

Route::get("/login", function(){
    return view("loginform");
});