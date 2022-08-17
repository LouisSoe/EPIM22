<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ekstrakurikuler;
use App\Models\daftar;

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
    public function destroy($id)
    {
        //
    }
}
