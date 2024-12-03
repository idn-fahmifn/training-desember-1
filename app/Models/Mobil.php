<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    /**
     * jika nama tabel belakangnya tidak ada S, tidak perlu mendeklarasikan database.
     * deklarasi table : 
     */
    protected $table = 'mobil';

    // Kolom yang terdapat pada tabel mobil : 
    // protected $fillable = [
    //     'nama_mobil', 'tipe', 'tahun_produksi', 'jumlah_unit', 'no_polisi'
    // ];

    // shortcut untuk mendeklarasikan kolom
    protected $guarded;
}
