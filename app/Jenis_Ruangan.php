<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_Ruangan extends Model
{
    protected $table = 'jenisruangans';
    protected $fillable = ['kode_jenis_ruangan','jenis_ruangan','tgl_berlaku','status'];
    public $timestamps = true;
    public function Ruangan()
    {
        return $this->HasMany('App\Ruangan','id_ruangans');
    }
}
