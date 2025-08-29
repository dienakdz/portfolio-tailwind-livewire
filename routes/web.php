<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);


Route::view('/about', 'about');
Route::view('/projects', 'projects');
Route::view('/contact', 'contact');



Route::prefix('admin')->group(function() {
    Route::get('/projects', function() {
        return view('admin.projects');
    })->name('admin.projects');
});