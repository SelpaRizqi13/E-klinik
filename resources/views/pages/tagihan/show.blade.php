@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Tagihan
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
                    <a class="btn btn-success mb-4" href="{{ url('/tagihan') }}">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>

                <table class="table table-borderless">

                    <tbody>
                        <tr>
                            <td class="col-2">No Rekam Medis</td>
                            <td class="col-10">: {{ $pasien->no_rm }}</td>

                        </tr>
                        <tr>
                            <td class="col-2">Nama Pasien</td>
                            <td class="col-10">: {{ $pasien->nama_pasien }}</td>

                        </tr>
                        <tr>
                            <td class="col-2">No Handphone</td>
                            <td class="col-10">: {{ $pasien->no_hp }}</td>

                        </tr>
                        <tr>
                            <td class="col-2">Alamat</td>
                            <td class="col-10">: {{ $pasien->alamat }}</td>

                        </tr>
                        <tr>

                        </tr>
                    </tbody>
                </table>


                <table class="table table-bordered">
                    <thead>

                        <tr>
                            <th class="text-center">No</th>
                            <th>Item</th>
                            <th>Harga Satuan</th>
                            <th>Kuantitas</th>
                            <th>Tanggal</th>
                            <th>Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>

                        @foreach ($pemeriksaan as $item)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $item->tindakan->nama_tindakan }}</td>
                                <td id="harga">Rp. {{ $harga_periksa = $item->tindakan->harga }}</td>
                                <td class="text-center">{{ 1 }}</td>
                                <td>{{ $item->tanggal_pemeriksaan }}</td>
                                <td>Rp. {{ $harga_periksa = $item->tindakan->harga }}</td>
                                <td hidden>Rp. {{ $total_obat += $harga_periksa }}</td>
                            </tr>
                            <?php $no++; ?>

                        @endforeach

                        @foreach ($getResep as $item)
                            <tr>
                                <td class="text-center">{{ $no }}</td>
                                <td>{{ $item->obat->nama_obat }}</td>
                                <td id="harga">Rp. {{ $harga_obat = $item->obat->harga }}</td>
                                <td class="text-center">{{ $jumlah_obat = $item->jumlah }}</td>
                                <td>{{ $item->tanggal_resep }}</td>
                                <td>Rp. {{ $harga_totobat = $jumlah_obat * $harga_obat }}</td>
                                <td hidden>Rp. {{ $total += $harga_totobat }}</td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach
                        <tr>
                            <td colspan="5" class="text-center">Total</td>

                            <td> Rp. {{ $harga_total = $total_obat + $total }}</td>
                        </tr>
                        <tr></tr>
                    </tbody>
                </table>
                <div class="d-grid gap-2">
                    <a class="btn btn-warning mb-4" href="{{ url('export_pdf/' . $pasien->id) }}" . target="_blank">
                        Cetak Tagihan
                    </a>
                    {{-- <button class="btn btn-warning block">Cetak Tagihan</button> --}}
                </div>
            </div>
        </div>
    </div>

@endsection
