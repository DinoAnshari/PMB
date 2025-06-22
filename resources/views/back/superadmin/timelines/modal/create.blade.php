<div class="modal fade timeline_create_modal" id="createTimelineModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createTimelineModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="createTimelineModalLabel">Tambah Timeline</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label" for="tanggal">Tanggal</label>
                            <input class="form-control" id="tanggal" type="text" placeholder="Masukkan rentang tanggal, contoh: 26-27 April 2025" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="judul">Judul</label>
                            <input class="form-control" id="judul" type="text" placeholder="Masukkan judul kegiatan" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="4" placeholder="Masukkan deskripsi kegiatan" required></textarea>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="button">Simpan</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
