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

    // function menampilkan halaman create
    public function create()
    {
        return view('mobil.create');
    }

    // function untuk menyimpan data.
    public function store(Request $request)
    {
        // validasi data atau aturan mengisi form input
        $request->validate([
            'nama_mobil' => 'required|string|min:4|max:15',
            'tipe' => 'required',
            'tahun_produksi' => 'required|min:4|max:4',
            'jumlah_unit' => 'required|min:0'
        ]);

        // kirim data request ke dalam database
        $input = $request->all();
        Mobil::create($input);

        // jika berhasil, akan dilanjutkan ke halaman index
        return redirect()->route('mobil.index')->with('success', 'Data berhasil dibuat');
    }

    public function detail($id)
    {
        // memanggil data yang sama sesuai dengan baris yang diambil.
        $data = Mobil::find($id);
        return view('mobil.detail', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $data = Mobil::find($id); //mencari row yang akan diganti
        $input = $request->all(); // nilai terbaru yang akan diinputkan untuk mengganti nilai lama.
        $request->validate([
            'nama_mobil' => 'required|string|min:4|max:15',
            'tipe' => 'required',
            'tahun_produksi' => 'required|min:4|max:4',
            'jumlah_unit' => 'required|min:0'
        ]);
        $data->update($input);

        return redirect()->route('mobil.index')->with('success', 'Data berhasil diubah');

    }

}
