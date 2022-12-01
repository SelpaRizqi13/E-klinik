<?php

namespace Database\Seeders;
use App\Models\Dokter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DokterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokters =[
            [
                'nama'=>'Arnold',
                'alamat'=>'Buah Batu',
                'tanggal_lahir'=>'1990-01-13',
                'jenis_kelamin'=>'laki laki',
                'spesialis'=>'Umum',
                'no_hp'=>'085768542654',
            ],
            [
                'nama'=>'Bagas',
                'alamat'=>'Kircon',
                'tanggal_lahir'=>'1890-12-20',
                'jenis_kelamin'=>'laki laki',
                'spesialis'=>'Poli Dalam',
                'no_hp'=>'081237892687',
            ],
            [
                'nama'=>'Arsyila',
                'alamat'=>'Dago',
                'tanggal_lahir'=>'1992-10-10',
                'jenis_kelamin'=>'perempuan',
                'spesialis'=>'Poli Gigi',
                'no_hp'=>'085862453765',
            ],
            [
                'nama'=>'Zahra',
                'alamat'=>'Gatot Subroto',
                'tanggal_lahir'=>'1990-08-18',
                'jenis_kelamin'=>'perempuan',
                'spesialis'=>'Poli Gigi',
                'no_hp'=>'082456789243',
            ],
            [
                'nama'=>'Andres',
                'alamat'=>'Antapani',
                'tanggal_lahir'=>'1991-05-27',
                'jenis_kelamin'=>'laki laki',
                'spesialis'=>'Poli Umum',
                'no_hp'=>'087456276876',
            ],
        ];
        foreach ($dokters as $key => $value) {
            Dokter::create($value);
        }
    }
}
