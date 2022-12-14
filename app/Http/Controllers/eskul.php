<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use App\Models\eskul_image;
use Illuminate\Support\Facades\Storage;
use DB;


class eskul extends Controller
{
    public function index()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        return view('admin.ekstrakurikuler.index', [
        'ekstrakurikuler' => $ekstrakurikuler,
        ]);
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

        return view('user.detail', compact('eskul'));
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
            'image' => 'required',
            'cover' => 'required'
        ]);

        $eskul = Ekstrakurikuler::create([
            'nama_eskul' => $request->nama_eskul,
            'deskripsi' => $request->deskripsi,
            'cover' => $request->file('cover')->store('cover')
        ]);

        $image = array();
        if($files = $request->file('image')){
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'eskul_image/ekstra/';
                $image_url = $upload_path.$image_full_name;
                $file->move($upload_path, $image_full_name);
                $image[] = $image_url;
            }
        }
        $image = eskul_image::create([
           'eskul_id' => $eskul->id,
            'image' => implode('|', $image),
        ]);
        //             'image' => implode('|', $image),
        
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
    }
}
