<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class eskul_image extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('eskul_images')->insert([
            'id' => '1',
            'eskul_id' => '1' ,
            'image' => 'eskul_image/ekstra/a26398dca6f47b49876cbaffbc9954f9.jpeg',
            'created_at' => '2022-08-18 22:11:40',
            'updated_at' => '2022-08-18 22:11:40',
        ]);
          DB::table('eskul_images')->insert([
            'id' => '2',
            'eskul_id' => '2' ,
            'image' => 'eskul_image/ekstra/8b3bac12926cc1d9fb5d68783376971d.jpeg|eskul_image/ekstra/e9287a53b94620249766921107fe70a3.jpeg' ,
            'created_at' => '2022-08-18 22:14:00',
            'updated_at' => '2022-08-18 22:14:00',
        ]);
           DB::table('eskul_images')->insert([
            'id' => '3',
            'eskul_id' => '3' ,
            'image' => 'eskul_image/ekstra/79e785d63f00348ff360d5a86528580b.jpeg' ,
            'created_at' => '2022-08-18 22:14:53',
            'updated_at' => '2022-08-18 22:14:53',
        ]);
            DB::table('eskul_images')->insert([
            'id' => '4',
            'eskul_id' => '4' ,
            'image' => 'eskul_image/ekstra/496bd33584d955e3913f1a3e82bb2f2d.jpeg' ,
            'created_at' => '2022-08-18 23:14:42',
            'updated_at' => '2022-08-18 23:14:42',
        ]);
             DB::table('eskul_images')->insert([
            'id' => '5',
            'eskul_id' => '5' ,
            'image' => 'eskul_image/ekstra/ecdcd675b3a4cbb5578baf72f255ec21.jpg' ,
            'created_at' => '2022-08-18 23:31:18',
            'updated_at' => '2022-08-18 23:31:18',
        ]);
              DB::table('eskul_images')->insert([
            'id' => '6',
            'eskul_id' => '6' ,
            'image' => 'eskul_image/ekstra/a6197a578fe7778e8d49a95ac425bcfc.jpeg' ,
            'created_at' => '2022-08-18 23:32:42',
            'updated_at' => '2022-08-18 23:32:42',
        ]);
               DB::table('eskul_images')->insert([
            'id' => '7',
            'eskul_id' => '7' ,
            'image' => 'eskul_image/ekstra/b8ffa41d4e492f0fad2f13e29e1762eb.jpg' ,
            'created_at' => '2022-08-18 23:34:48',
            'updated_at' => '2022-08-18 23:34:48',
        ]);
                DB::table('eskul_images')->insert([
            'id' => '8',
            'eskul_id' => '8' ,
            'image' => 'eskul_image/ekstra/f629ed9325990b10543ab5946c1362fb.jpeg' ,
            'created_at' => '2022-08-18 23:35:40',
            'updated_at' => '2022-08-18 23:35:40',
        ]);
                 DB::table('eskul_images')->insert([
            'id' => '9',
            'eskul_id' => '9' ,
            'image' => 'eskul_image/ekstra/7171e95248ff768e1ebee3edde01ea7a.jfif' ,
            'created_at' => '2022-08-18 23:37:45',
            'updated_at' => '2022-08-18 23:37:45',
        ]);
    }
}
