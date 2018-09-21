<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategoris';
    protected $fillable = ['kode_kategori','nama_kategori','deskripsi'];
    public $timestamps = true;

    public function Barang()
    {
        return $this->HasMany('App\Barang','id_kategori');
    }
}
