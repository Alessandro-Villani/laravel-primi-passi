<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $name = 'Home';
    $menus = ['home', 'contatti', 'about-us'];
    return view('home', compact('menus', 'name'));
})->name('home');

Route::get('/contacts/{index}', function ($index) {
    $menus = ['home', 'contatti', 'about-us'];
    $name = $menus[$index];
    return view('contacts', compact('menus', 'name'));
})->name('contatti');

Route::get('/about-us/{index}', function ($index) {
    $menus = ['home', 'contatti', 'about-us'];
    $name = $menus[$index];
    return view('about-us', compact('menus', 'name'));
})->name('about-us');
