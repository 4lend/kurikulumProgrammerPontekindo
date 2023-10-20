<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RawatJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ## Query Builder
        // $rawatJalan = DB::table('rawat_jalans')->get();  # show data

        ## Eloquent
        $rawatJalan = RawatJalan::all();
        // dd($rawatJalan);
        // return view('rawat-jalan-add', compact('rawatJalan'));
        return view('home', compact('rawatJalan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        ## Add data using Query Builder
        // DB::table('rawat_jalans')->insert([
        // 'user' => 'fedaa',
        // 'no_bpjs' => '3434',
        // 'poli' => 'Poli Gigi',
        // 'dokter' => 'Dr. Vania Utami',
        // 'waktu_konsul' => 'Selasa, 17 Oktober 2023',
        // 'no_rekam_medis' => 'B78927',
        // 'status' => 'Registrasi',
        // 'antrian' => '1C',
        // ]);
        // dd($rawatJalan);
        ## Add data using Eloquent
        RawatJalan::create([
            'user' => 'Eloquent',
            'no_bpjs' => '3434',
            'poli' => 'Poli Gigi',
            'dokter' => 'Dr. Vania Utami',
            'waktu_konsul' => 'Selasa, 17 Oktober 2023',
            'no_rekam_medis' => 'B78927',
            'status' => 'Registrasi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RawatJalan $rawatJalan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RawatJalan $rawatJalan)
    {
        //
    }
}
