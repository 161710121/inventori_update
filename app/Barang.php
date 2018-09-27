<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs';

    protected $fillable = ['kode_barang','nama_barang','kategori_id','jumlah_barang','harga_satuan','tanggal_inputan','deskripsi','status'];

    public $timestamps = true;

    public function Kategori()
    {
        return $this->belongsTo('App\Kategori','kategori_id');
    }

    public function Ruangan()
    {
        return $this->HasMany('App\Ruangan','id_barang');
    }

    public function Expedisi()
    {
        return $this->HasMany('App\Expedisi','id_expedisi');
    }

    public function Tanda_Terma()
    {
        return $this->HasMany('App\Tandaterima','id_tandaterima');
    }

    public function Barang_Rusak()
    {
        return $this->HasMany('App\Barangrusak','id_barangrusak');
    }
}
