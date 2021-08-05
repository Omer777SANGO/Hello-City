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

Route::get('/', function () {
    return view('pages/home');     //J'indique ici que ma page d'accueil est home au lieu de view('welcome'); et est dans un sous-doissier pages
});

Route::get('/about-us', function(){
    return view('pages/about');     //('pages/about')ou ('pages.about') les 2 marches
});