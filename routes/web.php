<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');  // The homepage view
})->name('home');

Route::get('/cctv', function () {
    return view('homepage');  // The camera stream page
})->name('cameras');
