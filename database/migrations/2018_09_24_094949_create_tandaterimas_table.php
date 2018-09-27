<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTandaterimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tandaterimas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nomor');
            $table->date('tgl');
            
            $table->integer('kampus_id')->unsigned();
            $table->foreign('kampus_id')->references('id')->on('kampuses')->onUpdate('cascade')->onDelete('cascade');
            
            $table->integer('barang_id')->unsigned();
            $table->foreign('barang_id')->references('id')->on('barangs')->onUpdate('cascade')->onDelete('cascade');
            
            $table->string('deskripsi');
            $table->string('menerima');
            $table->string('menyerahkan');
            $table->string('status');
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
        Schema::dropIfExists('tandaterimas');
    }
}
