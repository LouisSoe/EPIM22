<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekstrakurikuler;
use App\Models\daftar;
use App\Models\users;


class dataallsiswa extends Controller
{
 public function view()
 {
   $data = daftar::join('users', 'user_id', '=', 'users.id')
                    ->join('ekstrakurikulers', 'eskul_id', '=', 'ekstrakurikulers.id')
                    ->get(['daftars.*', 'ekstrakurikulers.nama_eskul', 'users.*']);
            // dd($data);
    return view('user.detail_all_siswa.detail_siswa',[
      'data' => $data,
     ]);
 }
}
