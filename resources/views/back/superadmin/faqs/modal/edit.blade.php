<div class="modal fade faq_edit_modal" id="editFaqModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editFaqModalLabel">Edit FAQ</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="edit_faq_form" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <label class="form-label" for="edit_pertanyaan">Pertanyaan</label>
                            <input class="form-control" id="edit_pertanyaan" name="pertanyaan" type="text" placeholder="Masukkan pertanyaan" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="edit_jawaban">Jawaban</label>
                            <textarea class="form-control" id="edit_jawaban" name="jawaban" rows="4" placeholder="Masukkan jawaban" required></textarea>
                        </div>
                        <input type="hidden" name="is_active" value="0">
                        <div class="col-md-12 form-check">
                            <input class="form-check-input" type="checkbox" id="edit_is_active" name="is_active" value="1">
                            <label class="form-check-label" for="edit_is_active">Aktifkan FAQ</label>
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
