<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Filter Data Siswa | Admin PADAS | SMK Negeri 1 Geger</title>
    <meta name="description" content="Tambah Data Siswa - PADAS SMK Negeri 1 Geger">
    <meta name="author" content="Robotindo">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />


    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url('/'); ?>assets/vendor/modernizr/modernizr.js"></script>
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>

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
                    <h2>Filter Data Siswa</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Data Siswa</span></li>
                            <li><span>Filter</span></li>
                            <li><span>Hasil</span></li>
                        </ol>
                    </div>
                </header>

                <!-- start: page -->
                <section class="panel">
                    <header class="panel-heading">
                        <div class="panel-actions">
                            <button type="button" class="btn btn-success" id="export">Export</button>
                        </div>
                        <h2 class="panel-title">Hasil Filter</h2>
                    </header>
                    <div class="panel-body ">
                        <table width="100%" class="table table-bordered table-striped mb-none" id="datatable-filter-result">
                            <thead>
                                <tr>
                                    <td>Nama</td>
                                    <td>NISN</td>
                                    <td>NIS</td>
                                    <td>NIK</td>
                                    <td>Tempat, Tanggal Lahir</td>
                                    <td>HP</td>
                                    <td>WA</td>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </section>
            </section>
        </div>
    </section>

    <!-- Vendor -->
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/pnotify/pnotify.custom.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/select2/js/select2.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.init.js"></script>
    <script>
        $(document).ready(function() {
            const urlSearchParams = new URLSearchParams(window.location.search)
            const params = Object.fromEntries(urlSearchParams.entries())
            const url = new URL('<?= base_url('admin/filter/filter_result'); ?>')
            url.search = urlSearchParams

            const t = $('#datatable-filter-result').DataTable({
                'ajax': {
                    'url': url,
                    'method': "GET",
                },
                'columns': [{
                        'data': "nama"
                    },
                    {
                        'data': "nisn"
                    },
                    {
                        'data': (row) => {
                            return row.registrasi.nis
                        }
                    },
                    {
                        'data': "nik"
                    },
                    {
                        'data': (row) => {
                            return row.tempat_lahir + ", " + row.tanggal_lahir
                        }
                    },
                    {
                        'data': (row) => {
                            if (row.kontak_siswa == null) return '';
                            if (row.kontak_siswa.nomor_hp == null) return '';
                            let r = ''
                            for (i = 0; i < row.kontak_siswa.nomor_hp.length; i++) {
                                r = r + row.kontak_siswa.nomor_hp[i].nomor_telepon_seluler + " (" + row.kontak_siswa.nomor_hp[i].provider + ")"
                                if (row.kontak_siswa.nomor_hp.length - i !== 1) {
                                    r = r + ", "
                                }
                            }
                            return r;
                        }
                    },
                    {
                        'data': (row) => {
                            return row.kontak_siswa.nomor_whatsapp + " (" + row.kontak_siswa.provider_whatsapp + ")"
                        }
                    }
                ],
                responsive: true
            });
        })
    </script>
    <script>
        document.getElementById("export").addEventListener("click", (e) => {
            e.preventDefault()
            let swalAlert = Swal
            swalAlert.fire({
                title: 'Tunggu Sebentar',
                text: "Sedang memeriksa data ...",
                allowEscapeKey: false,
                allowOutsideClick: false,
                timer: 2000,
                onOpen: () => {
                    swal.showLoading();
                }
            })
            const urlSearchParams = new URLSearchParams(window.location.search)
            const params = Object.fromEntries(urlSearchParams.entries())
            const url = new URL('<?= base_url('admin/filter/export'); ?>')
            url.search = urlSearchParams
            window.open(url, 'export')
        })

        const showLoading = function() {
            swal({
                title: 'Now loading',
                allowEscapeKey: false,
                allowOutsideClick: false,
                timer: 2000,
                onOpen: () => {
                    swal.showLoading();
                }
            }).then(
                () => {},
                (dismiss) => {
                    if (dismiss === 'timer') {
                        console.log('closed by timer!!!!');
                        swal({
                            title: 'Finished!',
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        })
                    }
                }
            )
        };
    </script>
</body>

</html>