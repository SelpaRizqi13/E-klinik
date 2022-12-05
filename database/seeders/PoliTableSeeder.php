<?php

namespace Database\Seeders;
use App\Models\Poli;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class PoliTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $polis =[
            [
                'nama_poli'=>'Poli Gigi',
                'lantai'=>'1',
            ],
            [
                'nama_poli'=>'Poli Umum',
                'lantai'=>'2',
            ],
            [
                'nama_poli'=>'Poli Dalam',
                'lantai'=>'4',
            ],
            [
                'nama_poli'=>'Apotek',
                'lantai'=>'1',
            ],
            [
                'nama_poli'=>'Poli Anak',
                'lantai'=>'3',
            ],

        ];
        foreach ($polis as $key => $value) {
            Poli::create($value);
        }
    }
}
