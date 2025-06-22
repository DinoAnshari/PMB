<div class="modal fade user_create_modal" id="createUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="createUserModalLabel">Input Data User</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="create_user_form" method="POST" action="#">
                        <input type="hidden" name="_token" value="">

                        <div class="col-md-12">
                            <label class="form-label" for="name">Nama</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Masukkan nama" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" placeholder="Masukkan email" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="password">Password</label>
                            <input class="form-control" id="password" name="password" type="password" placeholder="Masukkan password" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Konfirmasi password" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="sekolah_id">Sekolah</label>
                            <select class="form-select" id="sekolah_id" name="sekolah_id" required>
                                <option value="">-- Pilih Sekolah --</option>
                                <option value="1">SMPN 1 Maju Jaya</option>
                                <option value="2">SMPN 2 Maju Jaya</option>
                                <option value="3">SMPN 3 Maju Jaya</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="role">Role</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                <option value="operator">Operator</option>
                                <option value="operator">Pengawas</option>
                            </select>
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
