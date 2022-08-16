<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;
use Faker\Generator as faker;

class eskul extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
l        Ekstrakurikuler::create([
            'nama_eskul' => 'user',
            'image' => 'image',
            'deskripsi'  => 'deskripsi',
           ]);

           
    }
}
