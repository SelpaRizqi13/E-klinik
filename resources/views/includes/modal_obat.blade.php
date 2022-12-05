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
                        <label for="recipient-name" class="col-form-label">Tanggal Resep</label>
                        <input type="datetime" class="form-control" id="tanggal_resep" readonly="" name="tanggal_resep"
                            value="{{ date('Y-m-d H:i:s') }}">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nama obat:</label>
                        <select name="obat_id" id="obat_id" class="form-control" required>
                            <option>--Pilih Obat--</option>
                            @foreach ($getObat as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_tindakan }}</option>
                            @endforeach
                        </select>
                        @foreach ($errors->get('obat_id') as $msg)
                            <p class="text-danger">{{ $msg }} </p>
                        @endforeach
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
