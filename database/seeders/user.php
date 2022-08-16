<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
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
            'ekstrakurikulers_id' => '1',
            'no_hp' => '03223023023',
           ]);
    }
}
