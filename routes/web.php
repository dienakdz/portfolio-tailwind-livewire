<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/about', 'about');
Route::view('/projects', 'projects');
Route::view('/contact', 'contact');

