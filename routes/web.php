<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/**
 * Route Sederhana
 * method get
 */
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

// Route dengan parameter
// digunakan untuk membuat halaman edit atau halaman detail.
Route::get('respon/{parameter}', function($data){
    return 'ini adalah halaman : '.$data;
});

// menampilkan data di sebuah halaman.
Route::get('halaman/{param}', function($data){
    return view('halaman.detail', compact('data'));
});

