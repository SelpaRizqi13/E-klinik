@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Tambah Data Obat
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('obat') }}">
                    @csrf
                    <div class="form-group">
                        <p>Kode Obat</p>
                        <input type="text" name="kode_obat" value="{{ old('kode_obat') }}"
                            class="form-control @error('kode_obat') is-invalid @enderror" id="kode_obat" required>
                        @error('kode_obat')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Nama Obat</p>
                        <input type="text" name="nama_obat" value="{{ old('nama_obat') }}"
                            class="form-control @error('nama_obat') is-invalid @enderror" id="nama_obat"
                            placeholder="Enter Nama obat" required>
                        @error('nama_obat')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>kategori Obat</p>
                        <input type="text" name="kategori" value="{{ old('kategori') }}"
                            class="form-control @error('kategori') is-invalid @enderror" id="kategori"
                            placeholder="Enter kategori obat" required>
                        @error('kategori')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Stok Obat</p>
                        <input type="text" name="stok" value="{{ old('stok') }}"
                            class="form-control @error('stok') is-invalid @enderror" id="stok" placeholder="Enter  stok"
                            required>
                        @error('stok')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="role">Jenis Obat</label>
                        <select id="jenis_obat" name="jenis_obat" class="form-control">
                            <option value="">--Pilih Jenis Obat--</option>
                            <option {{ $obat->jenis_obat == 'sirup' ? 'selected' : '' }} value="sirup">sirup</option>
                            <option {{ $obat->jenis_obat == 'strip' ? 'selected' : '' }} value="strip">Strip</option>
                            <option {{ $obat->jenis_obat == 'kapsul' ? 'selected' : '' }} value="kapsul">Kapsul</option>
                        </select>
                        @foreach ($errors->get('jenis_obat') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
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
                        <a class="btn btn-success" href="{{ url('obat') }}">
                            Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
