<?php

namespace App\Http\Controllers;

use App\Models\ekstrakurikuler;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class DaftarController extends Controller
{

    public function index()
    {
       
        return view('user.daftar');
    }


    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'nama' => 'required|string',
    //         'nim' => 'required',
    //         'prodi' => 'required',
    //         'no_hp' => 'required',
    //         'alasan' => 'required'
    //     ]);

    //     $daftar = Pendaftaran::create([
    //         'nama' => $request->nama,
    //         'nim' => $request->nim,
    //         'prodi' => $request->prodi,
    //         'no_hp' => $request->no_hp,
    //         'alasan' => $request->alasan,
    //     ]);

    //     if($daftar)
    //     {
    //         return redirect()->route('homepage')->with('success', 'Data Berhasil Dikirim');
    //     }else{
    //         return redirect()->back()->withInput()->with('error', 'Data Gagal Dikirim');
    //     }
    // }

    public function datapendaftaran()
    {
        $data = User::latest()->get();
        return view('admin.dataPendaftaran', compact('data'));
    }
    // public function show($id)
    // {
    //     $data = User::findOrFail($id);
    //     $ekstras = ekstrakurikuler::all();
    //     return view('admin/dataPendaftaran', compact('data', 'ekstras'));
    // }

    public function edit($id)
    {      
      $data = Ekstrakurikuler::findOrFail($id);

        return view('user.daftar',compact('data'));

    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            
            'ekstrakurikulers_id' => $request->ekstrakurikulers_id,
            
        ]);
        if($user)
        {
            return redirect()->route('homepage')->with('success', 'Data Berhasil Dikirim');
        }else{
            return redirect()->back()->withInput()->with('error', 'Data Gagal Dikirim');
        }
    }

    public function destroy($id)
    {
        $user = Auth::user()->id;
        $user->update([
            'ekstrakurikuler_id' => null,
        ]);
    }
}
