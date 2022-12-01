@extends('layouts.theme')

@section('content')
    <div class="card shadow-lg mx-3 ">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto my-auto ms-4">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Data Dokter
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
                        <a class="btn btn-success" href="{{ url('dokter/create') }}"><i class="fa fa-plus"></i>
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
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Spesialis</th>
                            <th>No Handphone</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($dokters as $key => $value)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $value->nama }}</td>
                                <td>{{ $value->tanggal_lahir }}</td>
                                <td>{{ $value->spesialis }}</td>
                                <td>{{ $value->no_hp }}</td>
                                <td>{{ $value->alamat }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-sm" href="{{ url('dokter/' . $value->id) }}"><i
                                            class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{ url('dokter/' . $value->id . '/edit') }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm delete" data-id="{{ $value->id }}" type="submit"> <i
                                            class="fa fa-trash-alt"></i>
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
                        window.location = "delete_dokter/" + userid + ""
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
