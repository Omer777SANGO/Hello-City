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

// Fichier qui contient l'ensemble des routes possible pour accéder aux différentes pages

Route::get('/', function () {
    return view('pages/home');     //J'indique ici que ma page d'accueil est home au lieu de view('welcome'); et est dans un sous-doissier pages
})->name('home');       /*On a nommé notre route afin de ne pas arcoder nos routes statiquement*/

// OU avec les versions avancées de php on peut faire en une seule ligne comme ça
Route::get('/', fn() => view('pages/home'))->name('home');

Route::get('/about-us', function(){
    return view('pages/about');     //('pages/about')ou ('pages.about') les 2 marches
})->name('about');

// OU avec les versions avancées de php on peut faire en une seule ligne comme ça
/*Route::get('/about-us', fn() => view('pages/about'))->name('about');*/



// On peut aussi faire route facilement avec laravel en ignorant php
/*
Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
*/