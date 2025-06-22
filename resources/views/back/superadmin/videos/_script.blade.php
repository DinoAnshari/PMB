<script>
	$(document).ready(function () {
		// Handling delete Video
		$(document).on("click", ".delete-video-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('videos.destroy', ':id') }}".replace(':id', id);

			// Set the action attribute of the form in the modal
			$("#delete_video_form").attr("action", deleteURL);
		});

		// Handling edit Video modal
		$(document).on("click", ".edit-video-modal", function () {
			const id = $(this).data("id");
			const showURL = "{{ route('videos.show', ':id') }}".replace(":id", id);
			const updateURL = "{{ route('videos.update', ':id') }}".replace(":id", id);

			console.log(`Fetching Video for editing with ID: ${id}`);

			$.ajax({
				url: showURL,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					console.log("Edit response received:", res);

					// Populate modal fields with Video data
					$("#edit_title").val(res.data.title);
					$("#edit_deskripsi").val(res.data.deskripsi);
					$("#edit_video_url").val(res.data.video_url);

					// Optional: display current image
					if (res.data.image) {
						$("#edit_image_preview").attr("src", "/storage/videos/" + res.data.image);
					}

					// Set the form action to update route for the specific Video
					$("#edit_video_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error("Edit error occurred:", err);
					alert("Terjadi kesalahan saat mengambil data Video. Silakan cek konsol.");
				},
			});
		});
	});
</script>
