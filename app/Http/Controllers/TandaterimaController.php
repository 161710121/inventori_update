<?php

namespace App\Http\Controllers;

use App\Tandaterima;
use App\Barang;
use App\Kampus;
use Illuminate\Http\Request;

class TandaterimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tandaterima = Tandaterima::with('Barang','Kampus')->get();
        return view('tandaterima.index', compact('tandaterima'));
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
        return view('tandaterima.create', compact('barang','kampus'));
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
            'nomor'=>'required|string|max:255',
            'tgl'=>'required',
            'kampus_id'=>'required|string|max:255',
            'barang_id'=>'required|string|max:255',
            'deskripsi'=>'required|string|max:255',
            'menerima'=>'required|string|max:255',
            'menyerahkan'=>'required|string|max:255',
            'status'=>'required|string|max:255',
            
        ]);
        $tandaterima = new Tandaterima;
        $tandaterima->nomor = $request->nomor;
        $tandaterima->tgl = $request->tgl;
        $tandaterima->kampus_id = $request->kampus_id;
        $tandaterima->barang_id = $request->barang_id;
        $tandaterima->deskripsi = $request->deskripsi;
        $tandaterima->menerima = $request->menerima;
        $tandaterima->menyerahkan = $request->menyerahkan;
        $tandaterima->status = $request->status;
        $tandaterima->save();
        return redirect()->route('tandaterima.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tandaterima  $tandaterima
     * @return \Illuminate\Http\Response
     */
    public function show(Tandaterima $tandaterima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tandaterima  $tandaterima
     * @return \Illuminate\Http\Response
     */
    public function edit(Tandaterima $tandaterima)
    {
        $tandaterima = Tandaterima::findOrFail($tandaterima->id);
        $barang = Barang::all();
        $kampus = Kampus::all();
        $baranga = tandaterima::findOrFail($tandaterima->id)->id_barang;
        $kampusa =tandaterima::findOrFail($tandaterima->id)->id_kampus;
        return view('tandaterima.edit', compact('tandaterima', 'barang', 'baranga', 'kampus', 'kampusa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tandaterima  $tandaterima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tandaterima $tandaterima)
    {
        $request->validate([
            'nomor'=>'required|string|max:255',
            'tgl'=>'required',
            'kampus_id'=>'required|string|max:255',
            'barang_id'=>'required|string|max:255',
            'deskripsi'=>'required|string|max:255',
            'menerima'=>'required|string|max:255',
            'menyerahkan'=>'required|string|max:255',
            'status'=>'required|string|max:255',
            
        ]);
        $tandaterima = Tandaterima::findOrFail($tandaterima->id);
        $tandaterima->nomor = $request->nomor;
        $tandaterima->tgl = $request->tgl;
        $tandaterima->kampus_id = $request->kampus_id;
        $tandaterima->barang_id = $request->barang_id;
        $tandaterima->deskripsi = $request->deskripsi;
        $tandaterima->menerima = $request->menerima;
        $tandaterima->menyerahkan = $request->menyerahkan;
        $tandaterima->status = $request->status;
        $tandaterima->save();
        return redirect()->route('tandaterima.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tandaterima  $tandaterima
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tandaterima $tandaterima)
    {
        $tandaterima = Tandaterima::findOrFail($tandaterima->id);
        $tandaterima->delete();
        return redirect()->route('tandaterima.index');
    }
}
