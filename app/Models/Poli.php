<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;

    public function dokter() 
    {
        # code...
        return $this->hasMany(Dokter::class, 'poli_id', 'id');
        
    }
    public function pegawai()
    {
        # code...
        return $this->hasMany(Pegawai::class, 'poli_id', 'id');
        
    }
}
