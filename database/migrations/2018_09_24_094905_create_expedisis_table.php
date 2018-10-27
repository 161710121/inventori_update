<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedisis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_transaksi');
            
            $table->integer('kampus_id')->unsigned();
            $table->foreign('kampus_id')->references('id')->on('kampuses')->onUpdate('cascade')->onDelete('cascade');
            
            $table->date('tgl');
            $table->time('waktu');
            
            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
            
            $table->integer('jumlah');
            $table->string('status');
            $table->string('deskripsi');
            $table->string('harga');
            $table->string('pengirim');
            $table->string('penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expedisis');
    }
}
