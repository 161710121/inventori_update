<?php

namespace App\Http\Controllers;

use App\Expedisi;
use App\Barang;
use App\Kampus;
use Illuminate\Http\Request;

class ExpedisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedisi = Expedisi::with('Barang','Kampus')->get();
        return view('expedisi.index', compact('expedisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        $kampus = Kampus::all();
        return view('expedisi.create', compact('barang','kampus'));
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
            'no_transaksi'=>'required|string|max:255',
            'kampus_id'=>'required|string|max:255',
            'tgl'=>'required',
            'waktu'=>'required|date_format:"H:i"',
            'barang_id'=>'required|string|max:255',
            'jumlah'=>'required|string|max:255',
            'status'=>'required|string|max:255',
            'deskripsi'=>'required|string|max:255',
            'harga'=>'required|string|max:255',
            'pengirim'=>'required|string|max:255',
            'penerima'=>'required|string|max:255',
            
        ]);
        $expedisi = new Expedisi;
        $expedisi->no_transaksi = $request->no_transaksi;
        $expedisi->kampus_id = $request->kampus_id;
        $expedisi->tgl = $request->tgl;
        $expedisi->waktu = $request->waktu;
        $expedisi->barang_id = $request->barang_id;
        $expedisi->jumlah = $request->jumlah;
        $expedisi->status = $request->status;
        $expedisi->deskripsi = $request->deskripsi;
        $expedisi->harga = $request->harga;
        $expedisi->pengirim = $request->pengirim;
        $expedisi->penerima = $request->penerima;
        $expedisi->save();
        return redirect()->route('expedisi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function show(Expedisi $expedisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function edit(Expedisi $expedisi)
    {
        $expedisi = Expedisi::findOrFail($expedisi->id);
        $barang = Barang::all();
        $kampus = Kampus::all();
        $baranga = Expedisi::findOrFail($expedisi->id)->id_barang;
        $kampusa =Expedisi::findOrFail($expedisi->id)->id_kampus;
        return view('expedisi.edit', compact('expedisi', 'barang', 'baranga', 'kampus', 'kampusa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedisi $expedisi)
    {
        $request->validate([
            'no_transaksi'=>'required|string|max:255',
            'kampus_id'=>'required|string|max:255',
            'tgl'=>'required',
            'waktu'=>'required|date_format:"H:i"',
            'barang_id'=>'required|string|max:255',
            'jumlah'=>'required|string|max:255',
            'status'=>'required|string|max:255',
            'deskripsi'=>'required|string|max:255',
            'harga'=>'required|string|max:255',
            'pengirim'=>'required|string|max:255',
            'penerima'=>'required|string|max:255',
        ]);
        $expedisi = Expedisi::findOrFail($expedisi->id);
        $expedisi->no_transaksi = $request->no_transaksi;
        $expedisi->kampus_id = $request->kampus_id;
        $expedisi->tgl = $request->tgl;
        $expedisi->waktu = $request->waktu;
        $expedisi->barang_id = $request->barang_id;
        $expedisi->jumlah = $request->jumlah;
        $expedisi->status = $request->status;
        $expedisi->deskripsi = $request->deskripsi;
        $expedisi->harga = $request->harga;
        $expedisi->pengirim = $request->pengirim;
        $expedisi->penerima = $request->penerima;
        $expedisi->save();
        return redirect()->route('expedisi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Expedisi  $expedisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expedisi $expedisi)
    {
        $expedisi = Expedisi::findOrFail($expedisi->id);
        $expedisi->delete();
        return redirect()->route('expedisi.index');
    }
}
