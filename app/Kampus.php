<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    protected $table = 'kampuses';
    protected $fillable = ['kode_kampus','nama_kampus','alamat','telp_kampus','deskripsi','status'];
    public $timestamps = true;

    public function Ruangan()
    {
        return $this->HasMany('App\Ruangan','id_ruangan');
    }

    public function Expedisi()
    {
        return $this->HasMany('App\Expedisi','id_expedisi');
    }

    public function Tanda_Terma()
    {
        return $this->HasMany('App\Tandaterima','id_tandaterima');
    }
}
