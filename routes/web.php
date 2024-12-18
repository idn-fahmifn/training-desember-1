<?php

use App\Http\Controllers\BioController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\MobilController;
use App\Http\Middleware\CekUmur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

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
    return 'ini adalah respon : '.$data;
})->name('respon-parameter');

// menampilkan data di sebuah halaman.
Route::get('halaman/{param}', function($data){
    return view('halaman.detail', compact('data'));
})->name('halaman-parameter');

// Grouping route
/**
 * prefix (parent atau pangkalannya).
 * nama group
 */
Route::prefix('admin')->group(function(){

    // jika dipangil wajib menyertakan admin/

    // localhost:8000/admin/karyawan
    Route::get('karyawan', function(){ 
        return 'ini adalah halaman karyawan';
    })->name('halaman-karyawan');

    // localhost:8000/admin/divisi
    Route::get('divisi', function(){
        return 'ini adalah halaman divisi';
    })->name('halaman-divisi');

    // localhost:8000/admin/branch
    Route::get('branch', function(){
        return 'ini adalah halaman branch atau cabang';
    })->name('halaman-branch');

    /**
     * named routing 
     * URI != nama dari routing
     */
});

// fallback = menangani route yang belum di definisikan.

Route::fallback(function(){
    return view('404');
});


Route::prefix('umur')->group(function(){

    // routing halaman form.
    Route::get('cek-umur', function(){
        return view('umur.form');
    })->name('form');

    // Routing untuk menampilkan halaman berhasil.
    Route::get('berhasil', function(){
        return view('umur.berhasil');
    })->name('berhasil')->middleware(CekUmur::class);

    // Route untuk proses input yang dimasukan
    Route::post('proses', function(Request $request){

        // validasi data : 
        $request->validate([
            'umur' => 'required|integer|max:100'
        ]);
        // Session
        $request->session()->put('umur', $request->umur);

        return redirect()->route('berhasil');

    })->name('proses');

});


// routing dengan controller.

// Routing index/halaman utama.
Route::get('barang', [BarangController::class, 'index'])->name('barang.index');

// Routing create/halaman form create.
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');

// Routing untuk memproses data (mengirim)
Route::post('barang-post', [BarangController::class, 'store'])->name('barang.store');

/**
 * Memanggil routing resource controller
 * jika memanggil routing resource, jangan berikan name
 */
Route::resource('biodata', BioController::class);

// area route mobil
Route::prefix('mobil')->group(function(){

    // untuk menampilkan halaman index mobil
    Route::get('mobil', [MobilController::class, 'index'])->name('mobil.index');

    // untuk menampilkan halaman create
    Route::get('mobil/create', [MobilController::class, 'create'])->name('mobil.create');

    // Routing penyimpanan data
    Route::post('mobil-simpan', [MobilController::class, 'store'])->name('mobil.store');

    // Routing untuk mengambil data yang spesifik
    Route::get('mobil/{id}', [MobilController::class, 'detail'])->name('mobil.detail');

    // Routing untuk mengubah data yang spesifik 
    Route::put('mobil/{id}', [MobilController::class, 'update'])->name('mobil.update');

    // Routing untuk menghapus data yang spesifik 
    Route::delete('mobil/{id}', [MobilController::class, 'delete'])->name('mobil.delete');

});

Route::view('tampilan', 'template.template');







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
