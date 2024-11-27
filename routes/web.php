<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class,'__invoke']);
Route::get('/about', [aboutController::class,'index']);
Route::get('/contact', [contactController::class,'index']);
Route::get('/gallery', [galleryController::class,'index']);

Route::get('/user', function () {
    $user = [
        ['id' => 1,'name'=> 'John Doe', 'email'=> 'hon@gmail.com'],
        ['id'=> 2,'name'=> 'Mayan doe', 'email'=> 'wanna@gmail.com'],
    ];
    return view('user.index', compact('user'));
});