<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangrusak extends Model
{
    protected $table = 'barangrusaks';

    protected $fillable = ['barang_id', 'status_kerusakan', 'tgl_perbaikan'];

    public $timestamps = true;

    public function Barang()
    {
        return $this->belongsTo('App\Barang','barang_id');
    }    
}
