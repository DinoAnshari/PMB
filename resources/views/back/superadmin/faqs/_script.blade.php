<script>
    $(document).ready(function () {

        /**
         * Handle klik tombol hapus FAQ
         * - Mengambil ID dari data-* attribute
         * - Mengatur action form modal hapus berdasarkan route
         */
        $(document).on("click", ".delete-faq-modal", function () {
            const id = $(this).data("id");
            const deleteURL = "{{ route('faqs.destroy', ':id') }}".replace(':id', id);

            // Setel atribut action pada form hapus FAQ
            $("#delete_faq_form").attr("action", deleteURL);
        });

        /**
         * Handle klik tombol edit FAQ
         * - Mengambil data FAQ berdasarkan ID via AJAX
         * - Menampilkan data ke dalam form modal edit
         * - Mengatur action form agar mengarah ke route update
         */
        $(document).on("click", ".edit-faq-modal", function () {
            const id = $(this).data("id");
            const showURL = "{{ route('faqs.show', ':id') }}".replace(":id", id);
            const updateURL = "{{ route('faqs.update', ':id') }}".replace(":id", id);

            // Log ID untuk debugging
            console.log(`Fetching FAQ for editing with ID: ${id}`);

            $.ajax({
                url: showURL,
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
                success: (res) => {
                    // Log respon untuk debugging
                    console.log("Edit response received:", res);

                    // Isi nilai input modal edit dengan data dari server
                    $("#edit_pertanyaan").val(res.data.pertanyaan);
                    $("#edit_jawaban").val(res.data.jawaban);
                    $("#edit_is_active").prop("checked", res.data.is_active);

                    // Setel action form edit agar sesuai dengan route update
                    $("#edit_faq_form").attr("action", updateURL);
                },
                error: (err) => {
                    console.error("Terjadi kesalahan saat mengambil data FAQ:", err);
                    alert("Terjadi kesalahan saat mengambil data FAQ. Silakan cek konsol.");
                },
            });
        });

    });
</script>
