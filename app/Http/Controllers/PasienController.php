<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use DB;

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
    public function create()
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
        $pasien= new Pasien();

        return view('pages.data_pasien.create', compact('pasien', 'kd'));
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
        $pasien->provinsi= $request->provinsi;
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
        $pasien = Pasien::find($id);

        return view('pages.data_pasien.edit', compact('pasien'));
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
        $pasien->provinsi= $request->provinsi;
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
}
