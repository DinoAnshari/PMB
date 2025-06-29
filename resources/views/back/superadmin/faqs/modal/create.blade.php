<div class="modal fade faq_create_modal" id="createFaqModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="createFaqModalLabel">Tambah FAQ</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" action="{{ route('faqs.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label" for="pertanyaan">Pertanyaan</label>
                            <input class="form-control" id="pertanyaan" name="pertanyaan" type="text" placeholder="Masukkan pertanyaan" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="jawaban">Jawaban</label>
                            <textarea class="form-control" id="jawaban" name="jawaban" rows="4" placeholder="Masukkan jawaban" required></textarea>
                        </div>
                        <input type="hidden" name="is_active" value="0">
                        <div class="col-md-12 form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                            <label class="form-check-label" for="is_active">
                                Aktifkan FAQ
                            </label>
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