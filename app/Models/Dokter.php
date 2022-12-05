<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','nama', 'alamat','tanggal_lahir', 'jenis_kelamin','no_hp','poli_id',
    ];

    public function poli()
    {
        return $this->belongsTo(Poli::class, 'poli_id', 'id');
    }

    public function pemeriksaan()
    {
        # code...
        return $this->hasMany(Pemeriksaan::class);
    }
    
    protected $hidden = [
        'poli_id',
    ];
}
