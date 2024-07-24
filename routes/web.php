<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/potensi', function () {
    return view('potensi');
})->name('potensi');
