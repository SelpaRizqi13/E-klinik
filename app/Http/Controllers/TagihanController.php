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
use App\Models\Tagihan;
use Illuminate\Http\Request;
use PDF;

class TagihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $pasiens = Pasien::all();

        return view('pages.tagihan.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::find($id);
        $pemeriksaan = Pemeriksaan::where('pasien_id',$id)->get();

        $harga_total = 0;
        $harga_totobat=0;
        $harga_periksa=0;
        $total=0;
        $total_obat=0;
        $harga_obat=0;

        $getPasien=Pasien::all();
        $getDokter=Dokter::all();
        $getPegawai=Pegawai::all();
        $getTindakan=Tindakan::all();
        $getObat=Obat::all();
        $getResep=Resep::where('pasien_id',$id)->get();
        
        // $getObat=Obat::all();
        return view('pages.tagihan.show', compact('pasien','getPasien','getDokter','getPegawai','getTindakan', 'pemeriksaan', 'total_obat','getObat', 'getResep','total','harga_totobat','harga_obat','harga_periksa'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tagihan  $tagihan
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
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tagihan  $tagihan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetak_pdf($id)
    {
        $tagihan = Pegawai::all();
        $pasien = Pasien::find($id);
        $pemeriksaan = Pemeriksaan::where('pasien_id',$id)->get();

        $harga_total = 0;
        $harga_totobat=0;
        $harga_periksa=0;
        $total=0;
        $total_obat=0;
        $harga_obat=0;

        $getPasien=Pasien::all();
        $getDokter=Dokter::all();
        $getPegawai=Pegawai::all();
        $getTindakan=Tindakan::all();
        $getObat=Obat::all();
        $getResep=Resep::where('pasien_id',$id)->get();

        $path = base_path('public/image/logo.png');
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $pic ='data:image/' .$type. ';base64,' .base64_encode($data);

    	$pdf = PDF::loadview('pages.tagihan.print_pdf',compact('pic','pasien','getPasien','getDokter','getPegawai','getTindakan', 'pemeriksaan', 'total_obat','getObat', 'getResep','total','harga_totobat','harga_obat','harga_periksa'));
    	return $pdf->download('laporan-ptagihan.pdf');
    }
}
