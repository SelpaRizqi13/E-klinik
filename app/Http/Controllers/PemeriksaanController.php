<?php

namespace App\Http\Controllers;


use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Pegawai;
use App\Models\Tindakan;
use App\Models\Pemeriksaan;
use App\Models\Obat;
use App\Models\Rekam;
use App\Models\Resep;

use DB;
use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemeriksaan=Pemeriksaan::all();

        return view('pages.data_pasien.show', compact('pemeriksaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $getPasien=Pasien::all();
        $getDokter=Dokter::all();
        $getPegawai=Pegawai::all();
        $getTindakan=Tindakan::all();
        $getObat=Obat::all();
        

        return view('includes.modal_tindakan', compact('getPasien','getDokter','getPegawai','getTindakan','getObat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

        $pemeriksaan = new Pemeriksaan();
        $pemeriksaan->pasien_id=$request->pasien_id;
        $pemeriksaan->tindakan_id=$request->tindakan_id;
        $pemeriksaan->dokter_id=$request->dokter_id;
        $pemeriksaan->pegawai_id=$request->pegawai_id;
        $pemeriksaan->keluhan=$request->keluhan;
        $pemeriksaan->diagnosa=$request->diagnosa;
        $pemeriksaan->perkembangan=$request->perkembangan;
        
        // $pemeriksaan->tarif=$request->tindakan_id;
        $pemeriksaan->tanggal_pemeriksaan=$request->tanggal_pemeriksaan;
        $pemeriksaan->save();

        

        return redirect('pasien')->with('success', 'Data tindakan berhasil ditambahkan');
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
        $pasien = Pasien::find($id);
        $pemeriksaan = Pemeriksaan::where('pasien_id',$id)->get();

        $harga_total = 0;
        $harga_totobat=0;
        $total=0;
        $jumlah_obat=0;
        $harga_obat=0;

        $getPasien=Pasien::all();
        $getDokter=Dokter::all();
        $getPegawai=Pegawai::all();
        $getTindakan=Tindakan::all();
        $getObat=Obat::all();
        $getResep=Resep::where('pasien_id',$id)->get();
        
        // $getObat=Obat::all();
        return view('pages.data_pasien.show', compact('pasien','getPasien','getDokter','getPegawai','getTindakan', 'pemeriksaan', 'harga_total','getObat', 'getResep','total','harga_totobat','jumlah_obat','harga_obat'));
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
