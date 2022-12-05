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

            @if (Session::has('success'))
                <p class="alert alert-success mt-4 mx-3">{{ Session::get('success') }}</p>
            @endif


            <div class="table-responsive mx-4 mb-5 mt-4">
                <div class="row">
                    <div class="col-4">
                        <a class="btn btn-success" href="{{ url('pasien/create') }}"><i class="fa fa-plus"></i>
                            Tambah Data</a>
                    </div>
                    <div class="col-8 text-end">
                        <a class="btn btn-info" href=""><i class="fa fa-print"></i> Print</a>
                        <a class="btn btn-danger" href=""><i class="fa fa-file-pdf"></i> PDF </a>
                    </div>
                </div>
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>No Rekam Medis</th>
                            <th>Nama Pasien</th>
                            <th>No Handphone</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pasiens as $key => $value)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $value->no_rm }}</td>
                                <td>{{ $value->nama_pasien }}</td>
                                <td>{{ $value->no_hp }}</td>
                                <td>{{ $value->tanggal_pendaftaran }}</td>
                                <td>{{ $value->alamat }}</td>
                                <td class="text-center">
                                    <a class="btn btn-warning btn-sm" href="{{ url('tagihan/' . $value->id) }}"><i
                                            class="fa fa-eye"></i> Tagihan
                                    </a>

                                </td>
                            </tr>
                            <?php $no++; ?>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
@push('add-js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });

    </script>
@endpush

@push('jquery')
    <script>
        $('.delete').click(function() {
            var userid = $(this).attr('data-id');
            swal({
                    title: "Yakin?",
                    text: "Apakah yakin akan menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "delete_pasien/" + userid + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });

    </script>

@endpush
