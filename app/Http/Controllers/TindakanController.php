<?php
 
namespace App\Http\Controllers;

use App\Models\Tindakan;
use DB;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindakans = Tindakan::all();
        return view('pages.data_master.data_tindakan.index', compact('tindakans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $getkode = DB::table('tindakans')->select(DB::raw('MAX(RIGHT(kode_tindakan, 4)) as kode'));
        $kd = '';
        if ($getkode->count() > 0) {
            foreach ($getkode->get() as $k) {
                $tmp = ((int) $k->kode) + 1;
                $kd = sprintf('%04s', $tmp);
            }
        } else {
            $kd = '0001';
        }
        $tindakan = new Tindakan();
        return view('pages.data_master.data_tindakan.create', compact('tindakan','kd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tindakan= new Tindakan();
        $tindakan->kode_tindakan = $request->kode_tindakan;
        $tindakan->nama_tindakan = $request->nama_tindakan;
        $tindakan->harga=$request->harga;
        $tindakan->save();

        return redirect('tindakan')->with('success', 'Tambah data tindakan berhasil !!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $tindakan = Tindakan::find($id);
        return view('pages.data_master.data_tindakan.show', compact('tindakan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tindakan = Tindakan::find($id);
    
        return view('pages.data_master.data_tindakan.edit', compact('tindakan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $tindakan= Tindakan::find($id);
        $tindakan->kode_tindakan = $request->kode_tindakan;
        $tindakan->nama_tindakan = $request->nama_tindakan;
        $tindakan->harga= $request->harga;
        $tindakan->save();
    
        return redirect('tindakan')->with('success', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $model = tindakan::find($id);
        $model->delete();

        return redirect('tindakan');
    }
}
