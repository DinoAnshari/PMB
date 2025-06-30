<script>
    $(document).ready(function () {

        /**
         * Handle klik tombol hapus jalur pendaftaran
         * - Ambil ID dari tombol yang diklik
         * - Susun URL berdasarkan route Laravel
         * - Set action pada form hapus
         */
        $(document).on("click", ".delete-jalur-modal", function () {
            const id = $(this).data("id");
            const deleteURL = "{{ route('jalur-pendaftaran.destroy', ':id') }}".replace(':id', id);

            // Set URL ke dalam atribut action form hapus
            $("#delete_jalur_form").attr("action", deleteURL);
        });

        /**
         * Handle klik tombol edit jalur pendaftaran
         * - Ambil ID dari tombol
         * - Ambil data jalur via AJAX
         * - Tampilkan data ke dalam form edit
         * - Atur action form untuk update
         */
        $(document).on("click", ".edit-jalur-modal", function () {
            const id = $(this).data("id");
            const showURL = "{{ route('jalur-pendaftaran.show', ':id') }}".replace(':id', id);
            const updateURL = "{{ route('jalur-pendaftaran.update', ':id') }}".replace(':id', id);

            console.log(`Mengambil data jalur dengan ID: ${id}`);

            $.ajax({
                url: showURL,
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
                success: (res) => {
                    console.log("Data jalur berhasil diambil:", res);

                    // Isi nilai ke dalam field edit modal
                    $("#edit_nama_jalur").val(res.data.nama);
                    $("#edit_tanggal_mulai").val(res.data.tanggal_mulai);
                    $("#edit_tanggal_selesai").val(res.data.tanggal_selesai);

                    // Set form action ke URL update
                    $("#edit_jalur_form").attr("action", updateURL);
                },
                error: (err) => {
                    console.error("Terjadi kesalahan saat mengambil data jalur:", err);
                    alert("Terjadi kesalahan saat mengambil data jalur. Silakan cek konsol.");
                },
            });
        });

    });
</script>
