<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
// use App\Http\Controllers\BarangController
use App\Http\Controllers\BarangController;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang', ['barang' => $barang]);
        // return view('barang', compact['barang']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Barang::create(
            // [
                // "nama_barang" => 'rotiboy',
                // "letak_barang" => 'kantin',
                // "harga" => 3000,
                // "jumlah_barang" => 12,
                // "tgl_pengadaan" => '2023-12-02',
                // "status" => 'ada',
            // ]
        // );
        // return redirect('/barang-add');
        return view('/barang-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Barang::create($request->all());
        // return redirect(/barang)
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
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
