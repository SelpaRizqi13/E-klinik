<?php

namespace Database\Seeders;
use App\Models\Pasien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PasienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pasiens =[
            
            [
                'no_rm'=>'RM-0001',
                'tanggal_pendaftaran'=>'2022-10-10',
                'nik'=>'6782637481723',
                'nama_pasien'=>'Fitri',
                'gol_darah'=>'a',
                'jenis_kelamin'=>'Perempuan',
                'tempat_lahir'=>'Bandung',
                'tanggal_lahir'=>'2000-10-11',
                'agama'=>'Islam',
                'status'=>'belum menikah',
                'pekerjaan'=>'buruh',
                'no_hp'=>'089765748378',
                'provinsi'=>'Jawa Barat',
                'kabupaten'=>'bandung',
                'kecamatan'=>'paseh',
                'desa'=>'mekarpawitan',
                'alamat'=>'sukasari',
                'nama_penjawab'=>'usep',
                's_hubungan'=>'ayah',
                'no_hp_penjawab'=>'087857857493',
                'alamat_penjawab'=>'sukasari',
            ],
        ];
        foreach ($pasiens as $key => $value) {
            Pasien::create($value);
        }
    }
}
