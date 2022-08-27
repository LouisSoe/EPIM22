<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userakun extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user',
            'password' => bcrypt('123456'),
            'email'  => 'user@email.com',
            'nim' => '112',
            'prodi' => 'jurusan',
            'no_hp' => '03223023023',
           ]);
        User::create([
            'name' => 'admin',
            'password' => bcrypt('123456'),
            'email'  => 'admin@email.com',
            'nim' => '002',
            'is_admin' => '1',
            'prodi' => 'jurusan',
            'no_hp' => '03223023023',
           ]);
    }
}
