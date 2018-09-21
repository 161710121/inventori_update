<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use App\Jenis_Ruangan;
use App\Kampus;
use App\User;
use App\Barang;
use App\Ruangan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kate = Kategori::count();
        $jns = Jenis_Ruangan::count();
        $kam = Kampus::count();
        $bar = Barang::count();
        $rua = Ruangan::count();
        $us = User::count();
        return view('home', compact('kate', 'jns', 'kam', 'bar','rua','us'));
        
    }
}
