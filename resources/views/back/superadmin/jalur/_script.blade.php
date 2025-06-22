<script>
	$(document).ready(function () {
		// Handling delete jalur
		$(document).on("click", ".delete-jalur-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('jalur-pendaftaran.destroy', ':id') }}".replace(':id', id);

			// Set the action attribute of the form in the modal
			$("#delete_jalur_form").attr("action", deleteURL);
		});

		// Handling edit jalur modal
		$(document).on("click", ".edit-jalur-modal", function () {
			const id = $(this).data("id");
			let url = "{{ route('jalur-pendaftaran.show', ':paramID') }}".replace(":paramID", id);

			// Construct the update URL
			let updateURL = "{{ route('jalur-pendaftaran.update', ':paramID') }}".replace(":paramID", id);

			console.log(`Fetching jalur for editing with ID: ${id}`);

			$.ajax({
				url: url,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					console.log("Edit response received:", res);

					// Populate modal fields with jalur data
					$("#edit_nama_jalur").val(res.data.nama);
					$("#edit_tanggal_mulai").val(res.data.tanggal_mulai);
					$("#edit_tanggal_selesai").val(res.data.tanggal_selesai);

					// Set the form action to update route for the specific jalur
					$("#edit_jalur_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error("Edit error occurred:", err);
					alert("Terjadi kesalahan. Silakan cek konsol untuk detail.");
				},
			});
		});
	});
</script>
