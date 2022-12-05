@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Edit Data Pasien
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body">
                <form class="mx-3 mb-5 " id="quickForm" method="POST" action="{{ url('pasien/' . $pasien->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <p>Biodata Pasien</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Rekam Medis</label>
                                <input type="text" class="form-control" id="no_rm" name="no_rm" readonly=""
                                    value="{{ $pasien->no_rm }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Pendaftaran</label>
                                <input type="date" class="form-control" id="tanggal_pendaftaran" name="tanggal_pendaftaran"
                                    value="{{ $pasien->tanggal_pendaftaran }}" required>
                                @error('tanggal_pendaftaran')
                                    <div class="invalid-feedback mb-3" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik" placeholder="nik"
                                    value="{{ $pasien->nik }}" required>
                            </div>
                            @error('nik')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien"
                                    placeholder="nama lengkap" value="{{ $pasien->nama_pasien }}">
                            </div>
                            @error('nama_pasien')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Golongan Darah</label>
                                <select id="gol_darah" name="gol_darah" class="form-control">
                                    <option value="{{ $pasien->gol_darah }}">--Pilih Golongan Darah--</option>
                                    <option {{ $pasien->gol_darah == 'A' ? 'selected' : '' }} value="A">A</option>
                                    <option {{ $pasien->gol_darah == 'AB' ? 'selected' : '' }} value="AB">AB</option>
                                    <option {{ $pasien->gol_darah == 'B' ? 'selected' : '' }} value="B">B</option>
                                    <option {{ $pasien->gol_darah == 'O' ? 'selected' : '' }} value="O">O</option>
                                </select>
                            </div>
                            @error('gol_darah')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                                    <option value="{{ $pasien->jenis_kelamin }}">--Pilih Jenis Kelamin--</option>
                                    <option {{ $pasien->jenis_kelamin == 'perempuan' ? 'selected' : '' }}
                                        value="perempuan">Perempuan</option>
                                    <option {{ $pasien->jenis_kelamin == 'laki laki' ? 'selected' : '' }}
                                        value="laki laki">Laki-laki</option>

                                </select>
                            </div>
                            @error('jenis_kelamin')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    value="{{ $pasien->tempat_lahir }}" placeholder="tempat lahir" required>
                            </div>
                            @error('tempat_lahir')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror" required
                                    value="{{ $pasien->tanggal_lahir }}">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback mb-3" style="display: block;">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select id="agama" name="agama" class="form-control" required>
                                    <option value="{{ $pasien->agama }}">--Pilih Agama--</option>
                                    <option {{ $pasien->agama == 'Islam' ? 'selected' : '' }} value="Islam">Islam
                                    </option>
                                    <option {{ $pasien->agama == 'Protestan' ? 'selected' : '' }} value="Protestan">
                                        Protestan</option>
                                    <option {{ $pasien->agama == 'Katolik' ? 'selected' : '' }} value="Katolik">Katolik
                                    </option>
                                    <option {{ $pasien->agama == 'Hindu' ? 'selected' : '' }} value="Hindu">Hindu
                                    </option>
                                    <option {{ $pasien->agama == 'Budha' ? 'selected' : '' }} value="Budha">Budha
                                    </option>
                                    <option {{ $pasien->agama == 'Khonghucu' ? 'selected' : '' }} value="Khonghucu">
                                        Khonghucu</option>
                                </select>
                            </div>
                            @error('agama')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status Pernikahan</label>
                                <select id="status" name="status" class="form-control" required>
                                    <option value="{{ $pasien->status }}">{{ $pasien->status }}</option>
                                    <option
                                        {{ $pasien->status == 'sudah menikah' ? 'selected' : '' }}value="sudah menikah">
                                        Sudah Menikah</option>
                                    <option
                                        {{ $pasien->status == 'belum menikah' ? 'selected' : '' }}value="belum menikah">
                                        Belum Menikah</option>
                                    <option {{ $pasien->status == 'duda/janda' ? 'selected' : '' }}value="duda/janda">
                                        Duda/Janda</option>

                                </select>
                            </div>
                            @error('status')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                                    value="{{ $pasien->pekerjaan }}" required>
                            </div>
                            @error('pekerjaan')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No Handphone</label>
                                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="No Handphone"
                                    required value="{{ $pasien->no_hp }}">
                            </div>
                            @error('no_hp')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Provinsi</label>
                        <select name="provinsi" id="provinsi" class="form-control" required>
                            <option value="{{ $pasien->prov_id }}">{{ $pasien->province->name }}</option>
                            @foreach ($getProvinsi as $provinsi)
                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                            @endforeach
                        </select>
                        @error('provinsi')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kabupaten</label>
                        <select name="kabupaten" class="form-control select2 @error('kabupaten') is-invalid @enderror"
                            id="kabupaten" required>

                            <option value="" {{ old('kabupaten') == '' ? 'selected' : '' }}>--Pilih Kabupaten--</option>
                        </select>
                        @error('kabupaten')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <select name="kecamatan" class="form-control select2 @error('kecamatan') is-invalid @enderror"
                            id="kecamatan" required>

                            <option value="" {{ old('kecamatan') == '' ? 'selected' : '' }}>--Pilih Kecamatan--</option>
                        </select>
                        @error('kecamatan')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Desa</label>
                        <select name="desa" class="form-control select2 @error('desa') is-invalid @enderror" id="desa"
                            required>

                            <option value="" {{ old('desa') == '' ? 'selected' : '' }}>--Pilih Desa--</option>
                        </select>
                        @error('desa')
                            <div class="invalid-feedback mb-3" style="display: block;">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                            placeholder="Alamat" value="{{ $pasien->alamat }}"
                            required>{{ $pasien->alamat }}</textarea>
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
                                    placeholder="nama penanggung jawab" required value="{{ $pasien->nama_penjawab }}">
                            </div>
                            @error('nama_penjawab')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status hubungan dengan pasien</label>
                                <input type="text" class="form-control" id="s_hubungan" name="s_hubungan"
                                    placeholder="status hubungan dengan pasien" required
                                    value="{{ $pasien->s_hubungan }}">
                            </div>
                            @error('s_hubungan')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nomor Handphone</label>
                                <input type="number" class="form-control" id="no_hp_penjawab" name="no_hp_penjawab"
                                    placeholder="nomor hp" required value="{{ $pasien->no_hp_penjawab }}">
                            </div>
                            @error('no_hp_penjawab')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat_penjawab"
                                    class="form-control @error('alamat_penjawab') is-invalid @enderror" id="alamat_penjawab"
                                    placeholder="Alamat" required
                                    value="{{ $pasien->alamat_penjawab }}">{{ $pasien->alamat_penjawab }}</textarea>
                                </textarea>
                                </textarea>
                            </div>
                            @error('alamat_penjawab')
                                <div class="invalid-feedback mb-3" style="display: block;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a class="btn btn-success" href="{{ url('pasien') }}">
                            Cancel</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
@endsection

@push('add-js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {
            $('#provinsi').on('change', function() {
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('getdatakabupaten') }}",
                    data: {
                        id_provinsi: id_provinsi
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kabupaten').html(msg);
                    }
                })
            })
            $('#kabupaten').on('change', function() {
                let id_kabupaten = $('#kabupaten').val();


                $.ajax({
                    type: 'POST',
                    url: "{{ route('getdatakecamatan') }}",
                    data: {
                        id_kabupaten: id_kabupaten
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kecamatan').html(msg);
                    }
                })
            })
            $('#kecamatan').on('change', function() {
                let id_kecamatan = $('#kecamatan').val();

                $.ajax({
                    type: 'POST',
                    url: "{{ route('getdatadesa') }}",
                    data: {
                        id_kecamatan: id_kecamatan
                    },
                    cache: false,

                    success: function(msg) {
                        $('#desa').html(msg);
                    }
                })
            })
        })

    </script>
@endpush
