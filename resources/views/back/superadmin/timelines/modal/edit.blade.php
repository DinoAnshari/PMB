<div class="modal fade timeline_edit_modal" id="editTimelineModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editTimelineModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editTimelineModalLabel">Edit Timeline</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="edit_timeline_form">
                        <div class="col-md-12">
                            <label class="form-label" for="edit_tanggal">Tanggal</label>
                            <input class="form-control" id="edit_tanggal" type="text" placeholder="Masukkan rentang tanggal, contoh: 26-27 April 2025" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="edit_judul">Judul</label>
                            <input class="form-control" id="edit_judul" type="text" placeholder="Masukkan judul kegiatan" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="edit_deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="edit_deskripsi" rows="4" placeholder="Masukkan deskripsi kegiatan" required></textarea>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-warning" type="button">Update</button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
