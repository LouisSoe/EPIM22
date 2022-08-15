<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class DaftarController extends Controller
{

    public function index()
    {
        return view('user.daftar');
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
            return redirect()->route('detail')->with('success', 'Data Berhasil Dikirim');
        }else{
            return redirect()->back()->withInput()->with('error', 'Data Gagal Dikirim');
        }
    }

    public function dataPendaftaran()
    {
        $data = Pendaftaran::latest()->get();
        return view('admin/dataPendaftaran', compact('data'));
    }
    public function show($id)
    {
        $data = Pendaftaran::findOrFail($id);
        return view('admin/dataPendaftaran', compact('data'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $daftar = Pendaftaran::findOrFail($id);
        $daftar->destroy();
        if($daftar){
            return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');
        } else {
            return redirect()->route('ekstrakurikuler.index')->with('error', 'Ekstrakurikuler gagal ditambahkan');

        }
    }
}
