<div class="modal fade biodata_edit_modal" id="editBiodataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="editBiodataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editBiodataModalLabel">Edit Biodata</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($biodata)
                <form action="{{ route('biodata.update', $biodata->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_nisn" class="form-label">NISN</label>
                                <input type="text" class="form-control" id="edit_nisn" name="nisn" value="{{ $biodata->nisn }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="edit_nik" name="nik" value="{{ $biodata->nik }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_no_kk" class="form-label">No. KK</label>
                                <input type="text" class="form-control" id="edit_no_kk" name="no_kk" value="{{ $biodata->no_kk }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="edit_jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="Laki-laki" {{ $biodata->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="Perempuan" {{ $biodata->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="edit_tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="edit_tanggal_lahir" name="tanggal_lahir" value="{{ $biodata->tanggal_lahir }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" id="edit_tempat_lahir" name="tempat_lahir" value="{{ $biodata->tempat_lahir }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="edit_agama" class="form-label">Agama</label>
                                <select class="form-select" id="edit_agama" name="agama" required>
                                    <option value="Islam" {{ $biodata->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $biodata->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                    <option value="Katolik" {{ $biodata->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                    <option value="Hindu" {{ $biodata->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Buddha" {{ $biodata->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                    <option value="Konghucu" {{ $biodata->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                    <option value="Lainnya" {{ $biodata->agama == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="edit_alamat" class="form-label">Alamat Lengkap</label>
                                <textarea class="form-control" id="edit_alamat" name="alamat" rows="2" required>{{ $biodata->alamat }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="edit_district_name" class="form-label">Kecamatan</label>
                                <input type="text" class="form-control" id="edit_kecamatan" name="kecamatan" value="{{ $biodata->district_name }}">
                            </div>
                            <div class="mb-3">
                                <label for="edit_village_name" class="form-label">Kelurahan</label>
                                <input type="text" class="form-control" id="edit_kelurahan" name="kelurahan" value="{{ $biodata->village_name }}">
                            </div>
                            <div class="mb-3">
                                <label for="edit_asal_sekolah" class="form-label">Asal Sekolah</label>
                                <input type="text" class="form-control" id="edit_asal_sekolah" name="asal_sekolah" value="{{ $biodata->asal_sekolah }}">
                            </div>
                            <div class="mb-3">
                                <label for="edit_alamat_asal_sekolah" class="form-label">Alamat Asal Sekolah</label>
                                <input type="text" class="form-control" id="edit_alamat_asal_sekolah" name="alamat_asal_sekolah" value="{{ $biodata->alamat_asal_sekolah }}">
                            </div>
                            <div class="mb-3">
                                <label for="edit_pas_foto" class="form-label">Pas Foto</label>
                                <input type="file" class="form-control" id="edit_pas_foto" name="pas_foto" accept="image/*">
                                <div class="mt-2">
                                    <img id="edit_image_preview" src="#" alt="Preview Gambar" class="img-fluid rounded" style="max-height: 200px;">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="edit_tinggal_dengan" class="form-label">Tinggal Dengan</label>
                                <select class="form-control" id="edit_tinggal_dengan" name="tinggal_dengan" required>
                                    <option value="Orang Tua" {{ $biodata->tinggal_dengan == 'Orang Tua' ? 'selected' : '' }}>Orang Tua</option>
                                    <option value="Wali" {{ $biodata->tinggal_dengan == 'Wali' ? 'selected' : '' }}>Wali</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div id="editFormOrangTua" style="{{ $biodata->tinggal_dengan == 'Orang Tua' ? 'display:block;' : 'display:none;' }}">
                                <h5>Data Orang Tua</h5>

                                <div class="mb-3">
                                    <label for="edit_nama_ayah" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" id="edit_nama_ayah" name="nama_ayah" value="{{ $biodata->nama_ayah }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_pekerjaan_ayah" class="form-label">Pekerjaan Ayah</label>
                                    <input type="text" class="form-control" id="edit_pekerjaan_ayah" name="pekerjaan_ayah" value="{{ $biodata->pekerjaan_ayah }}">
                                </div>
                                <div class="mb-3">
                                    <label for="edit_nama_ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="edit_nama_ibu" name="nama_ibu" value="{{ $biodata->nama_ibu }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_pekerjaan_ibu" class="form-label">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" id="edit_pekerjaan_ibu" name="pekerjaan_ibu" value="{{ $biodata->pekerjaan_ibu }}">
                                </div>
                                <div class="mb-3">
                                    <label for="edit_alamat_ortu" class="form-label">Alamat Orang Tua</label>
                                    <textarea class="form-control" id="edit_alamat_ortu" name="alamat_ortu" required>{{ $biodata->alamat_ortu }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_hp_ortu" class="form-label">No HP * Untuk info Pengumuman</label>
                                    <input type="text" class="form-control" id="edit_hp_ortu" name="hp_ortu" value="{{ $biodata->hp_ortu }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="editFormWali" style="{{ $biodata->tinggal_dengan == 'Wali' ? 'display:block;' : 'display:none;' }}">

                                <h5>Data Wali</h5>
                                <div class="mb-3">
                                    <label for="edit_nama_wali" class="form-label">Nama Wali</label>
                                    <input type="text" class="form-control" id="edit_nama_wali" name="nama_wali" value="{{ $biodata->nama_wali }}">
                                </div>
                                <div class="mb-3">
                                    <label for="edit_pekerjaan_wali" class="form-label">Pekerjaan Wali</label>
                                    <input type="text" class="form-control" id="edit_pekerjaan_wali" name="pekerjaan_wali" value="{{ $biodata->pekerjaan_wali }}">
                                </div>
                                <div class="mb-3">
                                    <label for="edit_alamat_wali" class="form-label">Alamat Wali</label>
                                    <textarea class="form-control" id="edit_alamat_wali" name="alamat_wali">{{ $biodata->alamat_wali }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="edit_no_hp_wali" class="form-label">No HP Wali</label>
                                    <input type="text" class="form-control" id="edit_no_hp_wali" name="no_hp_wali" value="{{ $biodata->no_hp_wali }}">
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
                @else
                <div class="alert alert-warning">
                    Data biodata tidak ditemukan.
                </div>
                @endif
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
            } else {
                formOrangTua.style.display = "none";
                formWali.style.display = "none";
            }
        }
        toggleForms();

        tinggalDengan.addEventListener("change", toggleForms);
    });
</script>