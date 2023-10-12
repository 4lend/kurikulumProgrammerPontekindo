<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Barang;
// use App\Http\Controllers\BarangController
>>>>>>> 3deb8fad (chore : add automation to push github and gitlab; feat : fix error laravel project after git reset --hard (not do again))

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        $barang = Barang::all();
        return view('barang', ['barang' => $barang]);
        // return view('barang', compact['barang']);
>>>>>>> 3deb8fad (chore : add automation to push github and gitlab; feat : fix error laravel project after git reset --hard (not do again))
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
        // Barang::create(
        //     [
        //         "nama_barang" => 'rotiboy',
        //         "letak_barang" => 'kantin',
        //         "harga" => 3000,
        //         "jumlah_barang" => 12,
        //         "tgl_pengadaan" => '12-02-2023',
        //         "status" => 'ada',
        //     ]
        // );
        // return redirect('/barang');
>>>>>>> 3deb8fad (chore : add automation to push github and gitlab; feat : fix error laravel project after git reset --hard (not do again))
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
