<script>
    $(document).ready(function () {

        /**
         * Handle klik tombol hapus video
         * - Ambil ID dari tombol yang diklik
         * - Susun URL berdasarkan route Laravel
         * - Set action pada form hapus
         */
        $(document).on("click", ".delete-video-modal", function () {
            const id = $(this).data("id");
            const deleteURL = "{{ route('videos.destroy', ':id') }}".replace(':id', id);

            $("#delete_video_form").attr("action", deleteURL);
        });

        /**
         * Handle klik tombol edit video
         * - Ambil ID dari tombol
         * - Ambil data video via AJAX
         * - Tampilkan datanya ke dalam form edit
         * - Atur action form untuk update
         */
        $(document).on("click", ".edit-video-modal", function () {
            const id = $(this).data("id");
            const showURL = "{{ route('videos.show', ':id') }}".replace(":id", id);
            const updateURL = "{{ route('videos.update', ':id') }}".replace(":id", id);

            console.log(`Mengambil data video dengan ID: ${id}`);

            $.ajax({
                url: showURL,
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
                success: (res) => {
                    console.log("Data video berhasil diambil:", res);

                    // Isi nilai ke dalam field edit modal
                    $("#edit_title").val(res.data.title);
                    $("#edit_deskripsi").val(res.data.deskripsi);
                    $("#edit_video_url").val(res.data.video_url);

                    // Tampilkan gambar saat ini (jika ada)
                    if (res.data.image) {
                        $("#edit_image_preview").attr("src", "/storage/videos/" + res.data.image);
                    }

                    // Set form action ke URL update
                    $("#edit_video_form").attr("action", updateURL);
                },
                error: (err) => {
                    console.error("Terjadi kesalahan saat mengambil data video:", err);
                    alert("Terjadi kesalahan saat mengambil data video. Silakan cek konsol.");
                },
            });
        });

    });
</script>
