<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =
        [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => '$2y$10$8oIu5ryJtnZLq2bUmw99QenX.p8jHTiyLZi7t/8CtG8Ld0HX5GP0G',
            ],
            [
                'name' => 'Super Admin',
                'email' => 'suadmin@gmail.com',
                'role' => 'super admin',
                'password' => '$2y$10$8oIu5ryJtnZLq2bUmw99QenX.p8jHTiyLZi7t/8CtG8Ld0HX5GP0G',
            ],
            [
                'name' => 'dokter',
                'email' => 'dokter@gmail.com',
                'role' => 'dokter',
                'password' => '$2y$10$8oIu5ryJtnZLq2bUmw99QenX.p8jHTiyLZi7t/8CtG8Ld0HX5GP0G',
            ],
            [
                'name' => 'apoteker',
                'email' => 'apoteker@gmail.com',
                'role' => 'apoteker',
                'password' => '$2y$10$8oIu5ryJtnZLq2bUmw99QenX.p8jHTiyLZi7t/8CtG8Ld0HX5GP0G',
            ],
            ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
