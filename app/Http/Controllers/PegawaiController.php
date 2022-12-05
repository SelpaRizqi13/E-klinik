<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Poli;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pegawais = Pegawai::all();
        return view('pages.data_master.data_pegawai.index', compact('pegawais','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getPoli = Poli::all();

        return view('pages.data_master.data_pegawai.create', compact('getPoli'));
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai= new Pegawai();
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->tanggal_lahir = $request->tanggal_lahir; 
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->poli_id= $request->jabatan;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();

        return redirect('pegawai')->with('success', 'Tambah Data Berhasil');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        

        return view('pages.data_master.data_pegawai.show', compact('pegawai'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
    
        return view('pages.data_master.data_pegawai.edit', compact('pegawai'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pegawai= Pegawai::find($id);
        $pegawai->nama_pegawai = $request->nama_pegawai;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->jabatan= $request->jabatan;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->alamat = $request->alamat;
        $pegawai->save();
    
        return redirect('pegawai')->with('success', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $model = pegawai::find($id);
        $model->delete();

        return redirect('pegawai');
    }
}
