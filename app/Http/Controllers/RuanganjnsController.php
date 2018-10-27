<?php

namespace App\Http\Controllers;

use App\Ruanganjns;
use Illuminate\Http\Request;

class RuanganjnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruanganjns = Ruanganjns::all();
        return view('ruanganjns.index', compact('ruanganjns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruanganjns.create');
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
            'tgl_berlaku'=>'required|string',
            'status'=>'required|string|max:255',
        ]);
        $ruanganjns = new Ruanganjns;
        $ruanganjns->kode_jenis_ruangan = $request->kode_jenis_ruangan;
        $ruanganjns->jenis_ruangan = $request->jenis_ruangan;
        $ruanganjns->tgl_berlaku = $request->tgl_berlaku;
        $ruanganjns->status = $request->status;
        $ruanganjns->save();
        return redirect()->route('ruangjns.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ruanganjns  $ruanganjns
     * @return \Illuminate\Http\Response
     */
    public function show(Ruanganjns $ruanganjns)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ruanganjns  $ruanganjns
     * @return \Illuminate\Http\Response
     */
    public function edit(Ruanganjns $ruangjn)
    {
        $ruangjn = Ruanganjns::findOrFail($ruangjn->id);
        return view('ruanganjns.edit', compact('ruangjn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ruanganjns  $ruanganjns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ruanganjns $ruangjn)
    {
        $request->validate([
            'kode_jenis_ruangan'=>'required|string|max:255',
            'jenis_ruangan'=>'required|string|max:255',
            'tgl_berlaku'=>'required|string',
            'status'=>'required|string|max:255',
        ]);
        $ruanganjns = Ruanganjns::findOrFail($ruangjn->id);
        $ruanganjns->kode_jenis_ruangan = $request->kode_jenis_ruangan;
        $ruanganjns->jenis_ruangan = $request->jenis_ruangan;
        $ruanganjns->tgl_berlaku = $request->tgl_berlaku;
        $ruanganjns->status = $request->status;
        $ruanganjns->save();
        return redirect()->route('ruangjns.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ruanganjns  $ruanganjns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ruanganjns $ruangjn)
    {
        $ruanganjns = Ruanganjns::findOrFail($ruangjn->id);
        $ruanganjns->delete();
        return redirect()->route('ruangjns.index');
    }
}
