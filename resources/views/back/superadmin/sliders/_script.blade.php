<script>
	$(document).ready(function () {
		// Handling delete Slider
		$(document).on("click", ".delete-slider-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('sliders.destroy', ':id') }}".replace(':id', id);

			// Set the action attribute of the form in the modal
			$("#delete_slider_form").attr("action", deleteURL);
		});

		// Handling edit Slider modal
		$(document).on("click", ".edit-slider-modal", function () {
			const id = $(this).data("id");
			const showURL = "{{ route('sliders.show', ':id') }}".replace(":id", id);
			const updateURL = "{{ route('sliders.update', ':id') }}".replace(":id", id);

			console.log(`Fetching Slider for editing with ID: ${id}`);

			$.ajax({
				url: showURL,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					console.log("Edit response received:", res);

					// Populate modal fields with Slider data
					$("#edit_title").val(res.data.title);
					$("#edit_subtitle").val(res.data.subtitle);
					$("#edit_description").val(res.data.description);
					$("#edit_number").val(res.data.number);

					// Optional: display current image
					if (res.data.image) {
						$("#edit_image_preview").attr("src", "/storage/sliders/" + res.data.image);
					}

					// Set the form action to update route for the specific Slider
					$("#edit_slider_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error("Edit error occurred:", err);
					alert("Terjadi kesalahan saat mengambil data Slider. Silakan cek konsol.");
				},
			});
		});
	});
</script>
