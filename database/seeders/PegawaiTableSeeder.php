<?php

namespace Database\Seeders;
use App\Models\Pegawai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawais = [
            [
                'nama_pegawai' => 'Selpa',
                'tanggal_lahir'=>'1998-10-10',
                'jenis_kelamin' =>'Perempuan',
                'poli_id' => '1',
                'no_hp'=>'087654654276',
                'alamat' => 'Sukasari Majalaya'
            ],
            [
                'nama_pegawai' => 'Selpa',
                'tanggal_lahir'=>'1998-10-10',
                'jenis_kelamin' =>'Perempuan',
                'poli_id' => '2',
                'no_hp'=>'087654654276',
                'alamat' => 'Sukasari Majalaya'
            ],
            [
                'nama_pegawai' => 'Selpa',
                'tanggal_lahir'=>'1998-10-10',
                'jenis_kelamin' =>'Perempuan',
                'poli_id' => '3',
                'no_hp'=>'087654654276',
                'alamat' => 'Sukasari Majalaya'
            ],
            [
                'nama_pegawai' => 'elpa',
                'tanggal_lahir'=>'1998-10-10',
                'jenis_kelamin' =>'Perempuan',
                'poli_id' => '4',
                'no_hp'=>'087654654276',
                'alamat' => 'Majalaya'
            ],
            [
                'nama_pegawai' => 'Selpa',
                'tanggal_lahir'=>'1998-10-10',
                'jenis_kelamin' =>'Perempuan',
                'poli_id' => '2',
                'no_hp'=>'087654654276',
                'alamat' => 'Sukasari Majalaya'
            ],
            [
                'nama_pegawai' => 'Selpa Rizqi',
                'tanggal_lahir'=>'1998-10-10',
                'jenis_kelamin' =>'Perempuan',
                'poli_id' => '3',
                'no_hp'=>'087654654276',
                'alamat' => 'Sukasari'
            ],

            ];
            foreach ($pegawais as $value) {
                Pegawai::create($value);
            }
    }
}
