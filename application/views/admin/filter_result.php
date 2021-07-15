<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Tambah Data Siswa | Admin PADAS | SMK Negeri 1 Geger</title>
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
                    <div class="panel-body">
                        <table class="table table-bordered table-striped mb-none" id="datatable-filter-result">
                            <thead>
                                <tr>
                                    <td>no</td>
                                    <td>nama_siswa</td>
                                    <td>nipd</td>
                                    <td>nisn</td>
                                    <td>tempat_lahir</td>
                                    <td>tanggal_lahir</td>
                                    <td>nik_siswa</td>
                                    <td>agama</td>
                                    <td>nomor_telepon_rumah</td>
                                    <td>nomor_telepon_seluler</td>
                                    <td>email</td>
                                    <td>rombel</td>
                                    <td>nomor_registrasi_akta_lahir</td>
                                    <td>anak_ke</td>
                                    <td>nomor_kk</td>
                                    <td>berat_badan_kg</td>
                                    <td>tinggi_badan_cm</td>
                                    <td>lingkar_kepala_cm</td>
                                    <td>jumlah_saudara_kandung</td>
                                    <td>jarak_tempat_tinggal_ke_sekolah_km</td>
                                    <td>gender</td>
                                    <td>moda_transportasi</td>
                                    <td>tempat_tinggal</td>
                                    <td>nomor_skhun</td>
                                    <td>nomor_peserta_ujian</td>
                                    <td>no_seri_ijazah</td>
                                    <td>asal_sekolah</td>
                                    <td>kompetensi_keahlian</td>
                                    <td>detail_alamat</td>
                                    <td>rt</td>
                                    <td>rw</td>
                                    <td>dusun</td>
                                    <td>kode_pos</td>
                                    <td>lintang</td>
                                    <td>bujur</td>
                                    <td>desa</td>
                                    <td>kecamatan</td>
                                    <td>kabupaten</td>
                                    <td>provinsi</td>
                                    <td>nama_ayah</td>
                                    <td>tahun_lahir_ayah</td>
                                    <td>nik_ayah</td>
                                    <td>pendidikan_ayah</td>
                                    <td>pekerjaan_ayah</td>
                                    <td>penghasilan_ayah</td>
                                    <td>nama_ibu</td>
                                    <td>tahun_lahir_ibu</td>
                                    <td>nik_ibu</td>
                                    <td>pendidikan_ibu</td>
                                    <td>pekerjaan_ibu</td>
                                    <td>penghasilan_ibu</td>
                                    <td>nama_wali</td>
                                    <td>tahun_lahir_wali</td>
                                    <td>nik_wali</td>
                                    <td>pendidikan_wali</td>
                                    <td>pekerjaan_wali</td>
                                    <td>penghasilan_wali</td>
                                    <td>nomor_kks</td>
                                    <td>id_kip</td>
                                    <td>nomor_kip</td>
                                    <td>nama_tertera_kip</td>
                                    <td>id_pkh</td>
                                    <td>nomor_pkh</td>
                                    <td>id_kps</td>
                                    <td>nomor_kps</td>
                                    <td>id_pip</td>
                                    <td>nomor_rekening</td>
                                    <td>rekening_atas_nama</td>
                                    <td>alasan_layak_pip</td>
                                    <td>bank</td>
                                    <td>berkebutuhan_khusus_siswa</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($data as $key => $value) {
                                    echo '<tr>'; ?>
                                    <td><?= $i;
                                        $i++; ?></td>
                                    <?php foreach ($value as $key => $value) { ?>
                                        <td><?= $value ?></td>
                                <?php }
                                    echo '</tr>';
                                } ?>
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

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.init.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable-filter-result').dataTable();

        })
    </script>
    <script>
        document.getElementById("export").addEventListener("click", (e) => {
            e.preventDefault()
            const urlSearchParams = new URLSearchParams(window.location.search)
            const params = Object.fromEntries(urlSearchParams.entries())
            const url = new URL('<?= base_url('admin/filter/export'); ?>')
            url.search = urlSearchParams
            fetch(url, {
                method: 'HEAD'
            }).then(response => {
                if (response.ok) {
                    location.replace(url)
                } else {
                    throw new Error("Kesalahan parameter, coba cek kembali.")
                }
            }).catch(rejected => {
                alert(rejected)
            })
        })
    </script>
</body>

</html>