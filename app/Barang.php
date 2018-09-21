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
        return $this->belongsTo('App\Kategori','id_kategori');
    }

    public function Ruangan()
    {
        return $this->HasMany('App\Ruangan','id_barang');
    }
}
