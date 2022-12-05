@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Tambah Data Dokter
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('dokter/' . $dokter->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <p>Nama Dokter</p>
                        <input type="text" name="nama" value="{{ $dokter->nama }}"
                            class="form-control @error('nama') is-invalid @enderror" id="nama" required>
                        @error('nama')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Tanggal Lahir</p>
                        <input type="date" name="tanggal_lahir" value="{{ $dokter->tanggal_lahir }}"
                            class="form-control @error('tanggal_lahir') is-invalid @enderror">
                        @foreach ($errors->get('tanggal_lahir') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <p for="role">Spesialis</p>
                        <select id="spesialis" name="spesialis" class="form-control">
                            <option value="{{ $dokter->poli->nama_poli }}">{{ $dokter->poli->nama_poli }}</option>
                            <option {{ $dokter->spesialis == 'poli dalam' ? 'selected' : '' }} value="poli dalam">Poli
                                Dalam</option>
                            <option {{ $dokter->spesialis == 'umum' ? 'selected' : '' }} value="umum">Umum</option>
                            <option {{ $dokter->spesialis == 'poli gigi' ? 'selected' : '' }} value="poli gigi">Poli
                                Gigi
                            </option>
                        </select>
                        @foreach ($errors->get('spesialis') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <p for="role">Jenis Kelamin</p>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                            <option value="{{ $dokter->jenis_kelamin }}">{{ $dokter->jenis_kelamin }}</option>

                            <option {{ $dokter->jenis_kelamin == 'laki laki' ? 'selected' : '' }} value="laki laki">Laki
                                laki
                            </option>
                            <option {{ $dokter->jenis_kelamin == 'perempuan' ? 'selected' : '' }} value="Perempuan">
                                Perempuan
                            </option>
                        </select>
                        @foreach ($errors->get('jenis_kelamin') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <p>Nomor Handphone</p>
                        <input type="number" name="no_hp" value="{{ $dokter->no_hp }}"
                            class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                            placeholder="Enter no hp dokter" required>
                        @error('no_hp')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <p>Alamat</p>
                        <input type="text" name="alamat" value="{{ $dokter->alamat }}"
                            class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            placeholder="Enter Nama dokter" required>
                        @error('alamat')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ url('dokter') }}">
                            Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
