<?php

namespace Database\Seeders;
use App\Models\Tindakan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TindakanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tindakans =[
            [
                'kode_tindakan'=>'T0001',
                'nama_tindakan' => 'Injeksi',
                'harga'=>'15000'
            ],
            [
                'kode_tindakan'=>'T0002',
                'nama_tindakan' => 'Pasang Infus',
                'harga'=>'32000'
            ],
            [
                'kode_tindakan'=>'T0003',
                'nama_tindakan' => 'Buka Gips',
                'harga'=>'90000'
            ],
            [
                'kode_tindakan'=>'T0004',
                'nama_tindakan' => 'Ganti Perban',
                'harga'=>'25000'
            ],
            [
                'kode_tindakan'=>'T0005',
                'nama_tindakan' => 'Rawat Inap',
                'harga'=>'85000'
            ],
            ];
            foreach ($tindakans as $key => $value) {
                Tindakan::create($value);
            }
    }
}
