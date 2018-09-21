<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    protected $table = 'jenisruangans';
    protected $fillable = ['kode_kampus','nama_kampus','alamat','telp_kampus','deskripsi','status'];
    public $timestamps = true;
    public function Ruangan()
    {
        return $this->HasMany('App\Ruangan','id_ruangans');
    }
}
