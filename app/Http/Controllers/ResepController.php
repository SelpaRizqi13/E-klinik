<?php

namespace App\Http\Controllers;
use App\Models\Resep;

use Illuminate\Http\Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $getObat=Obat::all();
        

        return view('includes.modal_obat', compact('getPasien','getObat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien_id= $_POST['pasien_id'];
        $obat_id= $_POST['obat_id'];
        $jumlah= $_POST['jumlah'];
        $tanggal_resep= $_POST['tanggal_resep'];
    
        $total = count($pasien_id);
        for($i=0; $i<$total; $i++){
            $resep = new Resep();
            $resep->pasien_id=$pasien_id[$i];
            $resep->obat_id=$obat_id[$i];
            $resep->jumlah=$jumlah[$i];
            $resep->tanggal_resep=$tanggal_resep[$i];
            $resep->save();
        }


        return redirect('pasien')->with('success', 'Data resep berhasil ditambahkan');
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
