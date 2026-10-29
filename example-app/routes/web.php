<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    echo'home';
});
Route::get('/blog',function(){
    echo 'blog';
});