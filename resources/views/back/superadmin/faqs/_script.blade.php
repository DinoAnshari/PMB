<script>
	$(document).ready(function () {
		// Handling delete FAQ
		$(document).on("click", ".delete-faq-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('faqs.destroy', ':id') }}".replace(':id', id);

			// Set the action attribute of the form in the modal
			$("#delete_faq_form").attr("action", deleteURL);
		});

		// Handling edit FAQ modal
		$(document).on("click", ".edit-faq-modal", function () {
			const id = $(this).data("id");
			const showURL = "{{ route('faqs.show', ':id') }}".replace(":id", id);
			const updateURL = "{{ route('faqs.update', ':id') }}".replace(":id", id);

			console.log(`Fetching FAQ for editing with ID: ${id}`);

			$.ajax({
				url: showURL,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					console.log("Edit response received:", res);

					// Populate modal fields with FAQ data
					$("#edit_question").val(res.data.question);
					$("#edit_answer").val(res.data.answer);
					$("#edit_is_active").prop('checked', res.data.is_active);

					// Set the form action to update route for the specific FAQ
					$("#edit_faq_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error("Edit error occurred:", err);
					alert("Terjadi kesalahan saat mengambil data FAQ. Silakan cek konsol.");
				},
			});
		});
	});
</script>
