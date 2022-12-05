<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{ 
    use HasFactory;
    protected $fillable = [
        'id','prov_id','no_rm','tanggal_pendaftaran','nik','nama_pasien','gol_darah','jenis_kelamin','tempat_lahir','tanggal_lahir','agama','status','pekerjaan','no_hp','kabupaten','kecamatan','desa','alamat','nama_penjawab','s_hubungan','no_hp_penjawab','alamat_penjawab'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'prov_id', 'id');
    }

    public function rekam()
    {
        # code...
        return $this->hasMany(Rekam::class);
    }

    public function pemeriksaan()
    {
        # code...
        return $this->hasMany(Pemeriksaan::class);
    }

    public function resep()
    {
        # code...
        return $this->hasMany(Resep::class);
    }

    public function tagihan()
    {
        # code...
        return $this->hasMany(Tagihan::class);
    }

    protected $hidden = [
        'prov_id',
    ];
}
