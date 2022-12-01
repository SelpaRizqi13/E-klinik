<?php

namespace Database\Seeders;
use App\Models\Obat;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ObatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $obats =[
            [
                'kode_obat'=>'OB001',
                'nama_obat'=>'Pondex',
                'jenis_obat'=>'Sirup',
                'kategori'=>'Analgestik',
                'stok'=>'10',
                'harga'=>'50000',
            ],
            [
                'kode_obat'=>'OB002',
                'nama_obat'=>'Ponstan',
                'jenis_obat'=>'Sirup',
                'kategori'=>'Analgestik',
                'stok'=>'20',
                'harga'=>'33500',
            ],
            [
                'kode_obat'=>'OB003',
                'nama_obat'=>'Pamol',
                'jenis_obat'=>'Strip',
                'kategori'=>'Demam',
                'stok'=>'50',
                'harga'=>'1700',
            ],
            [
                'kode_obat'=>'OB004',
                'nama_obat'=>'Kaflam 50 mg',
                'jenis_obat'=>'Butir',
                'kategori'=>'Anti Infalamasi',
                'stok'=>'50',
                'harga'=>'3500',
            ],
            [
                'kode_obat'=>'OB005',
                'nama_obat'=>'Cataflam 25 mg',
                'jenis_obat'=>'Kapsul',
                'kategori'=>'Anti Infalamasi',
                'stok'=>'100',
                'harga'=>'2500',
            ],
        ];
        foreach ($obats as $key => $value) {
            Obat::create($value);
        }
    }
}
