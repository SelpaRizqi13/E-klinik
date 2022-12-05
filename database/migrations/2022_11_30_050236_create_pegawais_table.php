<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('poli_id')->unsigned();
            $table->foreign('poli_id')->references('id')->on('polis')->onDelete('cascade');
            $table->string('nama_pegawai'); 
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            // $table->string('jabatan');
            $table->string('no_hp');
            $table->string('alamat');
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
        Schema::dropIfExists('pegawais');
    }
}
