<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * method : get
     */
     public function index()
    {
        return 'Ini adalah halaman index';
    }

    /**
     * Show the form for creating a new resource.
     * 
     * Method : get
     */
    public function create()
    {
        return 'Ini adalah halaman create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     * method : get (data yang diambil berdasarkan parameter.)
     */
    public function show($param)
    {
        return $param;
    }

    /**
     * Show the form for editing the specified resource.
     * method : get untuk halaman edit
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
