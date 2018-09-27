<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuanganjnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruanganjns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_jenis_ruangan');
            $table->string('jenis_ruangan');
            $table->date('tgl_berlaku');
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
        Schema::dropIfExists('ruanganjns');
    }
}
