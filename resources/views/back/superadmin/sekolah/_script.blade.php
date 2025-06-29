<script>
	$(document).ready(function () {
		$(document).on("click", ".delete-sekolah-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('sekolah.destroy', ':id') }}".replace(':id', id);
			$("#delete_sekolah_form").attr("action", deleteURL);
		});

		$(document).on("click", ".edit-sekolah-modal", function () {
			const id = $(this).data("id");
			const url = "{{ route('sekolah.show', ':paramID') }}".replace(":paramID", id);
			const updateURL = "{{ route('sekolah.update', ':paramID') }}".replace(":paramID", id);

			$.ajax({
				url: url,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					$("#edit_nama_sekolah").val(res.data.nama_sekolah);
					$("#edit_alamat_sekolah").val(res.data.alamat_sekolah);
					$("#edit_latitude").val(res.data.latitude);
					$("#edit_longitude").val(res.data.longitude);
					$("#edit_sekolah_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error(err);
					alert("Terjadi kesalahan. Silakan cek konsol untuk detail.");
				},
			});
		});
	});
</script>
