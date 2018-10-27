<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::with('Kategori')->get();
        return view('barang.index', compact('barang'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('barang.create', compact('kategori'));
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
            'kode_barang'=>'required|string|max:255',
            'nama_barang'=>'required|string|max:255',
            'kategori_id'=>'required|string|max:255',
            'jumlah_barang'=>'required|integer|max:255',
            'harga_satuan'=>'required|string|max:255',
            'tanggal_inputan'=>'required',
            'deskripsi'=>'required|string',
            'status'=>'required|string|max:255',
        ]);
        $barang = new Barang;
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga_satuan = $request->harga_satuan;
        $barang->tanggal_inputan = $request->tanggal_inputan;
        $barang->deskripsi = $request->deskripsi;
        $barang->status = $request->status;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        $barang = Barang::findOrFail($barang->id);
        $kategori = Kategori::all();
        $barangkat = Barang::findOrFail($barang->id)->id_kategori;
        return view('barang.edit', compact('barang','kategori','barangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang'=>'required|string|max:255',
            'nama_barang'=>'required|string|max:255',
            'kategori_id'=>'required|string|max:255',
            'jumlah_barang'=>'required|integer|max:255',
            'harga_satuan'=>'required|string|max:255',
            'tanggal_inputan'=>'required',
            'deskripsi'=>'required|string',
            'status'=>'required|string|max:255',
        ]);
        $barang = Barang::findOrFail($barang->id);
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->harga_satuan = $request->harga_satuan;
        $barang->tanggal_inputan = $request->tanggal_inputan;
        $barang->deskripsi = $request->deskripsi;
        $barang->status = $request->status;
        $barang->save();
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang = Barang::findOrFail($barang->id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
        
}
