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
        $daftar = daftar::create([
            'user_id' => $request->user_id,
            'eskul_id' => $request->eskul_id,
            
        ]);
        return redirect()->route('homepage');
    }
    public function datapendaftaran()
    {
        $data = User::all();
        return view('admin/dataPendaftaran', compact('data'));
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
      $user = Auth::user()->id;
        $user->update([
            'ekstrakurikuler_id' => null,
        ]);
    }
}
