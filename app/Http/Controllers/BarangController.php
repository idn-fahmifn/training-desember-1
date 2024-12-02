<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {   
        $barang = 'lemari';
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        // menampilkan request atau value yang diinputkan
        return $request;
        
    }
}
