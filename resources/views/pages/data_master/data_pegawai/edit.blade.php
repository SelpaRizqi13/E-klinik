@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Tambah Data Pegawai
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-5 mb-5 mt-5" id="quickForm" method="POST" action="{{ url('pegawai/' . $pegawai->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <p>Nama Pegawai</p>
                        <input type="text" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}"
                            class="form-control @error('nama_pegawai') is-invalid @enderror" id="nama_pegawai" required>
                        @error('nama_pegawai')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <p>Tanggal Lahir</p>
                        <input type="date" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}"
                            class="form-control @error('tanggal_lahir') is-invalid @enderror">
                        @foreach ($errors->get('tanggal_lahir') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <p for="role">Jenis Kelamin</p>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                            <option value="{{ $pegawai->jenis_kelamin }}">{{ $pegawai->jenis_kelamin }}</option>

                            <option {{ $pegawai->jenis_kelamin == 'laki laki' ? 'selected' : '' }} value="laki laki">Laki
                                laki
                            </option>
                            <option {{ $pegawai->jenis_kelamin == 'perempuan' ? 'selected' : '' }} value="Perempuan">
                                Perempuan
                            </option>
                        </select>
                        @foreach ($errors->get('jenis_kelamin') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <p for="role">Jabatan</p>
                        <select id="jabatan" name="jabatan" class="form-control">
                            <option value="{{ $pegawai->jabatan }}">{{ $pegawai->jabatan }}</option>
                            <option {{ $pegawai->jabatan == 'poli dalam' ? 'selected' : '' }} value="poli dalam">
                                Poli
                                Dalam</option>
                            <option {{ $pegawai->jabatan == 'umum' ? 'selected' : '' }} value="umum">Umum</option>
                            <option {{ $pegawai->jabatan == 'poli gigi' ? 'selected' : '' }} value="poli gigi">Poli
                                Gigi
                            </option>
                        </select>
                        @foreach ($errors->get('jabatan') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <p>Nomor Handphone</p>
                        <input type="number" name="no_hp" value="{{ $pegawai->no_hp }}"
                            class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                            placeholder="Enter no hp pegawai" required>
                        @error('no_hp')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <p>Alamat</p>
                        <input type="text" name="alamat" value="{{ $pegawai->alamat }}"
                            class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            placeholder="Enter Nama pegawai" required>
                        @error('alamat')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ url('pegawai') }}">
                            Cancel</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
