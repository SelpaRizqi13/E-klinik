<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obats= Obat::all();
        return view('pages.data_master.data_obat.index', compact('obats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat= new Obat();

        return view('pages.data_master.data_obat.create', compact('obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat=new Obat();
        $obat->kode_obat= $request->kode_obat;
        $obat->nama_obat=$request->nama_obat;
        $obat->kategori = $request->kategori;
        $obat->stok = $request->stok;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->harga =$request->harga;
        $obat->save();


        return redirect('obat')->with('success', 'Tambah Data Obat Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $obat = Obat::find($id);
        return view('pages.data_master.data_obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $obat = Obat::find($id);

        return view('pages.data_master.data_obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $obat= Obat::find($id);
        $obat->kode_obat= $request->kode_obat;
        $obat->nama_obat=$request->nama_obat;
        $obat->kategori = $request->kategori;
        $obat->stok = $request->stok;
        $obat->jenis_obat = $request->jenis_obat;
        $obat->harga =$request->harga;
        $obat->save();


        return redirect('obat')->with('success', 'Update Data Obat Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $model = obat::find($id);
        $model->delete();

        return redirect('obat');
    }
}
