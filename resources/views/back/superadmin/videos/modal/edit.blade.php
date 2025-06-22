<div class="modal fade video_edit_modal" id="editVideoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> 
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editVideoModalLabel">Edit Video</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="edit_video_form" method="POST" enctype="multipart/form-data">

                        <div class="col-md-12">
                            <label class="form-label" for="edit_title">Judul Video</label>
                            <input class="form-control" id="edit_title" name="title" type="text" placeholder="Masukkan judul video">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_deskripsi">Deskripsi Video</label>
                            <textarea class="form-control" id="edit_deskripsi" name="deskripsi" placeholder="Masukkan deskripsi video" rows="3"></textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_video_url">Video URL</label>
                            <input class="form-control" id="edit_video_url" name="video_url" type="text" placeholder="Masukkan URL video">
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_image">Gambar Thumbnail</label>
                            <input class="form-control" id="edit_image" name="image" type="file">
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
