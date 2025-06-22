<div class="modal fade sekolah_delete_modal" id="deleteSekolahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteSekolahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="deleteSekolahModalLabel">Konfirmasi Hapus Sekolah</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus data sekolah ini?</p>
                <p><strong id="delete_sekolah_name"></strong></p>
                <form id="delete_sekolah_form" method="POST">
                    @csrf
                    @method('DELETE') 
                    <div class="col-12">
                        <button class="btn btn-danger" type="submit">Hapus</button>
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
