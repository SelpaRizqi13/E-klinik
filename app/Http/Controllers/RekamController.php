<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Pegawai;
use App\Models\Tindakan;
use App\Models\Rekam;
use App\Models\Pemeriksaan;
use App\Models\Resep;
use Illuminate\Http\Request;

class RekamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $rekam=Rekam::all();
        $pasien=Pasien::all();
        $pemeriksaan=Pemeriksaan::all();
        $resep=Resep::all();
        $getdata=Rekam::with('pasien','pemeriksaan','resep');

        return view('pages.tagihan.index', compact('rekam', 'pasien', 'pemeriksaan', 'resep', 'getdata'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $rekam= new Rekam();
        
        $rekam->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::find($id);
        $getPasien=Pasien::all();
        $getDokter=Dokter::all();
        $getPegawai=Pegawai::all();
        $getTindakan=Tindakan::all();
        // $getObat=Obat::all();
        return view('pages.data_pasien.show', compact('pasien','getPasien','getDokter','getPegawai','getTindakan'));
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
