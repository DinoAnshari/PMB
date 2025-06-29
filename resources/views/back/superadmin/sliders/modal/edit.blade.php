<div class="modal fade slider_edit_modal" id="editSliderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editSliderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editSliderModalLabel">Edit Slider</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="edit_slider_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-md-12">
                            <label class="form-label" for="edit_judul">Judul</label>
                            <input class="form-control" id="edit_judul" name="judul" type="text" placeholder="Masukkan judul">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_subtitle">Sub Judul</label>
                            <input class="form-control" id="edit_subtitle" name="subtitle" type="text" placeholder="Masukkan sub judul">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="edit_deskripsi" name="deskripsi" rows="4" placeholder="Masukkan deskripsi"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_nomor">Nomor Urut</label>
                            <input class="form-control" id="edit_nomor" name="nomor" type="text" placeholder="Masukkan nomor urut (opsional)">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_gambar">Gambar</label>
                            <input class="form-control" id="edit_gambar" name="gambar" type="file">
                            <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar</small>
                            <div class="mt-2">
                                <img id="edit_image_preview" src="#" alt="Preview Gambar" class="img-fluid rounded" style="max-height: 200px;">
                            </div>
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
