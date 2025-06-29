<script>
    $(document).ready(function () {

        /**
         * Handle klik tombol hapus slider
         * - Mengambil ID dari elemen
         * - Menyusun URL delete berdasarkan route Laravel
         * - Menyisipkan URL ke dalam atribut action form hapus
         */
        $(document).on("click", ".delete-slider-modal", function () {
            const id = $(this).data("id");
            const deleteURL = "{{ route('sliders.destroy', ':id') }}".replace(':id', id);

            $("#delete_slider_form").attr("action", deleteURL);
        });

        /**
         * Handle klik tombol edit slider
         * - Mengambil data slider via AJAX
         * - Menyusun URL update berdasarkan ID
         * - Menampilkan data slider dalam modal edit
         */
        $(document).on("click", ".edit-slider-modal", function () {
            const id = $(this).data("id");
            const showURL = "{{ route('sliders.show', ':id') }}".replace(":id", id);
            const updateURL = "{{ route('sliders.update', ':id') }}".replace(":id", id);

            console.log(`Mengambil data Slider dengan ID: ${id}`);

            $.ajax({
                url: showURL,
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
                success: (res) => {
                    console.log("Respons berhasil diterima:", res);

                    // Isi form edit sesuai data dari server
                    $("#edit_judul").val(res.data.judul);
                    $("#edit_subtitle").val(res.data.subtitle);
                    $("#edit_deskripsi").val(res.data.deskripsi);
                    $("#edit_nomor").val(res.data.nomor);

                    // Tampilkan gambar jika ada
                    if (res.data.gambar) {
                        $("#edit_image_preview").attr("src", "/storage/sliders/" + res.data.gambar);
                    } else {
                        $("#edit_image_preview").attr("src", "#");
                    }

                    // Set action form update
                    $("#edit_slider_form").attr("action", updateURL);
                },
                error: (err) => {
                    console.error("Terjadi kesalahan saat mengambil data slider:", err);
                    alert("Gagal mengambil data slider. Silakan periksa koneksi atau cek konsol.");
                },
            });
        });

    });
</script>
