<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/items', function () {
    return view('items');
})->name('items');

Route::get('/pictures', function () {
    return view('pictures');
})->name('pictures');

