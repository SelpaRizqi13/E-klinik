@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Obat
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body ms-3">
                <h5>Identitas obat</h5>
                <form>
                    <div class="form-group">
                        <label>Nama Obat</label>
                        <input type="text" placeholder="{{ $obat->nama_obat }}" class="form-control" disabled />
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Obat</label>
                                <input type="text" placeholder="{{ $obat->jenis_obat }}" class="form-control" disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Kategori</label>
                                <input type="text" placeholder="{{ $obat->kategori }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input type="text" placeholder="{{ $obat->stok }}" class="form-control" disabled />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="text" placeholder="{{ $obat->harga }}" class="form-control" disabled />
                            </div>
                        </div>
                    </div>
                    <div class="text-end">
                        <a class="btn btn-success mb-4" href="{{ url('/obat') }}">
                            Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
