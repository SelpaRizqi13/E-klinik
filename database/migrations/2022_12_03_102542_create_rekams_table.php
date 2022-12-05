<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pasien_id')->unsigned();
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->bigInteger('pemeriksaan_id')->unsigned();
            $table->foreign('pemeriksaan_id')->references('id')->on('pemeriksaans')->onDelete('cascade');
            $table->bigInteger('resep_id')->unsigned();
            $table->foreign('resep_id')->references('id')->on('reseps')->onDelete('cascade');
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
        Schema::dropIfExists('rekams');
    }
}
