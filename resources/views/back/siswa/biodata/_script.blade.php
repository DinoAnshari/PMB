<script>
    $(document).ready(function () {

        /**
         * Saat tombol edit ditekan, ambil data biodata via AJAX dan isi form edit
         */
        $(".edit-biodata-modal").on("click", function () {
            const id = $(this).data("id");
            const url = "{{ route('biodata.show', ':id') }}".replace(":id", id);
            const updateURL = "{{ route('biodata.update', ':id') }}".replace(":id", id);

            $.ajax({
                url: url,
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
                success: (res) => {
                    if (!res.data) {
                        alert("Data tidak ditemukan!");
                        return;
                    }

                    const s = res.data;

                    // Isi form biodata utama
                    $("#edit_nisn").val(s.nisn);
                    $("#edit_nik").val(s.nik);
                    $("#edit_no_kk").val(s.no_kk);
                    $("#edit_jenis_kelamin").val(s.jenis_kelamin);
                    $("#edit_tanggal_lahir").val(s.tanggal_lahir);
                    $("#edit_tempat_lahir").val(s.tempat_lahir);
                    $("#edit_agama").val(s.agama);
                    $("#edit_alamat").val(s.alamat);
                    $("#edit_tinggal_dengan").val(s.tinggal_dengan);
                    $("#edit_asal_sekolah").val(s.asal_sekolah);
                    $("#edit_alamat_asal_sekolah").val(s.alamat_asal_sekolah);
                    $("#edit_kecamatan").val(s.kecamatan);
                    $("#edit_kelurahan").val(s.kelurahan);

                    // Tampilkan preview foto jika ada
                    if (s.pas_foto) {
                        $("#edit_image_preview").attr("src", "/storage/" + s.pas_foto);
                    }

                    // Isi data orang tua jika tersedia
                    if (s.parent) {
                        $("#edit_nama_ayah").val(s.parent.nama_ayah ?? '');
                        $("#edit_pekerjaan_ayah").val(s.parent.pekerjaan_ayah ?? '');
                        $("#edit_nama_ibu").val(s.parent.nama_ibu ?? '');
                        $("#edit_pekerjaan_ibu").val(s.parent.pekerjaan_ibu ?? '');
                        $("#edit_alamat_ortu").val(s.parent.alamat ?? '');
                        $("#edit_hp_ortu").val(s.parent.no_hp ?? '');
                    }

                    // Isi data wali jika tersedia
                    if (s.guardian) {
                        $("#edit_nama_wali").val(s.guardian.nama_wali ?? '');
                        $("#edit_pekerjaan_wali").val(s.guardian.pekerjaan_wali ?? '');
                        $("#edit_alamat_wali").val(s.guardian.alamat ?? '');
                        $("#edit_no_hp_wali").val(s.guardian.no_hp ?? '');
                    }

                    // Set URL aksi form update
                    $("form").attr("action", updateURL);
                },
                error: (err) => {
                    alert("Terjadi kesalahan saat memuat data.");
                    console.error(err);
                },
            });
        });
    });
</script>
