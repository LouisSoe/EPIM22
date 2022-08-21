<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ekstrakurikuler;
use Faker\Generator as faker;
use DB;

class eskul extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// l        Ekstrakurikuler::create([
//             'nama_eskul' => 'user',
//             'image' => 'image',
//             'deskripsi'  => 'deskripsi',
//            ]);

            DB::table('ekstrakurikulers')->insert([
                'id' =>'1',
            'nama_eskul' => 'Pramuka',
            'cover' => 'cover/rReEcaLOjvcJjTIyqbMZuhpFQyJJAQmqiFqooBdq.jpg',
            'deskripsi' => 'Pramuka adalah nama organisasi pendidikan nonformal yang menyelenggarakan pendidikan kepanduan yang dilaksanakan di Indonesia. Kata “ pramuka merupakan singkatan dari Praja Muda Karana, yang memiliki arti Orang Muda yang Suka Berkarya. “Pramuka” merupakan sebutan bagi anggota gerakan pramuka, yang meliputi : Pramuka Siaga (7-10 tahun), Pramuka Penggalang (11-15 tahun), Pramuka Penegak (16-20 tahun) dan Pramuka Pandega  (21-25 tahun). Kelompok anggota yang lain yaituPembina Pramuka, Andalan Pramuka,Korps Pelatih Pramuka, Pamong, Saka Pramuka, Staf Kwartir, dan Majelis Pembimbing.',
            'created_at' =>'2022-08-18 22:11:40',
            'updated_at' =>  '2022-08-18 22:11:40',
        ]);
             DB::table('ekstrakurikulers')->insert([
                'id' =>'2',
            'nama_eskul' => 'Paskibra',
            'cover' => 'cover/1pQ547ysxUrmC7Kb1egtUvNuwqcDCbqyAr7yWUct.jpg',
            'deskripsi' => 'PASKIBRA merupakan salah satu ekstrakurikuler (ekskul) yang ada di SMA Plus Darussalam. Keberadaan Ekskul PASKIBRA mempunyai manfaat sangat banyak diantaranya bisa meningkatkan kedisiplinan siswa-siswi, membangkitkan jiwa nasionalisme pada anggotanya, sebagai wahana penyaluran bakat, memupuk rasa tanggung jawab dan membekali anggotanya dengan berbagai keterampilan untuk menyongsong masa depan.',
            'created_at' =>'2022-08-18 22:14:00',
            'updated_at' => '2022-08-18 22:14:00',
        ]);
              DB::table('ekstrakurikulers')->insert([
                'id' =>'3',
            'nama_eskul' => 'Palang Merah Remaja',
            'cover' => 'cover/47Ycl0CG2GjOPo9gJmljciG2VzS6KCicuFr8Rkya.jpg',
            'deskripsi' => 'Ekstrakurikuler Palang Merah Remaja (PMR) merupakan salah satu ekstrakurikuler yang bergerak dibidang kepalangmerahan dimana ekstrakurikuler Palang Merah Remaja (PMR) adalah wadah pembinaan anggota remaja dengan tujuan membangun dan mengembangkan karakter anggota PMR yang berpedoman pada tribakti PMR dan prinsip.', 
            'created_at' => '2022-08-18 22:14:53',
            'updated_at' =>'2022-08-18 22:14:53',
        ]);
               DB::table('ekstrakurikulers')->insert([
                'id' =>'4',
            'nama_eskul' => 'Basket',
            'cover' => 'cover/ClXBpLpSxZufZkdbDuK2b38ZokFipmYJxIkbLXKw.jpg',
            'deskripsi' => 'Kegiatan ekstrakurikuler bola basket merupakan salah satu kegiatan di luar jam pelajaran sekolah dan sebagai wahana untuk menampung, menyalurkan dan membina minat, bakat serta kegemaran peserta didik dalam mengikuti kegiatan ekstrakurikuler.',
            'created_at' => '2022-08-18 23:14:42',
            'updated_at' =>  '2022-08-18 23:14:42',
        ]);
                DB::table('ekstrakurikulers')->insert([
                'id' =>'5',
            'nama_eskul' => 'Paduan Suara',
            'cover' => 'cover/rmKrjJbGjFuGUtb98qBgY9Rw9BzlocnkEh6yZTri.jpg',
            'deskripsi' => 'Ekskul Paduan Suara di SMKN 3 Jember sudah berdiri sejak beberapa tahun yang lalu. Sebelum adanya padus itu nyanyi perkelas. Jadi mereka ada seperti audisi buat nyanyi di walikota atau gubernur, setelah mereka terpilih mereka berkumpul di sekolah lalu terfikirkan lah untuk membuat ekskul padus. Mereka tidak banyak orang. Cuma sekitar 4-5 orang saja tapi karena suara mereka bagus-bagus dan lantang jadi mereka bisa nyanyi dengan baik. Lalu dari situ mereka setiap senin menyanyi dan akhirnya terciptalah ekskul padus. Program ekstrakurikuler paduan suara merupakan tempat siswa/siswi untuk belajar dan melatih kekompakan dalam bernyanyi secara berkelompok maupun perorangan, ekskul ini berperan aktif dalam kegiatan Nasional seperti 17 Agustus, Sumpah pemuda, dll. Kegiatan berkala Paduan Suara adalah upacara bendera setiap hari Senin, mengikuti audisi paduan suara untuk tampil di kantor Walikota maupun kantor Gubernur. Ekskul Paduan Suara biasanya diadakan setiap hari Senin, Jumat dan hari hari tertentu jika sedang mempersiapkan hari Nasional. Biasanya Ekskul Paduan Suara dilakukan setelah pulang sekolah.',
            'created_at' => '2022-08-18 23:31:18',
            'updated_at' => '2022-08-18 23:31:18',
        ]);
                 DB::table('ekstrakurikulers')->insert([
                'id' =>'6',
            'nama_eskul' => 'Sepak Bola',
            'cover' => 'cover/1toK1jiwr9TkYVwnENBPVIVDGeqKOAtUV99nI4GE.jpg',
            'deskripsi' => 'Kegiatan ekstrakurikuler sepakbola merupakan kegiatan sekolah yang dilakukan di luar jam pelajaran dengan tujuan untuk memperdalam dan memperluas pengetahuan, meningkatkan prestasi, menyalurkan minat, dan bakat serta melengkapi upaya pembinaan manusia seutuhnya.',
            'created_at' => '2022-08-18 23:32:42',
            'updated_at' =>  '2022-08-18 23:32:42',
        ]);
                  DB::table('ekstrakurikulers')->insert([
                'id' =>'7',
            'nama_eskul' => 'Voli',
            'cover' => 'cover/b71n1ZyyA15OZIuHuEKCCJ2dQclpfU3WsXuiWOJO.jpg',
            'deskripsi' => 'Ekstrakurikuler bola voli merupakan media untuk mendorong prestasi non akademik, pertumbuhan fisik dan perkembangan psikis, meningkatkan kemampuan dan keterampilan dalam bermain bola voli supaya lebih baik, serta pembiasaan pola hidup sehat dengan berolahraga.',
            'created_at' => '2022-08-18 23:34:48',
            'updated_at' =>  '2022-08-18 23:34:48',
        ]);
                   DB::table('ekstrakurikulers')->insert([
                'id' =>'8',
            'nama_eskul' => 'Teater Kesenian',
            'cover' => 'cover/UkyIIBCVzZsd1X1XdCe7PIS3ZiFvJWTK2kdj0EgQ.jpg',
            'deskripsi' => 'Pengertian Seni Teater. Seni teater adalah jenis kesenian pertunjukan drama yang dipentaskan di atas panggung. Secara spesifik, seni teater merupakan sebuah seni drama yang menampilkan perilaku manusia dengan gerak, tari, dan nyanyian yang disajikan lengkap dengan dialog dan akting.',
            'created_at' => '2022-08-18 23:35:40',
            'updated_at' =>  '2022-08-18 23:35:40',
        ]);
                    DB::table('ekstrakurikulers')->insert([
                'id' =>'9',
            'nama_eskul' => 'Remaja Masjid',
            'cover' => 'cover/AENMQo71ds8BBum8Yram0qY1k21WxT7neac4Uumy.jpg',
            'deskripsi' => 'Remaja masjid atau sering dikenal berbagai nama seperti IRMAS, REMAS, ataupun PRISMA merupakan perkumpulan pemuda masjid yang melakukan aktivitas social dan ibadah di lingkungan suatu masjid.',
            'created_at' => '2022-08-18 23:37:45',
            'updated_at' =>  '2022-08-18 23:37:45',
        ]);


           
    }
}
