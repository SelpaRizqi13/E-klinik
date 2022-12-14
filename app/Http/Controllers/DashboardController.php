<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Dokter;
use App\Models\Pasien;
// use App\Models\Wilayah;
use App\Models\Tindakan;
use App\Models\Obat;
use App\Models\Tagihan;
use DB;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::count();
        $pegawais = Pegawai::count();
        $dokters = Dokter::count();
        $pasiens = Pasien::count();
        // $areas = Wilayah::count();
        $tindakans = Tindakan::count();
        $obats = Obat::count();
        $tagihans = Tagihan::count();


        $year = ['2022','2023','2024','2025'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = Pasien::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }
        
        

        return view('pages.dashboard.index', compact('users','pegawais','dokters','pasiens','tindakans','obats','tagihans'))->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
        
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
