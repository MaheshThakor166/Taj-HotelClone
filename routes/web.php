<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/Login', function () {
    return view(view: 'auth.login');
});

// Route::get('/Home', function () {
//     return view(view: 'Home');
// });
