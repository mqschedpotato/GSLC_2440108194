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
    return view('index');
})->name('home');

// Nanti perlu passing parameter ke view nya (data orang yang dipilih)
Route::get('/profile/{nama}', function ($nama) {
    return view('profile')->with('nama', $nama);
})->name('profile');
