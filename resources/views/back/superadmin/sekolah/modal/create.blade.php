<div class="modal fade sekolah_create_modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content dark-sign-up">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="myLargeModalLabel">Input Data Sekolah</h3>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-toggle-wrapper">
                    <form class="row g-3" action="{{ route('sekolah.store') }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label" for="nama_sekolah">Nama Sekolah</label>
                            <input class="form-control" id="nama_sekolah" name="nama_sekolah" type="text" placeholder="Masukkan nama sekolah" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="alamat_sekolah">Alamat Sekolah</label>
                            <textarea class="form-control" id="alamat_sekolah" name="alamat_sekolah" rows="3" placeholder="Masukkan alamat sekolah" required></textarea>
                        </div>

                        <div class="col-md-12">
                            <button type="button" id="deteksiLokasi" class="btn btn-warning">Deteksi Lokasi Saya</button>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="latitude">Latitude</label>
                            <input class="form-control" id="latitude" name="latitude" type="text" placeholder="Latitude" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="longitude">Longitude</label>
                            <input class="form-control" id="longitude" name="longitude" type="text" placeholder="Longitude" readonly>
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
@push('js')
<script>
    document.getElementById("deteksiLokasi").addEventListener("click", function () {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;

                document.getElementById("latitude").value = lat;
                document.getElementById("longitude").value = lng;
            }, function (error) {
                alert("Gagal mendeteksi lokasi: " + error.message);
            });
        } else {
            alert("Geolocation tidak didukung oleh browser Anda.");
        }
    });
</script>
@endpush
