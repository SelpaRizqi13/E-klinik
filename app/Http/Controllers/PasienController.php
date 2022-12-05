<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;
use App\Models\Pasien;
use Illuminate\Http\Request;
use DB;
use DateTime;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasiens = Pasien::all();

        return view('pages.data_pasien.index', compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $getkode = DB::table('pasiens')->select(DB::raw('MAX(RIGHT(no_rm, 4)) as kode'));
        $kd = '';
        if ($getkode->count() > 0) {
            foreach ($getkode->get() as $k) {
                $tmp = ((int) $k->kode) + 1;
                $kd = sprintf('%04s', $tmp);
            }
        } else {
            $kd = '0001';
        }

    
        $getProvinsi = Province::all();
        $getKabupaten = Regency::all();
        $getKecamatan = District::all();
        $getDesa = Village::all();
        $pasien= new Pasien();
        $ldate = date('dd-mm-yyyy');

        return view('pages.data_pasien.create', compact('getKecamatan','getDesa','pasien','getKabupaten', 'kd', 'getProvinsi','ldate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = new Pasien();
        $pasien->no_rm  = $request->no_rm;
        $pasien->tanggal_pendaftaran = $request->tanggal_pendaftaran;
        $pasien->nik= $request->nik;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->gol_darah = $request->gol_darah;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->tempat_lahir = $request->tempat_lahir;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->agama = $request->agama;
        $pasien->status = $request->status;
        $pasien->pekerjaan= $request->pekerjaan;
        $pasien->no_hp= $request->no_hp;
        $pasien->prov_id= $request->provinsi;
        $pasien->kabupaten= $request->kabupaten;
        $pasien->kecamatan= $request->kecamatan;
        $pasien->desa= $request->desa;
        $pasien->alamat= $request->alamat;
        $pasien->nama_penjawab= $request->nama_penjawab;
        $pasien->s_hubungan= $request->s_hubungan;
        $pasien->no_hp_penjawab= $request->no_hp_penjawab;
        $pasien->alamat_penjawab= $request->alamat_penjawab;
        $pasien->save();

        return redirect('pasien')->with('success', 'Data Pasien Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('pages.data_pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $getProvinsi = Province::all();
        $getKabupaten = Regency::all();
        $getKecamatan = District::all();
        $getDesa = Village::all();
        $pasien = Pasien::find($id);

        return view('pages.data_pasien.edit', compact('pasien', 'getDesa', 'getKecamatan', 'getKabupaten', 'getProvinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pasien = Pasien::find($id);
        $pasien->no_rm  = $request->no_rm;
        $pasien->tanggal_pendaftaran = $request->tanggal_pendaftaran;
        $pasien->nik= $request->nik;
        $pasien->nama_pasien = $request->nama_pasien;
        $pasien->gol_darah = $request->gol_darah;
        $pasien->jenis_kelamin = $request->jenis_kelamin;
        $pasien->tempat_lahir = $request->tempat_lahir;
        $pasien->tanggal_lahir = $request->tanggal_lahir;
        $pasien->agama = $request->agama;
        $pasien->status = $request->status;
        $pasien->pekerjaan= $request->pekerjaan;
        $pasien->no_hp= $request->no_hp;
        $pasien->prov_id= $request->provinsi;
        $pasien->kabupaten= $request->kabupaten;
        $pasien->kecamatan= $request->kecamatan;
        $pasien->desa= $request->desa;
        $pasien->alamat= $request->alamat;
        $pasien->nama_penjawab= $request->nama_penjawab;
        $pasien->s_hubungan= $request->s_hubungan;
        $pasien->no_hp_penjawab= $request->no_hp_penjawab;
        $pasien->alamat_penjawab= $request->alamat_penjawab;
        
        $pasien->save();

        return redirect('pasien')->with('success', 'Data Pasien Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = pasien::find($id);
        $model->delete();

        return redirect('pasien');
    }

    
    public function kabupaten(request $request)
    {
        $id_provinsi = $request->id_provinsi;
        
        $kabupatens = Regency::where('province_id',$id_provinsi)->get();
        $option = "<option>--Pilih Kabupaten--</option>";
        
        foreach ($kabupatens as $key => $kabupaten) {
            # code...
            $option.= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }
        echo $option;
    }
    public function kecamatan(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;
    
        $kecamatans = District::where('regency_id',$id_kabupaten)->get();
    
        $option = "<option>--Pilih Kecamatan--</option>";
        foreach ($kecamatans as $key => $kecamatan) {
            # code...
            $option.= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }
    public function desa(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;
    
        $villages = Village::where('district_id',$id_kecamatan)->get();

        $option = "<option>--Pilih Desa--</option>";
        foreach ($villages as $key => $desa) {
            # code...
            $option.= "<option value='$desa->id'>$desa->name</option>";
        }
        echo $option;
    }
}
