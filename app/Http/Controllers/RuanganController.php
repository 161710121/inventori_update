<?php

namespace App\Http\Controllers;

use App\Ruangan;
use App\Barang;
use App\Kampus;
use App\Ruanganjns;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruangan = Ruangan::with('Barang','Jenis_Ruangan','Kampus')->get();
        return view('ruangan.index', compact('ruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $jenisruangan = Ruanganjns::all();
        $kampus = Kampus::all();
        return view('ruangan.create', compact('barang','jenisruangan','kampus'));
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
            'kode_ruangan'=>'required|string|max:255',
            'deskripsi'=>'required|string',
            'ukuran_panjang'=>'required|string|max:255',
            'ukuran_lebar'=>'required|string|max:255',
            'ukuran_tinggi'=>'required|string|max:255',
            'status_penggunaan'=>'required|string|max:255',
            'barang_id'=>'string|max:255',
            'jenisruangan_id'=>'max:255',
            'kampus_id'=>'max:255',
        ]);
        $ruangan = new Ruangan;
        $ruangan->kode_ruangan = $request->kode_ruangan;
        $ruangan->deskripsi = $request->deskripsi;
        $ruangan->ukuran_panjang = $request->ukuran_panjang;
        $ruangan->ukuran_lebar = $request->ukuran_lebar;
        $ruangan->ukuran_tinggi = $request->ukuran_tinggi;
        $ruangan->status_penggunaan = $request->status_penggunaan;
        $ruangan->barang_id = $request->barang_id;
        $ruangan->jenisruangan_id = $request->jenisruangan_id;
        $ruangan->kampus_id = $request->kampus_id;
        $ruangan->save();
        return redirect()->route('ruangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(Ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruangan  $ruangan
     * @param  \App\Barang  $barang
     * @param  \App\Ruangjns  $jenisruang
     * @param  \App\Kampus  $kampus
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruangan $ruangan)
    {
        $ruangan = Ruangan::findOrFail($ruangan->id);
        $barang = Barang::all();
        $jenisruang = Ruanganjns::all();
        $kampus = Kampus::all();
        $baranga = Ruangan::findOrFail($ruangan->id)->id_barang;
        $jenisruanga = Ruangan::findOrFail($ruangan->id)->id_ruanganjns;
        $kampusa =Ruangan::findOrFail($ruangan->id)->id_kampus;
        return view('ruangan.edit', compact('ruangan', 'barang', 'baranga', 'jenisruang', 'jenisruanga', 'kampus', 'kampusa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruangan $ruangan)
    {
        $request->validate([
            'kode_ruangan'=>'required|string|max:255',
            'deskripsi'=>'required|string',
            'ukuran_panjang'=>'required|string|max:255',
            'ukuran_lebar'=>'required|string|max:255',
            'ukuran_tinggi'=>'required|string|max:255',
            'status_penggunaan'=>'required|string|max:255',
            'barang_id'=>'required|string|max:255',
            'jenisruangan_id'=>'required|max:255',
            'kampus_id'=>'required|max:255',
        ]);
        $ruangan = Ruangan::findOrFail($ruangan->id);
        $ruangan->kode_ruangan = $request->kode_ruangan;
        $ruangan->deskripsi = $request->deskripsi;
        $ruangan->ukuran_panjang = $request->ukuran_panjang;
        $ruangan->ukuran_lebar = $request->ukuran_lebar;
        $ruangan->ukuran_tinggi = $request->ukuran_tinggi;
        $ruangan->status_penggunaan = $request->harga_satuan;
        $ruangan->barang_id = $request->tanggal_inputan;
        $ruangan->jenisruangan_id = $request->jenisruangan_id;
        $ruangan->kampus_id = $request->kampus_id;
        $ruangan->save();
        return redirect()->route('ruangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruangan $ruangan)
    {
        $ruangan = Ruangan::findOrFail($ruangan->id);
        $ruangan->delete();
        return redirect()->route('ruangan.index');
    }
}
