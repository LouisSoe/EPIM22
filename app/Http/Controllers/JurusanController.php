<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $data = Jurusan::all();
        return view('admin.jurusan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.jurusan.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_jurusan' => 'required|string'
        ]);
        $jurusan = Jurusan::create([
            'nama_jurusan' => $request->nama_jurusan
        ]);
        if($jurusan){
            return redirect()->route('jurusan.index')->with('success', 'Jurusan Berhasil Ditambahkna');
        }else{
            return redirect()->back()->withInput()->with('error', 'Jurusan Gagal Ditambahkan');
        }
    }

    public function edit($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $this->validate($request, [
            'nama_jurusan' => 'required|string'
        ]);
        $jurusan->update([
            'nama_jurusan' => $request->nama_jurusan
        ]);
        if($jurusan){
            return redirect()->route('jurusan.index')->with('success', 'Jurusan Berhasil Ditambahkna');
        }else{
            return redirect()->back()->withInput()->with('error', 'Jurusan Gagal Ditambahkan');
        }
    }

    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('success', 'Jurusan Berhasil Dihapus');
    }
}
