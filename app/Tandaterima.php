<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tandaterima extends Model
{
    protected $table = 'tandaterimas';

    protected $fillable = ['nomor', 'tgl', 'kampus_id', 'barang_id', 'deskripsi', 'menerima', 'menyerahkan', 'status'];

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
