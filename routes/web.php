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
    $dataDiri = [
        [
            "nama" => 'Rafi Muhammad',
            "summary" => 'Hello, my name is Rafi Muhammad. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
            "hobby" => ['Ngoding', 'Main Futsal'],
            "matkul" => ['Web Programming', 'Software Engineering'],
            "gambar" => 'pics/rafi.jpg',
            "umur" => 21,
        ],
        [
            "nama" => 'Umar Siddiq Gege Khoiruddin',
            "summary" => 'Hello, my name is Umar Siddiq Gege Khoiruddin, now I m studying at Bina Nusantara University majoring in computer science and statistics since 2020 ',
            "hobby" => ['Membaca buku'],
            "matkul" => ['Computer network'],
            "gambar" => 'pics/umar.jpg',
            "umur" => 20
        ],
        [
            "nama" => 'Sekar Azalea',
            "summary" => 'Hello, my name is Sekar Azalea. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
            "hobby" => ['Yoga'],
            "matkul" => ['Human and Computer Interaction'],
            "gambar" => 'pics/sekar.jpg',
            "umur" => 20
        ]
    ];

    $activeData = array();

    foreach ($dataDiri as $value) {
        if ($value['nama'] == $nama) {
            array_push($activeData, $value);
            $activeData[0]['hobby'] = implode(' & ', $activeData[0]['hobby']);
            $activeData[0]['matkul'] = implode(' & ', $activeData[0]['matkul']);
            break;
        }
    }

    $activeData = (object)$activeData[0];
    // print_r($activeData);
    return view('profile', ['data' => $activeData]);
})->name('profile');
