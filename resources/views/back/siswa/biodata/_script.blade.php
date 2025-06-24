<script>
    $(document).ready(function() {
        // Delete Biodata
        $(".delete-biodata").on("click", function() {
            const id = $(this).data("id");
            const deleteURL = "{{ route('biodata.destroy', ':id') }}".replace(':id', id);

            // Set action attribute of the form in the delete modal
            $("#delete_biodata_form").attr("action", deleteURL);
        });

        // Edit Biodata
        $(".edit-biodata-modal").on("click", function() {
            const id = $(this).data("id");
            let url = "{{ route('biodata.show', ':paramID') }}".replace(":paramID", id);

            // Construct the update URL
            let updateURL = "{{ route('biodata.update', ':paramID') }}".replace(":paramID", id);

            console.log(`Fetching Biodata for editing with ID: ${id}`); // Log ID for debugging

            $.ajax({
                url: url,
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
                success: (res) => {
                    console.log("Edit response received:", res); // Log response ke console

                    if (!res.data) {
                        console.error("Data tidak ditemukan dalam respons!");
                        alert("Data tidak ditemukan!");
                        return;
                    }

                    console.log("Biodata yang diterima:", res.data); // Tambahkan log

                    $("#edit_nisn").val(res.data.nisn);
                    $("#edit_nik").val(res.data.nik);
                    $("#edit_no_kk").val(res.data.no_kk);
                    $("#edit_jenis_kelamin").val(res.data.jenis_kelamin);
                    $("#edit_tanggal_lahir").val(res.data.tanggal_lahir);
                    $("#edit_tempat_lahir").val(res.data.tempat_lahir);
                    $("#edit_agama").val(res.data.agama);
                    $("#edit_alamat").val(res.data.alamat);
                    $("#edit_tinggal_dengan").val(res.data.tinggal_dengan);
                    $("#edit_asal_sekolah").val(res.data.asal_sekolah);
                    $("#edit_alamat_asal_sekolah").val(res.data.alamat_asal_sekolah);
                    $("#edit_kecamatan").val(res.data.kecamatan);
                    $("#edit_kelurahan").val(res.data.kelurahan);
                    if (res.data.pas_foto) {
						$("#edit_image_preview").attr("src", "/storage/" + res.data.pas_foto);
					}
                    // Data Orang Tua (cek apakah `parent` ada)
                    if (res.data.parent) {
                        $("#edit_nama_ayah").val(res.data.parent.nama_ayah ?? '');
                        $("#edit_pekerjaan_ayah").val(res.data.parent.pekerjaan_ayah ?? '');
                        $("#edit_nama_ibu").val(res.data.parent.nama_ibu ?? '');
                        $("#edit_pekerjaan_ibu").val(res.data.parent.pekerjaan_ibu ?? '');
                        $("#edit_alamat_ortu").val(res.data.parent.alamat ?? '');
                        $("#edit_hp_ortu").val(res.data.parent.no_hp ?? '');
                    } else {
                        console.warn("Data orang tua tidak ditemukan dalam respons.");
                    }

                    // Data Wali (cek apakah `guardian` ada)
                    if (res.data.guardian) {
                        $("#edit_nama_wali").val(res.data.guardian.nama_wali ?? '');
                        $("#edit_pekerjaan_wali").val(res.data.guardian.pekerjaan_wali ?? '');
                        $("#edit_alamat_wali").val(res.data.guardian.alamat ?? '');
                        $("#edit_no_hp_wali").val(res.data.guardian.no_hp ?? '');
                    } else {
                        console.warn("Data wali tidak ditemukan dalam respons.");
                    }

                    // Set action form update
                    $("form").attr("action", updateURL);
                },
                error: (err) => {
                    console.error("Edit error occurred:", err);
                    alert("Terjadi kesalahan, silakan periksa konsol untuk detail.");
                },
            });
        });
    });
</script>