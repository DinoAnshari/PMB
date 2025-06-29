<script>
    $(document).ready(function () {

        /**
         * Handle klik tombol hapus timeline
         * - Ambil ID dari tombol yang diklik
         * - Susun URL berdasarkan route Laravel
         * - Set action pada form hapus
         */
        $(document).on("click", ".delete-timeline-modal", function () {
            const id = $(this).data("id");
            const deleteURL = "{{ route('timelines.destroy', ':id') }}".replace(':id', id);

            $("#delete_timeline_form").attr("action", deleteURL);
        });

        /**
         * Handle klik tombol edit timeline
         * - Ambil ID dari tombol
         * - Ambil data timeline via AJAX
         * - Tampilkan datanya ke dalam form edit
         * - Atur action form untuk update
         */
        $(document).on("click", ".edit-timeline-modal", function () {
            const id = $(this).data("id");
            const showURL = "{{ route('timelines.show', ':id') }}".replace(":id", id);
            const updateURL = "{{ route('timelines.update', ':id') }}".replace(":id", id);

            console.log(`Fetching timeline data with ID: ${id}`);

            $.ajax({
                url: showURL,
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
                success: (res) => {
                    console.log("Timeline data received:", res);

                    // Isi nilai ke dalam field edit modal
                    $("#edit_tanggal").val(res.data.tanggal);
                    $("#edit_judul").val(res.data.judul);
                    $("#edit_deskripsi").val(res.data.deskripsi);

                    // Set form action ke URL update
                    $("#edit_timeline_form").attr("action", updateURL);
                },
                error: (err) => {
                    console.error("Terjadi kesalahan:", err);
                    alert("Terjadi kesalahan saat mengambil data timeline. Silakan cek konsol.");
                },
            });
        });

    });
</script>
