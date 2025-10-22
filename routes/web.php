<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/caracteristicas', function () {
    return view('caracteristicas');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/ubicacion', function () {
    return view('ubicacion');
});

Route::get('/opinion', function () {
    return view('opinion');
});