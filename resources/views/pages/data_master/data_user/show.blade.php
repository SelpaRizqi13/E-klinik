@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-4 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data User
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <a class="btn btn-success btn-sm mb-4" href="{{ url('/user') }}">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                        <div class="">
                            <span class="text-bold">Username : </span>
                            <p for="">{{ $model->name }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Email : </span>
                            <p for="">{{ $model->email }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Role : </span>
                            <p for="">{{ $model->role }}</p>
                        </div>
                        <div class="">
                            <span class="text-bold">Tanggal Pembuatan : </span>
                            <p for="">{{ $model->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
