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
    <!-- <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/select2/select2.css" /> -->
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/select2/css/select2.css" />

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
                        </ol>
                    </div>
                </header>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="panel-footer">
                            <button type="button" class="btn btn-success" id="export">Export</button>
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>nama_siswa</th>
                                            <th>nipd</th>
                                            <th>nisn</th>
                                            <th>tempat_lahir</th>
                                            <th>tanggal_lahir</th>
                                            <th>nik_siswa</th>
                                            <th>agama</th>
                                            <th>nomor_telepon_rumah</th>
                                            <th>nomor_telepon_seluler</th>
                                            <th>email</th>
                                            <th>rombel</th>
                                            <th>nomor_registrasi_akta_lahir</th>
                                            <th>anak_ke</th>
                                            <th>nomor_kk</th>
                                            <th>berat_badan_kg</th>
                                            <th>tinggi_badan_cm</th>
                                            <th>lingkar_kepala_cm</th>
                                            <th>jumlah_saudara_kandung</th>
                                            <th>jarak_tempat_tinggal_ke_sekolah_km</th>
                                            <th>gender</th>
                                            <th>moda_transportasi</th>
                                            <th>tempat_tinggal</th>
                                            <th>nomor_skhun</th>
                                            <th>nomor_peserta_ujian</th>
                                            <th>no_seri_ijazah</th>
                                            <th>asal_sekolah</th>
                                            <th>kompetensi_keahlian</th>
                                            <th>detail_alamat</th>
                                            <th>rt</th>
                                            <th>rw</th>
                                            <th>dusun</th>
                                            <th>kode_pos</th>
                                            <th>lintang</th>
                                            <th>bujur</th>
                                            <th>desa</th>
                                            <th>kecamatan</th>
                                            <th>kabupaten</th>
                                            <th>provinsi</th>
                                            <th>nama_ayah</th>
                                            <th>tahun_lahir_ayah</th>
                                            <th>nik_ayah</th>
                                            <th>pendidikan_ayah</th>
                                            <th>pekerjaan_ayah</th>
                                            <th>penghasilan_ayah</th>
                                            <th>nama_ibu</th>
                                            <th>tahun_lahir_ibu</th>
                                            <th>nik_ibu</th>
                                            <th>pendidikan_ibu</th>
                                            <th>pekerjaan_ibu</th>
                                            <th>penghasilan_ibu</th>
                                            <th>nama_wali</th>
                                            <th>nik_wali</th>
                                            <th>pendidikan_wali</th>
                                            <th>pekerjaan_wali</th>
                                            <th>penghasilan_wali</th>
                                            <th>nomor_kks</th>
                                            <th>id_kip</th>
                                            <th>nomor_kip</th>
                                            <th>nama_tertera_kip</th>
                                            <th>id_pkh</th>
                                            <th>nomor_pkh</th>
                                            <th>id_kps</th>
                                            <th>nomor_kps</th>
                                            <th>id_pip</th>
                                            <th>nomor_rekening</th>
                                            <th>rekening_atas_nama</th>
                                            <th>alasan_layak_pip</th>
                                            <th>bank</th>
                                            <th>berkebutuhan_khusus_siswa</th>
                                        <tr>
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
                        </div>
                    </div>
                </div>
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
    <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/pnotify/pnotify.custom.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <!-- <script src="<?php echo base_url('/'); ?>assets/vendor/select2/select2.js"></script> -->
    <script src="<?php echo base_url('/'); ?>assets/vendor/select2/js/select2.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.init.js"></script>
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