<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// On peut aussi faire route facilement avec laravel en ignorant php
Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
