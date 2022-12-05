<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }

    public function pemeriksaan()
    {
        return $this->belongsTo(Pemeriksaan::class);
    }
    public function resep()
    {
        return $this->belongsTo(Resep::class);
    }

    protected $hidden = [
        'pasien_id',
    ];
}
