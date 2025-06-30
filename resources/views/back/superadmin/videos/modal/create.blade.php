<div class="modal fade video_create_modal" id="createVideoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="createVideoModalLabel">Tambah Video</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-12">
                            <label class="form-label" for="title">Judul Video</label>
                            <input class="form-control" id="title" name="title" type="text" placeholder="Masukkan judul video" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="deskripsi">Deskripsi Video</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi video" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="video_url">Link Video</label>
                            <input class="form-control" id="video_url" name="video_url" type="text" placeholder="Masukkan link video (URL YouTube, Vimeo, dsb)" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="image">Thumbnail Video</label>
                            <input class="form-control" id="image" name="image" type="file" required>
                            <small class="text-muted">Thumbnail wajib diunggah saat membuat video</small>
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
