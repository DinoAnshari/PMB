<div class="modal fade biodata_create_modal" id="createBiodataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createBiodataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="createBiodataModalLabel">Isi Biodata</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('biodata.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" required>
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_kk" class="form-label">No. KK</label>
                                <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="">Pilih</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                            <div class="mb-3">
                                <label for="agama" class="form-label">Agama</label>
                                <select class="form-select" id="agama" name="agama" required>
                                    <option value="">Pilih</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="district_name" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="district_name" name="district_name">
                            </div>
                            <div class="mb-3">
                                <label for="village_name" class="form-label">Kelurahan</label>
                                <input type="text" class="form-control" id="village_name" name="village_name">
                            </div>
                            <div class="mb-3">
                                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                            </div>
                            <div class="mb-3">
                                <label for="alamat_asal_sekolah" class="form-label">Alamat Asal Sekolah</label>
                                <input type="text" class="form-control" id="alamat_asal_sekolah" name="alamat_asal_sekolah">
                            </div>
                            <div class="mb-3">
                                <label for="pas_foto" class="form-label">Pas Foto</label>
                                <input type="file" class="form-control" id="pas_foto" name="pas_foto" accept="image/*" required>
                            </div>
                            <div class="mb-3">
                                <label for="tinggal_dengan" class="form-label">Tinggal Dengan</label>
                                <select class="form-control" id="tinggal_dengan" name="tinggal_dengan" required>
                                    <option value="">Pilih</option>
                                    <option value="Orang Tua">Orang Tua</option>
                                    <option value="Wali">Wali</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div id="formOrangTua" style="display: none;">
                                <h5>Data Orang Tua</h5>

                                <div class="mb-3">
                                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_ortu" class="form-label">Alamat Orang Tua</label>
                                    <textarea class="form-control" id="alamat_ortu" name="alamat_ortu" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="hp_ortu" class="form-label">No HP * Untuk info Pengumuman</label>
                                    <input type="text" class="form-control" id="hp_ortu" name="hp_ortu" placeholder="08xxxxx">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="formWali" style="display: none;">

                                <h5>Data Wali</h5>
                                <div class="mb-3">
                                    <label for="nama_wali" class="form-label">Nama Wali</label>
                                    <input type="text" class="form-control" id="nama_wali" name="nama_wali">
                                </div>
                                <div class="mb-3">
                                    <label for="pekerjaan_wali" class="form-label">Pekerjaan Wali</label>
                                    <input type="text" class="form-control" id="pekerjaan_wali" name="pekerjaan_wali">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat_wali" class="form-label">Alamat Wali</label>
                                    <textarea class="form-control" id="alamat_wali" name="alamat_wali"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="no_hp_wali" class="form-label">No HP Wali</label>
                                    <input type="text" class="form-control" id="no_hp_wali" name="no_hp_wali">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check valid-form">
                            <input class="form-check-input" id="invalidCheck" type="checkbox" value="" required="">
                            <label class="form-check-label" for="invalidCheck">"Pernyataan: Bahwasanya data yang saya berikan di atas adalah benar. Apabila di kemudian hari ditemukan data yang tidak benar atau tidak sesuai, maka saya bersedia untuk diproses sesuai jalur hukum yang berlaku."</label>
                            <div class="invalid-feedback">Anda harus setuju, sebelum melanjutkan.</div>
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
        let tinggalDengan = document.getElementById("tinggal_dengan");
        let formOrangTua = document.getElementById("formOrangTua");
        let formWali = document.getElementById("formWali");

        tinggalDengan.addEventListener("change", function() {
            if (this.value === "Orang Tua") {
                formOrangTua.style.display = "block";
                formWali.style.display = "none";
            } else if (this.value === "Wali") {
                formWali.style.display = "block";
                formOrangTua.style.display = "block";
            } else {
                formOrangTua.style.display = "none";
                formWali.style.display = "none";
            }
        });
    });
</script>