<?php

namespace App\Http\Controllers;

use App\Models\RawatJalan;
use Illuminate\Http\Request;

class RawatJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ## Query Builder
        // $rawatJalan = DB::table('rawat_jalans')->get();  # show data
        // DB::table('rawat_jalans')->insert([
            // 'user',
            // ''
        // ]);
        // dd($rawatJalan);

        ## Eloquent
        $rawatJalan = RawatJalan::all();
        // dd($rawatJalan);
        return view('rawat-jalan-add', compact('rawatJalan'));
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
