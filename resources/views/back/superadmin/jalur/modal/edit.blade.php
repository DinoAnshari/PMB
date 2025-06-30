<div class="modal fade jalur_edit_modal" id="editJalurModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editJalurModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editJalurModalLabel">Edit Jalur Pendaftaran</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="edit_jalur_form" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <label class="form-label" for="edit_nama_jalur">Nama Jalur</label>
                            <input class="form-control" id="edit_nama_jalur" name="nama" type="text" placeholder="Masukkan nama jalur" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="edit_tanggal_mulai">Tanggal Mulai</label>
                            <input class="form-control" id="edit_tanggal_mulai" name="tanggal_mulai" type="date" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="edit_tanggal_selesai">Tanggal Selesai</label>
                            <input class="form-control" id="edit_tanggal_selesai" name="tanggal_selesai" type="date" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-warning" type="submit">Update</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
