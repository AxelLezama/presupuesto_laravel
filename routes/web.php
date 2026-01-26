<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/slide', function () {
    return view('layouts.app'); // Solo para probar que carga el layout
});