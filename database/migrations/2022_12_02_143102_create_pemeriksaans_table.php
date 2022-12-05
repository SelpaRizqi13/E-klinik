<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pasien_id')->unsigned();
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->bigInteger('tindakan_id')->unsigned();
            $table->foreign('tindakan_id')->references('id')->on('tindakans')->onDelete('cascade');
            $table->bigInteger('dokter_id')->unsigned();
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
            $table->bigInteger('pegawai_id')->unsigned();
            $table->foreign('pegawai_id')->references('id')->on('pegawais')->onDelete('cascade');
            $table->string('keluhan');
            $table->string('diagnosa');
            $table->string('perkembangan');
            $table->dateTime('tanggal_pemeriksaan');
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
        Schema::dropIfExists('pemeriksaans');
    }
}
