<div class="modal fade biodata_edit_modal" id="editBiodataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editBiodataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editBiodataModalLabel">Edit Biodata</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">NISN</label>
                                <input type="text" class="form-control" value="1234567890" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" value="3275123456789000" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No. KK</label>
                                <input type="text" class="form-control" value="3275001234567890" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select class="form-select" required>
                                    <option selected>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" value="2012-01-12" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" value="Maju Jaya" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Agama</label>
                                <select class="form-select" required>
                                    <option selected>Islam</option>
                                    <option>Kristen</option>
                                    <option>Katolik</option>
                                    <option>Hindu</option>
                                    <option>Buddha</option>
                                    <option>Konghucu</option>
                                    <option>Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" rows="2" required>Jl. Merdeka No. 10</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" value="Maju Utara">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kelurahan</label>
                                <input type="text" class="form-control" value="Martoba">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Asal Sekolah</label>
                                <input type="text" class="form-control" value="SDN 01 Maju Jaya">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat Asal Sekolah</label>
                                <input type="text" class="form-control" value="Jl. Pendidikan No. 5">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pas Foto</label>
                                <input type="file" class="form-control" accept="image/*">
                                <div class="mt-2">
                                    <img src="{{ asset('storage/foto_siswa_dummy.jpg') }}" alt="Preview Gambar" class="img-fluid rounded" style="max-height: 200px;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tinggal Dengan</label>
                                <select class="form-control" id="edit_tinggal_dengan" required>
                                    <option selected>Orang Tua</option>
                                    <option>Wali</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-6" id="editFormOrangTua" style="display:block;">
                            <h5>Data Orang Tua</h5>
                            <div class="mb-3">
                                <label class="form-label">Nama Ayah</label>
                                <input type="text" class="form-control" value="Ahmad Sulaiman">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" value="Karyawan Swasta">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Ibu</label>
                                <input type="text" class="form-control" value="Siti Mariam">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" value="Ibu Rumah Tangga">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat Orang Tua</label>
                                <textarea class="form-control" required>Jl. Merdeka No. 10</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No HP * Untuk info Pengumuman</label>
                                <input type="text" class="form-control" value="081234567890">
                            </div>
                        </div>

                        <div class="col-md-6" id="editFormWali" style="display:none;">
                            <h5>Data Wali</h5>
                            <div class="mb-3">
                                <label class="form-label">Nama Wali</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pekerjaan Wali</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat Wali</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">No HP Wali</label>
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="form-check valid-form">
                            <input class="form-check-input" id="invalidCheck" type="checkbox" required>
                            <label class="form-check-label" for="invalidCheck">
                                "Pernyataan: Bahwasanya data yang saya berikan di atas adalah benar..."
                            </label>
                        </div>
                    </div>

                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let tinggalDengan = document.getElementById("edit_tinggal_dengan");
        let formOrangTua = document.getElementById("editFormOrangTua");
        let formWali = document.getElementById("editFormWali");

        function toggleForms() {
            if (tinggalDengan.value === "Orang Tua") {
                formOrangTua.style.display = "block";
                formWali.style.display = "none";
            } else if (tinggalDengan.value === "Wali") {
                formOrangTua.style.display = "block";
                formWali.style.display = "block";
            }
        }

        toggleForms();
        tinggalDengan.addEventListener("change", toggleForms);
    });
</script>
