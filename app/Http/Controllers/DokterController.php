<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters = Dokter::all();

        return view('pages.data_master.data_dokter.index', compact('dokters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokter = new Dokter();

        return view('pages.data_master.data_dokter.create', compact('dokter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokter = new Dokter();
        $dokter->nama = $request->nama;
        $dokter->alamat = $request->alamat; 
        $dokter->tanggal_lahir = $request->tanggal_lahir; 
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        $dokter->spesialis = $request->spesialis; 
        $dokter->no_hp = $request->no_hp;
        $dokter->save();

        return redirect('dokter')->with('success', 'Data Dokter Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = Dokter::find($id);
        return view('pages.data_master.data_dokter.show', compact('dokter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dokter = Dokter::find($id);

        return view('pages.data_master.data_dokter.edit', compact('dokter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $dokter = Dokter::find($id);
        $dokter->nama = $request->nama;
        $dokter->alamat = $request->alamat; 
        $dokter->tanggal_lahir = $request->tanggal_lahir; 
        $dokter->jenis_kelamin = $request->jenis_kelamin;
        $dokter->spesialis = $request->spesialis; 
        $dokter->no_hp = $request->no_hp;
        $dokter->save();

        return redirect('dokter')->with('success', 'Data Dokter Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = dokter::find($id);
        $model->delete();

        return redirect('dokter');
    }
}
