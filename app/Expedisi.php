<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expedisi extends Model
{
    protected $table = 'expedisis';

    protected $fillable = ['no_transaksi','kampus_id','tgl','waktu','barang_id','jumlah','status','deskripsi', 'harga', 'pengirim', 'penerima' ];

    public $timestamps = true;

    public function Kampus()
    {
        return $this->belongsTo('App\Kampus','kampus_id');
    }    

    public function Barang()
    {
        return $this->belongsTo('App\Barang','barang_id');
    }
    
}
