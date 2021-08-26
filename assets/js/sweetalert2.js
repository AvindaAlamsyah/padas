function sweetalert2_delete(text, url, formData, table, title) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus data!',
        cancelButtonText: 'Batal',
        showLoaderOnConfirm: true,
        backdrop: true,
        preConfirm: () => {
            return fetch(url, {
                method: 'POST',
                body: formData
            })
                .then(response => {
                    table.ajax.reload();
                    if (!response.ok) {
                        throw new Error(response.statusText);
                    } else {
                        return response.json()
                    }
                })
                .then(pesan => {
                    pesan.forEach((element, index) => {
                        setTimeout(() => {
                            if (element.status === true) {
                                new PNotify({
                                    title: title,
                                    text: element.isi,
                                    type: 'success'
                                });
                            } else {
                                new PNotify({
                                    title: title,
                                    text: element.isi,
                                    type: 'error'
                                });
                            }
                        }, index * 1000);
                    });
                })
                .catch(error => {
                    Swal.showValidationMessage(
                        `Request failed: ${error}`
                    )
                })
        },
        allowOutsideClick: () => !Swal.isLoading()
    })
}