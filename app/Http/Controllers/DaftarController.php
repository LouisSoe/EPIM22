<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekstrakurikuler;
use App\Models\daftar;
use App\Models\User;

class daftarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $data = Ekstrakurikuler::findOrFail($id);

        return view('user.daftar',compact('data'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'setuju' => 'accepted'
        ]);
        $daftar = daftar::create([
            'user_id' => $request->user_id,
            'eskul_id' => $request->eskul_id,
            
        ]);
        return redirect()->route('homepage');
    }
    public function datapendaftaran()
    {
        $join = daftar::join('users', 'user_id', '=', 'users.id')
                    ->join('ekstrakurikulers', 'eskul_id', '=', 'ekstrakurikulers.id')
                    ->get(['users.*', 'ekstrakurikulers.nama_eskul','daftars.*']);
        // $data = User::all();
        $eskul = $join->sortBy('nama_eskul')->pluck('nama_eskul')->unique();
        return view('admin.dataPendaftaran', [
         // 'data' => $data,
         'eskul' => $eskul,
        //  'data' => $data,
         'join' => $join,
        ]);
    }
    // public function show($id)
    // {
    //     $data = Pendaftaran::findOrFail($id);
    //     $ekstras = ekstrakurikuler::all();
    //     return view('admin/dataPendaftaran', compact('data', 'ekstras'));
    //     $data = User::latest()->get();
    //     return view('admin.dataPendaftaran', compact('data'));
    // }
    public function destroy($id)
    {
        User::where('id', '=', $id)->update(['ekstrakurikuler_id'=>null]);
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
