<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Sederhana.
Route::get('fahmi', function(){
    return 'Ini adalah respon fahmi'; //ini adalah respon yang akan ditampilkan di web.
});

Route::get('halaman-fahmi', function(){
    return view('halaman.fahmi'); //ini untuk menampilkan halaman
});

Route::get('data-fahmi', function(){
    $nama = 'Fahmi Nuradi'; //data
    return $nama; //callback untuk memanggil data
});

