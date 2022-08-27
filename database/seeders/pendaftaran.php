<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\daftar;
use Faker\Factory as Faker;
class pendaftaran extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
 
        for($i = 1; $i <= 10; $i++){
        daftar::create([
            'user_id' => $faker->shuffle('1','2'),
            'eskul_id' => $faker->randomDigitNot(0),
           ]);
        }
    }
}
