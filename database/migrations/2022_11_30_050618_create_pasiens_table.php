<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prov_id');
            $table->string('no_rm')->unique();
            $table->date('tanggal_pendaftaran');
            $table->string('nik');
            $table->string('nama_pasien');
            $table->string('gol_darah');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('status');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('alamat');
            $table->string('nama_penjawab');
            $table->string('s_hubungan');
            $table->string('no_hp_penjawab');
            $table->string('alamat_penjawab');
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
        Schema::dropIfExists('pasiens');
    }
}
