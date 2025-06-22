<div class="modal fade faq_delete_modal" id="deleteFaqModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteFaqModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="deleteFaqModalLabel">Konfirmasi Hapus FAQ</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus FAQ ini?</p>
                <p><strong id="delete_faq_question"></strong></p>
                <form id="delete_faq_form" method="POST">
                    @csrf
                    @method('DELETE') {{-- Penting untuk method DELETE --}}
                    <div class="col-12">
                        <button class="btn btn-danger" type="submit">Hapus</button>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
