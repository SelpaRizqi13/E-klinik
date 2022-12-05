@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Pasien
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body ms-3">
                <div class="">
                    <a class="btn btn-success mb-4" href="{{ url('/pasien') }}">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <table class="table table-bordered">
                    <thead class="bg-primary ">
                        <td colspan="2">
                            <h3 class="text-white"> Biodata Pasien</h3>
                        </td>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-3">No Rekam Medis</td>
                            <td class="col-9">{{ $pasien->no_rm }}</td>

                        </tr>
                        <tr>
                            <td class="col-3">Tanggal Pendaftaran</td>
                            <td class="col-9">{{ $pasien->tanggal_pendaftaran }}</td>

                        </tr>
                        <tr>
                            <td class="col-3">Nama Pasien</td>
                            <td class="col-9">{{ $pasien->nama_pasien }}</td>

                        </tr>
                        <tr>

                        </tr>
                    </tbody>
                </table>

                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#tindakanModal"
                    data-bs-whatever="@mdo">Input Tindakan</button>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#obatModal"
                    data-bs-whatever="@fat">Input Obat</button>

                @include('includes.modal_tindakan')
                @include('includes.modal_obat')


            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body ms-3">

                <table class="table table-bordered">
                    <thead>
                        <td class="bg-primary" colspan="2">
                            <h3 class="text-white"> Riwayat Tindakan</h3>
                        </td>
                    </thead>
                </table>
                <table class="table table-bordered">
                    <thead>

                        <tr>
                            <th class="text-center">No</th>
                            <th>Tindakan</th>
                            <th>Diagnosa</th>
                            <th>Perkembangan</th>
                            <th>Tanggal</th>
                            <th>Tarif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>

                        @foreach ($pemeriksaan as $item)

                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $item->tindakan->nama_tindakan }}</td>
                                <td>{{ $item->diagnosa }}</td>
                                <td>{{ $item->perkembangan }}</td>
                                <td>{{ $item->tanggal_pemeriksaan }}</td>
                                <td id="harga">Rp. {{ $item->tindakan->harga }}</td>
                            </tr>
                            <?php $no++; ?>

                        @endforeach
                        <tr>
                            <td colspan="5" class="text-center">Total</td>
                            @foreach ($pemeriksaan as $item)

                                <td hidden>Rp.{{ $harga_total += $item->tindakan->harga }}</td>

                            @endforeach
                            <td> Rp. {{ $harga_total }}</td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body ms-3">

                <table class="table table-bordered">
                    <thead>
                        <td class="bg-primary" colspan="2">
                            <h3 class="text-white"> Riwayat Pemberian Obat</h3>
                        </td>
                    </thead>
                </table>
                <table class="table table-bordered">
                    <thead>

                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama Obat</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($getResep as $item)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $item->obat->nama_obat }}</td>
                                <td>{{ $item->tanggal_resep }}</td>
                                <td class="text-center">{{ $jumlah_obat = $item->jumlah }}</td>
                                <td>Rp. {{ $harga_obat = $item->obat->harga }}</td>
                                <td>Rp. {{ $harga_totobat = $jumlah_obat * $harga_obat }}</td>
                                <td hidden>Rp. {{ $total += $harga_totobat }}</td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach
                        <tr>
                            <td colspan="5" class="text-center">Total</td>
                            <td>Rp. {{ $total }}</td>
                        </tr>
                        <tr>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
