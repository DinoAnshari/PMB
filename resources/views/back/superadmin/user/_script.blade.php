<script>
	$(document).ready(function () {
		$(document).on("click", ".delete-user-modal", function () {
			const id = $(this).data("id");
			const deleteURL = "{{ route('users.destroy', ':id') }}".replace(':id', id);
			$("#delete_user_form").attr("action", deleteURL);
		});

		$(document).on("click", ".edit-user-modal", function () {
			const id = $(this).data("id");
			const fetchURL = "{{ route('users.show', ':id') }}".replace(':id', id);
			const updateURL = "{{ route('users.update', ':id') }}".replace(':id', id);

			$.ajax({
				url: fetchURL,
				method: "GET",
				headers: {
					"Content-Type": "application/json",
				},
				success: (res) => {
					const user = res.data;
					const schools = res.schools;

					$("#edit_name").val(user.name);
					$("#edit_email").val(user.email);

					$("#edit_sekolah_id").empty().append(`<option value="">-- Pilih Sekolah --</option>`);
					schools.forEach(sekolah => {
						const selected = sekolah.id === user.sekolah_id ? 'selected' : '';
						$("#edit_sekolah_id").append(`<option value="${sekolah.id}" ${selected}>${sekolah.nama_sekolah}</option>`);
					});

					if (user.roles && user.roles.length > 0) {
						const fullRole = user.roles[0].name;
						const baseRole = fullRole.split(" ")[0];
						$("#edit_roles").val(baseRole);
					}

					$("#edit_user_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error(err);
					alert("Terjadi kesalahan. Silakan cek konsol.");
				},
			});
		});
	});
</script>
