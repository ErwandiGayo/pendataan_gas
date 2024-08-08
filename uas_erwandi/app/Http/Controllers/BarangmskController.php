<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangmsk;

class BarangmskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $bm    = Barangmsk::all();
        return view('barangmsk.index', compact('nomor', 'bm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bm    = Barangmsk::all();
        return view('barangmsk.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bm    =new Barangmsk;
        $bm    ->nama_brg = $request->nama_barang;
        $bm    ->merk     = $request->merk;
        $bm    ->jenis_brg = $request->jenis;
        $bm    ->nama_brg = $request->nama_barang;





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
