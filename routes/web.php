<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () =>  view('home'));
Route::get('/about', fn () =>  view('about'));
Route::get('/contact', fn () =>  view('contact'));
Route::get('/gallery', fn () =>  view('gallery'));

Route::get('/user', function () {
    $user = [
        ['id' => 1,'name'=> 'John Doe', 'email'=> 'hon@gmail.com'],
        ['id'=> 2,'name'=> 'Mayan doe', 'email'=> 'wanna@gmail.com'],
    ];
    return view('user.index', compact('user'));
});