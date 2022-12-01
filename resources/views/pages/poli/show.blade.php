@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Poliklinik
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <a class="btn btn-success btn-sm mb-4" href="{{ url('/poli') }}">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        <div class="">
                            <span class="text-bold">Nama Poliklinik : </span>
                            <p for="">{{ $poli->nama_poli }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Lantai : </span>
                            <p for="">{{ $poli->lantai }}</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
