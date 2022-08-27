<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar;
use App\Models\requesthapus;
use Auth;

class requesthapusdata extends Controller
{
    public function index($id)
    {
        $cek = daftar::where('user_id', Auth::user()->id)->first();
        return view('user.requesthapusdata',compact('cek'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
         $query = requesthapus::join('users', 'user_id', '=', 'users.id')
                    ->join('ekstrakurikulers', 'eskul_id', '=', 'ekstrakurikulers.id')
                    ->get(['requesthapuses.*', 'ekstrakurikulers.nama_eskul', 'users.name']);
        return view('admin.requestpenghapusan.index',compact('query'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'alasan' => 'required',
        ]);

        $requesthapus = requesthapus::create([
            'alasan' => $request->alasan,
            'daftar_id' => $request->daftar_id,
            'user_id' => $request->user_id,
            'eskul_id' => $request->eskul_id
        ]);
        return redirect()->route('homepage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($eskul_id)
    {
        $admin = requesthapus::find($eskul_id);
        $eskul_id = daftar::find($eskul_id);
        $eskul_id->delete();
        $admin->delete();

        // $eskul_id = daftar::find($eskul_id);
        // $cek = daftar::where('id', $eskul_id)->first();
        // $eskul_id->delete();
        // $admin = requesthapus::find($eskul_id);
        // $admin->delete();

        return redirect()->route('admin.page');

    }
}
