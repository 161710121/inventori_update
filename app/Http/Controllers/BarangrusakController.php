<?php

namespace App\Http\Controllers;

use App\Barangrusak;
use App\Barang;
use Illuminate\Http\Request;

class BarangrusakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangrusak = Barangrusak::with('Barang')->get();
        return view('barangrusak.index', compact('barangrusak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('barangrusak.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'barang_id'=>'required|string|max:255',
            'status_kerusakan'=>'required|string|max:255',
            'tgl_perbaikan'=>'required',
        ]);
        $barangrusak = new Barangrusak;
        $barangrusak->barang_id = $request->barang_id;
        $barangrusak->status_kerusakan = $request->status_kerusakan;
        $barangrusak->tgl_perbaikan = $request->tgl_perbaikan;
        $barangrusak->save();
        return redirect()->route('barangrusak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barangrusak  $barangrusak
     * @return \Illuminate\Http\Response
     */
    public function show(Barangrusak $barangrusak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barangrusak  $barangrusak
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangrusak $barangrusak)
    {
        $barangrusak = Barangrusak::findOrFail($barangrusak->id);
        $barang = Barang::all();
        $baranga = barangrusak::findOrFail($barangrusak->id)->id_barang;
        return view('barangrusak.edit', compact('barangrusak', 'barang', 'baranga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barangrusak  $barangrusak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangrusak $barangrusak)
    {
        $request->validate([
            'barang_id'=>'required|string|max:255',
            'status_kerusakan'=>'required|string|max:255',
            'tgl_perbaikan'=>'required',
        ]);
        $barangrusak = Barangrusak::findOrFail($barangrusak->id);
        $barangrusak->barang_id = $request->barang_id;
        $barangrusak->status_kerusakan = $request->status_kerusakan;
        $barangrusak->tgl_perbaikan = $request->tgl_perbaikan;
        $barangrusak->save();
        return redirect()->route('barangrusak.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barangrusak  $barangrusak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangrusak $barangrusak)
    {
        $barangrusak = Barangrusak::findOrFail($barangrusak->id);
        $barangrusak->delete();
        return redirect()->route('barangrusak.index');
    }
}
