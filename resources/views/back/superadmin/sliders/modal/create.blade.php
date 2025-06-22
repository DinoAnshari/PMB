<div class="modal fade slider_create_modal" id="createSliderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createSliderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="createSliderModalLabel">Tambah Slider</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" action="#" method="POST" enctype="multipart/form-data">
                      

                        <div class="col-md-12">
                            <label class="form-label" for="title">Judul</label>
                            <input class="form-control" id="title" name="title" type="text" placeholder="Masukkan judul">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="subtitle">Sub Judul</label>
                            <input class="form-control" id="subtitle" name="subtitle" type="text" placeholder="Masukkan sub judul">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Masukkan deskripsi"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="number">Nomor Urut</label>
                            <input class="form-control" id="number" name="number" type="text" placeholder="Masukkan nomor urut (opsional)">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="image">Gambar</label>
                            <input class="form-control" id="image" name="image" type="file" required>
                            <small class="text-muted">Gambar wajib diunggah saat membuat slider</small>
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
