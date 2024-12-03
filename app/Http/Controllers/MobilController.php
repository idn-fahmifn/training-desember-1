<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    // function halaman utama
    public function index()
    {
        $data = Mobil::all(); //mengambil semua nilai yang ada di dalam model Mobil.
        // perintah untuk mengarahkan ke halaman index di folder mobil. dan mendefinisikan variable data.
        return view('mobil.index', compact('data'));
    }
}
