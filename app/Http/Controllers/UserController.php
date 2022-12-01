<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::all();
        $users = User::where('name', 'LIKE', '%' . $keyword . '%')
            ->orwhere('email', 'LIKE', '%' . $keyword . '%')
            ->paginate(5); //membuat data menjadi per page dengan data yang ditampilkan hanya 5
        $users->withPath('user'); //meminimalisir kesalahan url
        $users->appends($request->all()); //menelempar semua request yang diminta
        return view('pages.data_master.data_user.index', compact('users', 'keyword'))->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new User();
        return view('pages.data_master.data_user.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model= new User();
        $model->name = $request->username;
        $model->email = $request->email;
        $model->role= $request->role;
        $model->password = bcrypt($request->password);
        $model->save();

        return redirect('user')->with('success', 'Tambah Data Berhasil');

    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = User::find($id);
        return view('pages.data_master.data_user.show', compact('model'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = User::find($id);

        return view('pages.data_master.data_user.edit', compact('model'));
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
        $model= User::find($id);
        $model->name = $request->username;
        $model->email = $request->email;
        $model->role= $request->role;
        $model->password = bcrypt($request->password);
        $model->save();

        return redirect('user')->with('success', 'Update Data Berhasil');
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
        $model = user::find($id);
        $model->delete();

        return redirect('user');
    }
}
