<div class="modal fade user_edit_modal" id="editUserModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editUserModalLabel">Edit Data User</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="edit_user_form" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="col-md-12">
                            <label class="form-label" for="edit_name">Nama</label>
                            <input class="form-control" id="edit_name" name="name" type="text" placeholder="Masukkan nama" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_email">Email</label>
                            <input class="form-control" id="edit_email" name="email" type="email" placeholder="Masukkan email" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_password">Password (Kosongkan jika tidak diubah)</label>
                            <input class="form-control" id="edit_password" name="password" type="password" placeholder="Masukkan password baru (jika ingin mengubah)">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="password_confirmation">Konfirmasi Password (Kosongkan jika tidak diubah)</label>
                            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Konfirmasi password" >
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="edit_sekolah_id">Sekolah</label>
                            <select class="form-select" id="edit_sekolah_id" name="sekolah_id" required>
                                <option value="">-- Pilih Sekolah --</option>
                                {{-- Akan diisi dari JavaScript --}}
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_roles">Role</label>
                            <select class="form-select" id="edit_roles" name="role" required>
                                @foreach ($roles as $role)
                                <option value="{{ $role }}" {{ old('role', $user->roles->first()->name ?? '') == $role ? 'selected' : '' }}>
                                    {{ ucfirst($role) }}
                                </option>
                                @endforeach
                            </select>
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