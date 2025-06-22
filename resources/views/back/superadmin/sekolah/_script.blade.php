<script>
	$(document).ready(function () {
		// Handling delete sekolah
		$(document).on("click", ".delete-sekolah-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('sekolah.destroy', ':id') }}".replace(':id', id);
			$("#delete_sekolah_form").attr("action", deleteURL);
		});

		// Handling edit sekolah modal
		$(document).on("click", ".edit-sekolah-modal", function () {
			const id = $(this).data("id");
			let url = "{{ route('sekolah.show', ':paramID') }}".replace(":paramID", id);
			let updateURL = "{{ route('sekolah.update', ':paramID') }}".replace(":paramID", id);

			console.log(`Fetching sekolah for editing with ID: ${id}`);

			$.ajax({
				url: url,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					console.log("Edit response received:", res);

					// Populate modal fields with sekolah data
					$("#edit_nama_sekolah").val(res.data.nama_sekolah);
					$("#edit_alamat_sekolah").val(res.data.alamat_sekolah);
					$("#edit_latitude").val(res.data.latitude);
					$("#edit_longitude").val(res.data.longitude);

					// Set the form action to update route for the specific sekolah
					$("#edit_sekolah_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error("Edit error occurred:", err);
					alert("Terjadi kesalahan. Silakan cek konsol untuk detail.");
				},
			});
		});
	});
</script>
