<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Poli;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        // $dokters = Dokter::with('poli');

        // return view('pages.data_master.data_dokter.index', compact('dokters'));

        $keyword = $request->keyword;

        
        $dokters = Dokter::all();
        // $dokters = Dokter::where('nama', 'LIKE', '%' . $keyword . '%')
        //     ->paginate(5); //membuat data menjadi per page dengan data yang ditampilkan hanya 5
        // $dokters->withPath('dokter'); //meminimalisir kesalahan url
        // $dokters->appends($request->all()); //menelempar semua request yang diminta
        return view('pages.data_master.data_dokter.index', compact('dokters', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getPoli = Poli::all();

        return view('pages.data_master.data_dokter.create', compact('getPoli'));
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
        $dokter->poli_id = $request->spesialis; 
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
