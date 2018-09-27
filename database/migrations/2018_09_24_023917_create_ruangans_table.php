<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_ruangan');
            $table->string('deskripsi');
            $table->string('ukuran_panjang');
            $table->string('ukuran_lebar');
            $table->string('ukuran_tinggi');
            $table->string('status_penggunaan');

            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('jenisruangan_id')->unsigned();
            $table->foreign('jenisruangan_id')->references('id')->on('ruanganjns')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('kampus_id')->unsigned();
            $table->foreign('kampus_id')->references('id')->on('kampuses')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('ruangans');
    }
}
