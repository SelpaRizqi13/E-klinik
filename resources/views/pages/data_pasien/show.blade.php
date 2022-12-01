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

                {{-- modal tindakan --}}
                <div class="modal fade" id="tindakanModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Input Tindakan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Dilakukan oleh:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama tindakan:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Hasil periksa:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Perkembangan:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Masukan nama Dokter:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Masukan nama Petugas:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- modal obat --}}
                <div class="modal fade" id="obatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Input Pemberian Obat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama obat:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Quantity:</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label ">Harga:</label>
                                        <input type="text" class="form-control " id="recipient-name" disabled>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label ">Subtotal:</label>
                                        <input type="text" class="form-control " id="recipient-name" disabled>
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Simpan Data</button>
                            </div>
                        </div>
                    </div>
                </div>
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
                            <th>No</th>
                            <th>Tindakan</th>
                            <th>Hasil Periksa</th>
                            <th>Perkembangan</th>
                            <th>Tanggal</th>
                            <th>Tarif</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>inpus</td>
                            <td>ok</td>
                            <td>ok</td>
                            <td>200/09/01</td>
                            <td>10000</td>
                        </tr>
                        <tr>

                        </tr>
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
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>inpus</td>
                            <td>ok</td>
                            <td>ok</td>
                            <td>200/09/01</td>
                            <td>10000</td>
                        </tr>
                        <tr>

                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
