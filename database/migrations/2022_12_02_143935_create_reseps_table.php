<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pasien_id')->unsigned();
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->bigInteger('obat_id')->unsigned();
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('cascade');
            $table->string('jumlah');
            $table->dateTime('tanggal_resep');
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
        Schema::dropIfExists('reseps');
    }
}
