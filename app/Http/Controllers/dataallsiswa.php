<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekstrakurikuler;
use App\Models\daftar;
use Illuminate\Support\Facades\DB;

class dataallsiswa extends Controller
{
 public function view(Request $request)
 {
   $query = daftar::join('users', 'user_id', '=', 'users.id')
                    ->join('ekstrakurikulers', 'eskul_id', '=', 'ekstrakurikulers.id')
                    ->get(['daftars.*', 'ekstrakurikulers.nama_eskul', 'users.*']);
    $eskul = ekstrakurikuler::all();
    return view('user.detail_all_siswa.detail_siswa',[
      'daftar' => $query,
      'eskul' => $eskul
     ]);
 }
 public function getdata(Request $request)
 {
  $daftar = DB::table('daftars')
                    ->select('daftars.*', 'ekstrakurikulers.*', 'users.name')
                    ->join('ekstrakurikulers', 'ekstrakurikulers.id', '=', 'daftars.eskul_id')
                    ->join('users', 'users.id', '=', 'daftars.user_id')
                    ->where('daftars.eskul_id', $request->id)
                    ->get();
  return response()->json($daftar);
 }
}
