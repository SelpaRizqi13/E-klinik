@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Edit Data Poliklinik
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('poli/' . $poli->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <p>Nama poli</p>
                        <input type="text" name="nama_poli" value="{{ $poli->nama_poli }}"
                            class="form-control @error('nama_poli') is-invalid @enderror" id="nama_poli" required>
                        @error('nama_poli')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Posisi lantai</p>
                        <input type="text" name="lantai" value="{{ $poli->lantai }}"
                            class="form-control @error('lantai') is-invalid @enderror" id="lantai"
                            placeholder="Enter Posisi Lantai" required>
                        @error('lantai')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ url('poli') }}">
                            Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
