{{-- modal tindakan --}}
<div class="modal fade" id="tindakanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tindakan">Input Tindakan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="quickForm" method="POST" action="{{ url('pemeriksaan') }}">
                    @csrf
                    <div class="mb-3" hidden>
                        <label for="recipient-name" class="col-form-label">Pasien:</label>
                        <input type="text" class="form-control" id="pasien_id" name="pasien_id"
                            value="{{ $pasien->id }}">
                    </div>
                    <div class="mb-3" hidden>

                        <label for="recipient-name" class="col-form-label">Tanggal Pemeriksaan</label>
                        <input type="datetime" class="form-control" id="tanggal_pemeriksaan" readonly=""
                            name="tanggal_pemeriksaan" value="{{ date('Y-m-d H:i:s') }}">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Dilakukan oleh:</label>
                        <select id="eksekutor" name="eksekutor" class="form-control">
                            <option value="">--Pilih Penindak--</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Petugas">Petugas</option>
                            <option value="Dokter dan Petugas">Dokter dan Petugas</option>
                        </select>
                        @foreach ($errors->get('eksekutor') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Keluhan:</label>
                        <input type="text" class="form-control" id="keluhan" name="keluhan">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama tindakan:</label>
                        <select name="tindakan_id" id="tindakan_id" class="form-control" required>
                            <option>--Pilih Tindakan--</option>
                            @foreach ($getTindakan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_tindakan }}</option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('tindakan_id') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    {{-- <div class="mb-3" hidden>
                        <label for="recipient-name" class="col-form-label">Tarif:</label>
                        <input type="text" class="form-control" id="tarif" name="tarif" value="{{ 10000 }}">
                    </div> --}}
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Hasil periksa:</label>
                        <input type="text" class="form-control" id="perkembangan" name="perkembangan">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Diagnosa:</label>
                        <input type="text" class="form-control" id="diagnosa" name="diagnosa">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Masukan nama Dokter:</label>
                        <select name="dokter_id" id="dokter_id" class="form-control" required>
                            <option>--Pilih Dokter--</option>
                            @foreach ($getDokter as $item)
                                <option value="{{ $item->id }}">{{ $item->nama }} Dokter
                                    {{ $item->poli->nama_poli }}</option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('dokter_id') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Masukan nama Petugas:</label>
                        <select name="pegawai_id" id="pegawai_id" class="form-control" required>
                            <option>--Pilih Petugas--</option>
                            @foreach ($getPegawai as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_pegawai }} Petugas
                                    {{ $item->poli->nama_poli }}</option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('pegawai_id') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- modal obat --}}
<div class="modal fade" id="obatModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Input Pemberian Obat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="quickForm" method="POST" action="{{ url('resep') }}">
                    @csrf
                    <div class="after-add-more">
                        <div class="mb-3" hidden>
                            <label for="recipient-name" class="col-form-label">Pasien:</label>
                            <input type="text" class="form-control" id="pasien_id" name="pasien_id[]"
                                value="{{ $pasien->id }}">
                        </div>
                        <div class="mb-3" hidden>
                            <label for="recipient-name" class="col-form-label">Tanggal Resep</label>
                            <input type="datetime" class="form-control" id="tanggal_resep" readonly=""
                                name="tanggal_resep[]" value="{{ date('Y-m-d H:i:s') }}">
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Nama obat:</label>
                                <select name="obat_id[]" id="obat_id" class="form-control" required>
                                    <option>--Pilih Obat--</option>
                                    @foreach ($getObat as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                                    @endforeach
                                </select>
                                @foreach ($errors->get('obat_id') as $msg)
                                    <p class="text-danger">{{ $msg }} </p>
                                @endforeach
                            </div>
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Quantity:</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah[]">
                            </div>
                            <div class="col-2">
                                <label for="recipient-name" class="col-form-label text-white">Tambah</label>
                                <button class="btn btn-success add-more" type="button">
                                    <i class=""></i> Add
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
                <div class="copy" hidden>
                    <div class="control-group">

                        <div class="mb-3" hidden>
                            <label for="recipient-name" class="col-form-label">Pasien:</label>
                            <input type="text" class="form-control" id="pasien_id" name="pasien_id[]"
                                value="{{ $pasien->id }}">
                        </div>
                        <div class="mb-3" hidden>
                            <label for="recipient-name" class="col-form-label">Tanggal Resep</label>
                            <input type="datetime" class="form-control" id="tanggal_resep" readonly=""
                                name="tanggal_resep[]" value="{{ date('Y-m-d H:i:s') }}">
                        </div>
                        <div class="row">

                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Nama obat:</label>
                                <select name="obat_id[]" id="obat_id" class="form-control" required>
                                    <option>--Pilih Obat--</option>
                                    @foreach ($getObat as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                                    @endforeach
                                </select>
                                @foreach ($errors->get('obat_id') as $msg)
                                    <p class="text-danger">{{ $msg }} </p>
                                @endforeach
                            </div>
                            <div class="col-5">
                                <label for="recipient-name" class="col-form-label">Quantity:</label>
                                <input type="text" class="form-control" id="jumlah" name="jumlah[]">

                            </div>
                            <div class="col-2">
                                <label for="recipient-name" class="col-form-label text-white">Tambah</label>
                                <button class="btn btn-danger remove" type="button"><i
                                        class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@push('add-js')

    <script type="text/javascript">
        $(document).ready(function() {
            $(".add-more").click(function() {
                var html = $(".copy").html();
                $(".after-add-more").after(html);
            });

            // saat tombol remove dklik control group akan dihapus 
            $("body").on("click", ".remove", function() {
                $(this).parents(".control-group").remove();
            });
        });

    </script>
@endpush
