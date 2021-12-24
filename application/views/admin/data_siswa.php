<!DOCTYPE html>
<html lang="en" class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Database Siswa | Admin PADAS | SMK Negeri 1 Geger</title>
    <meta name="description" content="Database Siswa - PADAS SMK Negeri 1 Geger">
    <meta name="author" content="Robotindo">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/pnotify/pnotify.custom.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url('/'); ?>assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <?php $this->load->view('admin/header'); ?>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <?php $this->load->view('admin/sidebar'); ?>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Database Siswa</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="<?php echo base_url(); ?>">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Data Siswa</span></li>
                            <li><span>Database Siswa</span></li>
                        </ol>
                    </div>
                </header>

                <!-- start: page -->
                <section class="panel">
                    <header class="panel-heading">

                        <h2 class="panel-title">Siswa Aktif</h2>
                    </header>
                    <div class="panel-body">
                        <button class="btn btn-warning" data-toggle="modal" data-target="#modal_import" style="margin-bottom: 10px;">Import Data Siswa</button>
                        <table class="table table-bordered table-striped mb-none" id="datatable-siswa-aktif">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($data as $value) {
                                    echo '<tr>'; ?>
                                    <td><?= $i;
                                        $i++; ?></td>
                                    <td><?php echo $value->nama; ?></td>
                                    <td><?php echo $value->nisn; ?></td>
                                    <td><?php echo $value->kelas; ?></td>
                                    <td><?php echo $value->jurusan; ?></td>
                                    <td class="actions">
                                        <a data-toggle="tooltip" title="Detail Data Siswa" href="<?php echo base_url('admin/data_siswa/detail_siswa/') . $value->id_siswa; ?>"><i class="fa fa-info"></i></a>
                                        <a data-toggle="tooltip" title="Edit Data Siswa" href="<?php echo base_url('admin/data_siswa/edit_siswa/') . $value->id_siswa; ?>"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Hapus Data Siswa" onclick="hapus_siswa(<?php echo $value->id_siswa; ?>)"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                <?php
                                    echo '</tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </section>
                <!-- end: page -->
            </section>
        </div>
    </section>

    <!-- Modal Import -->
    <div class="modal fade" id="modal_import" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import Anggota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="form_import" name="form_import" type="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group file" id="div-import">
                            <label for="import_file" id="label_edit_file">File (.xlsx)</label>
                            <div class="controls">
                                <input type="file" id="import_file" name="import_file" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btn_import" class="btn btn-warning">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="modal_loading" data-backdrop="static" data-keyboard="false" class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="fa fa-spinner fa-spin fa-3x w-100"></span>
                    <div>
                        <strong>Tunggu sebentar yaaa....</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_loading_long" data-backdrop="static" data-keyboard="false" class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <span class="fa fa-spinner fa-spin fa-3x w-100"></span>
                    <div>
                        <strong>Harap sabar menunggu untuk proses import data. Jangan muat ulang(refresh), keluar(exit), batal(cancel) selama proses sedang berlangsung! Karena akan menyebabkan kerusakan pada Sistem Database!</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Import -->

    <!-- Vendor -->
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/pnotify/pnotify.custom.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('/'); ?>assets/js/table/database.siswa.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.init.js"></script>

    <script>
        function hapus_siswa(params) {
            let formData = new FormData();
            formData.append('id_siswa', params);

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Anda tidak akan dapat mengembalikan data siswa yang telah dihapus!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus data!',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return fetch('<?php echo base_url('admin/data_siswa/hapus_siswa'); ?>', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.json()
                        })
                        .then(pesan => {
                            if (pesan.status === true) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Yey...',
                                    text: pesan.isi,
                                    allowOutsideClick: false
                                }).then(() => {
                                    location.reload()
                                })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: pesan.isi,
                                })
                            }
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
        $('form[name="form_import"]').validate({
            rules: {
                import_file: {
                    required: true
                }
            },
            lang: "id",
            submitHandler: function(form) {
                $('#modal_loading_long').modal('show');
                let fd = new FormData(form);
                $.ajax({
                    url: "<?php echo base_url('admin/data_siswa/import_excel'); ?>",
                    type: "POST",
                    dataType: "JSON",
                    contentType: false,
                    processData: false,
                    data: fd,
                    success: function(response) {
                        $('#modal_loading_long').modal('hide');
                        $('#modal_import').modal('hide');
                        response.forEach((element, index) => {
                            setTimeout(() => {
                                if (element.status === true) {
                                    new PNotify({
                                        title: "Import Data",
                                        text: element.isi,
                                        type: "success",
                                    });
                                } else {
                                    new PNotify({
                                        title: "Import Data",
                                        text: element.isi,
                                        type: "error",
                                    });
                                }
                            }, index * 1000);
                        });
                    },
                    error: function(xhr, status, error) {
                        $('#modal_import').modal('hide');
                        $('#modal_loading_long').modal('hide');
                        var errorMessage = xhr.status + ': ' + xhr.statusText;
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: errorMessage,
                        });
                    }
                })
            }
        })
    </script>

</body>

</html>