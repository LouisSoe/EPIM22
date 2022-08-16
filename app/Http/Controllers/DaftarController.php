<?php

namespace App\Http\Controllers;

use App\Models\ekstrakurikuler;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\User;

class DaftarController extends Controller
{

    public function index($id)
    {
        // $data = User::findOrFail($id);
        $ekstras = ekstrakurikuler::all();
        return view('user.daftar', compact('data', 'ekstras'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'nim' => 'required',
            'prodi' => 'required',
            'no_hp' => 'required',
            'alasan' => 'required'
        ]);

        $daftar = Pendaftaran::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'no_hp' => $request->no_hp,
            'alasan' => $request->alasan,
        ]);

        if($daftar)
        {
            return redirect()->route('homepage')->with('success', 'Data Berhasil Dikirim');
        }else{
            return redirect()->back()->withInput()->with('error', 'Data Gagal Dikirim');
        }
    }

    public function datapendaftaran()
    {
        $data = Pendaftaran::latest()->get();
        return view('admin/dataPendaftaran', compact('data'));
    }
    public function show($id)
    {
        $data = Pendaftaran::findOrFail($id);
        $ekstras = ekstrakurikuler::all();
        return view('admin/dataPendaftaran', compact('data', 'ekstras'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $daftar = User::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|string',
            'nim' => 'required',
            'prodi' => 'required',
            'no_hp' => 'required',
            'alasan' => 'required'
        ]);

        $daftar->update([
            'name' => $request->name,
            'nim' => $request->nim,
            'ekstrakurikuler_id' => $request->ekstrakurikuler_id,
            'prodi' => $request->prodi,
            'no_hp' => $request->no_hp,
            'alasan' => $request->alasan,
        ]);

        if($daftar)
        {
            return redirect()->route('homepage')->with('success', 'Data Berhasil Dikirim');
        }else{
            return redirect()->back()->withInput()->with('error', 'Data Gagal Dikirim');
        }
    }

    public function destroy($id)
    {
        $daftar = User::findOrFail($id);
        

        $daftar->update([
            'ekstrakurikuler_id' => null,
        ]);
    }
}
