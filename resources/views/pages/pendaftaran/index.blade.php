@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Tambah Data Pasien
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 " id="quickForm" method="POST" action="{{ url('pasien') }}">
                    @csrf
                    <p>Biodata Pasien</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Rekam Medis</label>
                                <input type="text" class="form-control" id="no_rm" name="no_rm" readonly=""
                                    value="{{ 'RM-' . $kd }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Pendaftaran</label>
                                <input type="date" class="form-control" id="tanggal_pendaftaran" name="tanggal_pendaftaran"
                                    placeholder="No Handphone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik" placeholder="nik">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien"
                                    placeholder="nama lengkap">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Golongan Darah</label>
                                <select id="gol_darah" name="gol_darah" class="form-control">
                                    <option value="">--Pilih Golongan Darah--</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki laki">Laki-laki</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    value="{{ old('tempat_lahir') }}" placeholder="tempat lahir" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                @foreach ($errors->get('tanggal_lahir') as $msg)
                                    <p class="text-danger">{{ $msg }} </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" placeholder="agama">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status Pernikahan</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="">--Pilih Status Pernikahan--</option>
                                    <option value="sudah menikah">Sudah Menikah</option>
                                    <option value="belum menikah">Belum Menikah</option>
                                    <option value="duda/janda">Duda/Janda</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                    placeholder="Pekerjaan">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Handphone</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp"
                                    placeholder="No Handphone">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Provinsi</label>
                        <input type="text" name="provinsi" value="{{ old('provinsi') }}"
                            class="form-control @error('provinsi') is-invalid @enderror" id="provinsi"
                            placeholder="provinsi" required>
                        @error('provinsi')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kabupaten</label>
                        <input type="text" name="kabupaten" value="{{ old('kabupaten') }}"
                            class="form-control @error('kabupaten') is-invalid @enderror" id="kabupaten"
                            placeholder="kabupaten" required>
                        @error('kabupaten')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" name="kecamatan" value="{{ old('kecamatan') }}"
                            class="form-control @error('kecamatan') is-invalid @enderror" id="kecamatan"
                            placeholder="kecamatan" required>
                        @error('kecamatan')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Desa</label>
                        <input type="text" name="desa" value="{{ old('desa') }}"
                            class="form-control @error('desa') is-invalid @enderror" id="desa" placeholder="desa" required>
                        @error('desa')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea type="text" name="alamat" value="{{ old('alamat') }}"
                            class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat"
                            required>
                                                                    </textarea>
                        @error('alamat')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <p>Data Penanggung Jawab</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Penanggung Jawab</label>
                                <input type="text" class="form-control" id="nama_penjawab" name="nama_penjawab"
                                    placeholder="nama penanggung jawab">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status hubungan dengan pasien</label>
                                <input type="text" class="form-control" id="s_hubungan" name="s_hubungan"
                                    placeholder="status hubungan dengan pasien">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="number" class="form-control" id="no_hp_penjawab" name="no_hp_penjawab"
                                    placeholder="nomor hp">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea type="text" class="form-control" id="alamat_penjawab" name="alamat_penjawab"
                                    placeholder="Alamat">
                                                </textarea>
                            </div>
                        </div>
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
