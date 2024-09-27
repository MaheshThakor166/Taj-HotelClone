<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Login', function () {
    return view(view: 'Login');
});

Route::get('/Home', function () {
    return view(view: 'Home');
});