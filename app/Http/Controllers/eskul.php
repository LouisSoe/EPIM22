<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class eskul extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        return view('admin.ekstrakurikuler.index', compact('ekstrakurikuler'));
    }
    public function view()
    {
        $eskul = Ekstrakurikuler::all();
        return view('index', compact('eskul'));
    }
    public function detail($id)
    {
        $eskul = Ekstrakurikuler::findOrFail($id);
        // $datas = Ekstrakurikuler::all();
        return view('user.detail',compact('eskul'));
    }

    public function create()
    {
        return view('admin.ekstrakurikuler.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_eskul' => 'required|string',
            'deskripsi' => 'required',
            // 'gambar' => 'required'
        ]);

        $eskul = Ekstrakurikuler::create([
            'nama_eskul' => $request->nama_eskul,
            'deskripsi' => $request->deskripsi,
            // 'gambar' => $request->file('gambar')->store('ekstra')
        ]);
        if ($eskul) {
            return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');
        } else {
            return redirect()->back()->withInput()->with('error', 'Ekstrakurikuler gagal ditambahkan');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);
        return view('admin.ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id)
    {
        $eskul = Ekstrakurikuler::findOrFail($id);
        $this->validate($request, [
            'nama_eskul' => 'required|string',
            'deskripsi' => 'required',
            // 'gambar' => 'required'
        ]);
        $eskul->update([
            'nama_eskul' => $request->nama_eskul,
            'deskripsi' => $request->deskripsi,
            // 'gambar' => $request->file('gambar')->store('ekstra')
        ]);
        if ($eskul) {
            return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');
        } else {
            return redirect()->back()->withInput()->with('error', 'Ekstrakurikuler gagal ditambahkan');
        }
    }

    public function destroy($id)
    {
        $eskul = Ekstrakurikuler::findOrFail($id);
        $eskul->delete();
                    return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');

        // if ($eskul) {
        //     return redirect()->route('ekstrakurikuler.index')->with('success', 'Ekstrakurikuler berhasil ditambahkan');
        // } else {
        //     return redirect()->route('ekstrakurikuler.index')->with('error', 'Ekstrakurikuler gagal ditambahkan');
        // }
    }
}
