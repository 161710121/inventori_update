<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangans';
    
    protected $fillable = ['kode_ruangan','deskripsi','ukuran_panjang','ukuran_lebar','ukuran_tinggi','status_penggunaan','barang_id','jenis_ruangan_id','kampus_id'];

	public $timestamps = true;

	public function Barang()
    {
        return $this->belongsTo('App\Barang','id_barangs');
    }

	public function Jenis_Ruangan()
    {
        return $this->belongsTo('App\JenisRuangan','id_jenisruangans');
    }

	public function Kampus()
    {
        return $this->belongsTo('App\Kampus','id_kampuss');
    }
}
