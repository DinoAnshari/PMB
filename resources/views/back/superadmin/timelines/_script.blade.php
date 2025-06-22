<script>
	$(document).ready(function () {
		// Handling delete Timeline
		$(document).on("click", ".delete-timeline-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('timelines.destroy', ':id') }}".replace(':id', id);

			// Set the action attribute of the form in the modal
			$("#delete_timeline_form").attr("action", deleteURL);
		});

		// Handling edit Timeline modal
		$(document).on("click", ".edit-timeline-modal", function () {
			const id = $(this).data("id");
			const showURL = "{{ route('timelines.show', ':id') }}".replace(":id", id);
			const updateURL = "{{ route('timelines.update', ':id') }}".replace(":id", id);

			console.log(`Fetching Timeline for editing with ID: ${id}`);

			$.ajax({
				url: showURL,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					console.log("Edit response received:", res);

					// Populate modal fields with Timeline data
					$("#edit_tanggal").val(res.data.tanggal);
					$("#edit_judul").val(res.data.judul);
					$("#edit_deskripsi").val(res.data.deskripsi);

					// Set the form action to update route for the specific Timeline
					$("#edit_timeline_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error("Edit error occurred:", err);
					alert("Terjadi kesalahan saat mengambil data Timeline. Silakan cek konsol.");
				},
			});
		});
	});
</script>
