<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    use HasFactory;

    public function pemeriksaan()
    {
        # code...
        return $this->hasMany(Pemeriksaan::class);
    }
}
