<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        return view('admin.ekstrakurikuler.index');
    }

    public function create()
    {
        return view('admin.ekstrakulikuler.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|string',
            'keterangan' => 'required',
            'status' => 'required|numeric',
            'gambar' => 'required'
        ]);

        $ekstra = Ekstrakurikuler::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
            'gambar' => $request->file('gambar')->store('ekstra')
        ]);

        if($ekstra)
        {
            return redirect()->route('admin.ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');
        }
        else
        {
            return redirect()->back()->withInput()->with('error', 'Ekstrakurikuler gagal ditambahkan');
        }

    }

    public function show($id)
    {
        //
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
        //
    }
}
