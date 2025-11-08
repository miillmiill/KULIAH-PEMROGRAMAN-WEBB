<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});
Route::get('/halo', function () {
return view('halo');
});

Route::get('/index', function () {
return view('index');
});
