<div class="modal fade sekolah_edit_modal" id="editSekolahModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editSekolahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="editSekolahModalLabel">Edit Data Sekolah</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" id="edit_sekolah_form" method="POST">
                        <!-- Hapus CSRF & method PUT -->

                        <div class="col-md-12">
                            <label class="form-label" for="edit_nama_sekolah">Nama Sekolah</label>
                            <input class="form-control" id="edit_nama_sekolah" name="nama_sekolah" type="text" placeholder="Masukkan nama sekolah" required>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label" for="edit_alamat_sekolah">Alamat Sekolah</label>
                            <textarea class="form-control" id="edit_alamat_sekolah" name="alamat_sekolah" rows="3" placeholder="Masukkan alamat sekolah" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <button type="button" id="deteksiLokasiEdit" class="btn btn-warning">Deteksi Lokasi Saya</button>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="edit_latitude">Latitude</label>
                            <input class="form-control" id="edit_latitude" name="latitude" type="text" placeholder="Latitude" readonly required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="edit_longitude">Longitude</label>
                            <input class="form-control" id="edit_longitude" name="longitude" type="text" placeholder="Longitude" readonly required>
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

<!-- Script statis untuk deteksi lokasi -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const btnDeteksi = document.getElementById('deteksiLokasiEdit');

        btnDeteksi.addEventListener('click', function () {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        document.getElementById('edit_latitude').value = position.coords.latitude;
                        document.getElementById('edit_longitude').value = position.coords.longitude;
                    },
                    function (error) {
                        switch (error.code) {
                            case error.PERMISSION_DENIED:
                                alert("Akses lokasi ditolak oleh pengguna.");
                                break;
                            case error.POSITION_UNAVAILABLE:
                                alert("Informasi lokasi tidak tersedia.");
                                break;
                            case error.TIMEOUT:
                                alert("Permintaan lokasi melebihi batas waktu.");
                                break;
                            case error.UNKNOWN_ERROR:
                                alert("Terjadi kesalahan lokasi yang tidak diketahui.");
                                break;
                        }
                    }
                );
            } else {
                alert("Browser ini tidak mendukung fitur geolokasi.");
            }
        });
    });
</script>
