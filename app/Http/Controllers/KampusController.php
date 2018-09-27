<?php

namespace App\Http\Controllers;

use App\Kampus;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kampus = Kampus::all();
        return view('kampus.index', compact('kampus'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kampus.create');
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
            'kode_kampus'=>'required|string|max:255',
            'nama_kampus'=>'required|string|max:255',
            'alamat'=>'required|string',
            'telp_kampus'=>'required|string|max:255',
            'deskripsi'=>'required|string',
            'status'=>'required|string|max:255',
        ]);
        $kampus = new Kampus;
        $kampus->kode_kampus = $request->kode_kampus;
        $kampus->nama_kampus = $request->nama_kampus;
        $kampus->alamat = $request->alamat;
        $kampus->telp_kampus = $request->telp_kampus;
        $kampus->deskripsi = $request->deskripsi;
        $kampus->status = $request->status;
        $kampus->save();
        return redirect()->route('kampus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kampus  $kampus
     * @return \Illuminate\Http\Response
     */
    public function show(Kampus $kampus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kampus  $kampus
     * @return \Illuminate\Http\Response
     */
    public function edit(Kampus $kampus)
    {
        $kampus = Kampus::findOrFail($kampus->id);
        return view('kampus.edit', compact('kampus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kampus  $kampus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kampus $kampus)
    {
        $request->validate([
            'kode_kampus'=>'required|string|max:255',
            'nama_kampus'=>'required|string|max:255',
            'alamat'=>'required|string',
            'telp_kampus'=>'required|string|max:255',
            'deskripsi'=>'required|string',
            'status'=>'required|string|max:255',
        ]);
        $kampus = Kampus::findOrFail($kampus->id);
        $kampus->kode_kampus = $request->kode_kampus;
        $kampus->nama_kampus = $request->nama_kampus;
        $kampus->alamat = $request->alamat;
        $kampus->telp_kampus = $request->telp_kampus;
        $kampus->deskripsi = $request->deskripsi;
        $kampus->status = $request->status;
        $kampus->save();
        return redirect()->route('kampus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kampus  $kampus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kampus $kampus)
    {
        $kampus = Kampus::findOrFail($kampus->id);
        $kampus->delete();
        return redirect()->route('kampus.index');
    }
}
