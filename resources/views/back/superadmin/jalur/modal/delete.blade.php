<div class="modal fade jalur_delete_modal" id="deleteJalurModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteJalurModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="deleteJalurModalLabel">Konfirmasi Hapus Jalur Pendaftaran</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus jalur pendaftaran ini?</p>
                <p><strong id="delete_jalur_name"></strong></p>
                <form id="delete_jalur_form" method="POST">
                    <div class="col-12">
                        <button class="btn btn-danger" type="submit">Hapus</button>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
