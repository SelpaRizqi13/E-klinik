@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Pegawai
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body ms-3">
                <h5>Identitas Pegawai</h5>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">nama pegawai</label>
                                <input type="text" placeholder="{{ $pegawai->nama_pegawai }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" placeholder="{{ $pegawai->tanggal_lahir }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" placeholder="{{ $pegawai->jenis_kelamin }}" class="form-control"
                                    disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jabatan</label>
                                <input type="text" placeholder="{{ $pegawai->jabatan }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="text" placeholder="{{ $pegawai->no_hp }}" class="form-control" disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" placeholder="{{ $pegawai->alamat }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <a class="btn btn-success mb-4" href="{{ url('/pegawai') }}">
                            Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
