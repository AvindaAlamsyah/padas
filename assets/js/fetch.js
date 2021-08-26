function custom_fetch(modalLoading, url, formData, modal, table, title) {
	$(modalLoading).modal("show");

	fetch(url, {
		method: "POST",
		body: formData,
	})
		.then((response) => {
			$(modal).modal("hide");
			$(modalLoading).modal("hide");
			table.ajax.reload();

			if (response.ok) {
				return response.json();
			} else {
				throw new Error(response.statusText);
			}
		})
		.then((pesan) => {
			pesan.forEach((element, index) => {
				setTimeout(() => {
					if (element.status === true) {
						new PNotify({
							title: title,
							text: element.isi,
							type: "success",
						});
					} else {
						new PNotify({
							title: title,
							text: element.isi,
							type: "error",
						});
					}
				}, index * 1000);
			});
		})
		.catch((error) => {
			Swal.fire({
				icon: "error",
				title: "Oops...",
				text: error,
			});
		});
}

function fetch_save_form(url, formData, title) {
	fetch(url, {
		method: "POST",
		body: formData,
	})
		.then((response) => {
			if (response.ok) {
				return response.json();
			} else {
				throw new Error(response.statusText);
			}
		})
		.then((pesan) => {
			pesan.forEach((element, index) => {
				setTimeout(() => {
					if (element.status === true) {
						new PNotify({
							title: title,
							text: element.isi,
							type: "success",
						});
					} else {
						new PNotify({
							title: title,
							text: element.isi,
							type: "error",
						});
					}
				}, index * 1000);
			});
		})
		.catch((error) => {
			Swal.fire({
				icon: "error",
				title: "Oops...",
				text: error,
			});
		});
}
