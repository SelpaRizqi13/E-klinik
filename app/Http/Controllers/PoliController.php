<?php

namespace App\Http\Controllers;
use App\Models\Poli;
use Illuminate\Http\Request;

class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polis = Poli::all();
        return view('pages.poli.index', compact('polis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poli=new Poli();
        
        return view('pages.poli.create', compact('poli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poli = new Poli();
        $poli->nama_poli=$request->nama_poli;
        $poli->lantai=$request->lantai;
        $poli->save();

        return redirect('poli')->with('success', 'Data Poliklinik berhasil ditambahkan!!');
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
        $poli = Poli::find($id);
        return view('pages.poli.show', compact('poli'));
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
        $poli = Poli::find($id);
        return view('pages.poli.edit', compact('poli'));
        
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
        $poli = Poli::find($id);
        $poli->nama_poli=$request->nama_poli;
        $poli->lantai=$request->lantai;
        $poli->save();

        return redirect('poli')->with('success', 'Data Poliklinik berhasil diupdate!!');
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
        $model = poli::find($id);
        $model->delete();

        return redirect('poli');
    }

}
