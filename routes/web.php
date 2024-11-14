<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-home', function () {
    return view('home');
});

Route::get('/user-about', function () {
    return view('about');
});
