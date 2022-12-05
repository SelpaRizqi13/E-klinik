<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
        UserTableSeeder::class,
        PoliTableSeeder::class,
        PegawaiTableSeeder::class,
        TindakanTableSeeder::class,
        ObatTableSeeder::class,
        DokterTableSeeder::class,
        PasienTableSeeder::class,
        WilayahTableSeeder::class,
        TagihanTableSeeder::class,
        IndoRegionSeeder::class,
        

        
    ]);
    }
}
