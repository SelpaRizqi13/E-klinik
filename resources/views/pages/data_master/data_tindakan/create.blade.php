@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Tambah Data Tindakan
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('tindakan') }}">
                    @csrf
                    <div class="form-group">
                        <p>Kode Tindakan</p>
                        <input type="text" name="kode_tindakan" value="{{ old('kode_tindakan') }}"
                            class="form-control @error('kode_tindakan') is-invalid @enderror" id="kode_tindakan" required>
                        @error('kode_tindakan')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Nama Tindakan</p>
                        <input type="text" name="nama_tindakan" value="{{ old('nama_tindakan') }}"
                            class="form-control @error('nama_tindakan') is-invalid @enderror" id="nama_tindakan"
                            placeholder="Enter Nama Tindakan" required>
                        @error('nama_tindakan')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Harga</p>
                        <input type="number" name="harga" value="{{ old('harga') }}"
                            class="form-control @error('harga') is-invalid @enderror" id="harga" placeholder="Harga"
                            required>
                        @error('harga')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ url('tindakan') }}">
                            Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
