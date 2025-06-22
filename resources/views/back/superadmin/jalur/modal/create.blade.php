<div class="modal fade jalur_create_modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="myLargeModalLabel">Input Jalur Pendaftaran</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" action="#" method="POST">
                        <div class="col-md-12">
                            <label class="form-label" for="nama">Nama Jalur</label>
                            <input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan nama jalur" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="tanggal_mulai">Tanggal Mulai</label>
                            <input class="form-control" id="tanggal_mulai" name="tanggal_mulai" type="date" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="tanggal_selesai">Tanggal Selesai</label>
                            <input class="form-control" id="tanggal_selesai" name="tanggal_selesai" type="date" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
