<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }

    public function dokter()
    {
        # code...
        return $this->belongsTo(Dokter::class, 'dokter_id', 'id');
    }

    public function pegawai()
    {
        # code...
        return $this->belongsTo(Pegawai::class, 'pegawai_id', 'id');
    }

    public function tindakan()
    { 
        # code...
        return $this->belongsTo(Tindakan::class, 'tindakan_id', 'id');
    }

    
}
