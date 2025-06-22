<script>
	$(document).ready(function() {
		// Handling delete user
		$(document).on("click", ".delete-user-modal", function() {
			const id = $(this).data("id");
			const deleteURL = "{{ route('users.destroy', ':id') }}".replace(':id', id);

			// Set action form di modal hapus
			$("#delete_user_form").attr("action", deleteURL);
		});

		// Handling edit user modal
		$(document).on("click", ".edit-user-modal", function() {
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
					const sekolahs = res.sekolahs;

					// Update name and email
					$("#edit_name").val(user.name);
					$("#edit_email").val(user.email);

					// Update dropdown sekolah
					$("#edit_sekolah_id").empty().append(`<option value="">-- Pilih Sekolah --</option>`);
					sekolahs.forEach(sekolah => {
						const selected = sekolah.id === user.sekolah_id ? 'selected' : '';
						$("#edit_sekolah_id").append(`<option value="${sekolah.id}" ${selected}>${sekolah.nama_sekolah}</option>`);
					});

					// Set role (hanya bagian depannya saja)
					if (user.roles && user.roles.length > 0) {
						const fullRole = user.roles[0].name;
						const baseRole = fullRole.split(" ")[0]; // Ambil hanya nama role tanpa nama sekolah
						$("#edit_roles").val(baseRole); // Set selected role
					}

					// Set form action
					$("#edit_user_form").attr("action", updateURL);
				},
				error: (err) => {
					console.error("Error saat mengambil data user:", err);
					alert("Terjadi kesalahan. Silakan cek konsol.");
				},
			});
		});

	});
</script>