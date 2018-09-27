<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKampusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_kampus');
            $table->string('nama_kampus');
            $table->text('alamat');
            $table->string('telp_kampus');
            $table->string('deskripsi');
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
        Schema::dropIfExists('kampuses');
    }
}
