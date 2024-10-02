<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/login', function () {
    return view(view: 'auth.login');
});
Route::get('/acreate', function () {
    return view(view: 'auth.acreate');
});

// Route::get('/Home', function () {
//     return view(view: 'Home');
// });
