<?php

namespace App\Http\Controllers;

use App\Jenis_Ruangan;
use Illuminate\Http\Request;

class JenisRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisruangan = Jenis_Ruangan::all();
        return view('jenisruangan.index', compact('jenisruangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenisruangan.create');
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
            'kode_jenis_ruangan'=>'required|string|max:255',
            'jenis_ruangan'=>'required|string|max:255',
            'tgl_berlaku'=>'required|string|max:255',
            'status'=>'required|string|max:255',
        ]);
        $jenisruangan = new Jenis_Ruangan;
        $jenisruangan->kode_jenis_ruangan = $request->kode_jenis_ruangan;
        $jenisruangan->jenis_ruangan = $request->jenis_ruangan;
        $jenisruangan->tgl_berlaku = $request->tgl_berlaku;
        $jenisruangan->status = $request->status;
        $jenisruangan->save();
        return redirect()->route('jnsruang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jenis_Ruangan  $jenis_Ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(Jenis_Ruangan $jenis_Ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jenis_Ruangan  $jenis_Ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenis_Ruangan $jenis_Ruangan)
    {
        $jenisruangan = Jenis_Ruangan::findOrFail($jenis_Ruangan->id);
        return view('jenisruangan.edit', compact('jenisruangan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jenis_Ruangan  $jenis_Ruangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenis_Ruangan $jenis_Ruangan)
    {
        $request->validate([
            'kode_jenis_ruangan'=>'required|string|max:255',
            'jenis_ruangan'=>'required|string|max:255',
            'tgl_berlaku'=>'required|string|max:255',
            'status'=>'required|string|max:255',
        ]);
        $jenisruangan = Jenis_Ruangan::findOrFail($jenis_Ruangan->id);
        $jenisruangan->kode_jenis_ruangan = $request->kode_jenis_ruangan;
        $jenisruangan->jenis_ruangan = $request->jenis_ruangan;
        $jenisruangan->tgl_berlaku = $request->tgl_berlaku;
        $jenisruangan->status = $request->status;
        $jenisruangan->save();
        return redirect()->route('jnsruang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jenis_Ruangan  $jenis_Ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis_Ruangan $jenis_Ruangan)
    {
        $jenisruangan = Jenis_Ruangan::findOrFail($jenis_Ruangan->id);
        $jenisruangan->delete();
        return redirect()->route('jnsruang.index');
    }
}
