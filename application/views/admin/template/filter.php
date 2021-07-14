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
                        <div class="panel-body">
                            <form action="<?= base_url('admin/filter/result') ?>" method="get" name="form_filter" id="form_filter">
                                <div class="col-md-6">
                                    <h1>Data Siswa</h1>
                                    <div class="form-group">
                                        <label>Status Siswa</label>
                                        <select class="form-control" name="status_siswa" id="status_siswa">
                                            <option selected value>Semua</option>
                                            <option value="aktif">Siswa Aktif</option>
                                            <option value="keluar">Siswa Keluar</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" type="text" name="nama_siswa">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>NIPD</label>
                                    <input class="form-control" type="text" name="nipd">
                                </div> -->
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <!-- <input class="form-control" type="text" name="gender"> -->
                                        <select class="form-control" name="gender" id="gender">
                                            <option selected value>Semua</option>
                                            <?php foreach ($gender as $key => $value) { ?>
                                                <option value="<?= $value['id_gender'] ?>"><?= $value['gender'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>NISN</label>
                                    <input class="form-control" type="text" name="nisn">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input class="form-control" type="text" name="tempat_lahir">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input class="form-control" type="text" name="tanggal_lahir">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>NIK</label>
                                    <input class="form-control" type="text" name="nik">
                                </div> -->
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input class="form-control" type="text" name="agama">
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Alamat</label>
                                    <input class="form-control" type="text" name="alamat">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>RT</label>
                                    <input class="form-control" type="text" name="rt">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>RW</label>
                                    <input class="form-control" type="text" name="rw">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Dusun</label>
                                    <input class="form-control" type="text" name="dusun">
                                </div> -->
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select name="kecamatan" id="kecamatan" class="form-control">
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Desa</label>
                                        <select name="desa" id="desa" class="form-control" disabled>
                                            <option></option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input class="form-control" type="text" name="kode_pos">
                                </div> -->
                                    <div class="form-group">
                                        <label>Tempat Tinggal</label>
                                        <!-- <input class="form-control" type="text" name="tempat_tinggal"> -->
                                        <select class="form-control" name="tempat_tinggal" id="tempat_tinggal">
                                            <option selected value>Semua</option>
                                            <?php foreach ($tempat_tinggal as $key => $value) { ?>
                                                <option value="<?= $value['id_tempat_tinggal'] ?>"><?= $value['tempat_tinggal'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Moda Transportasi</label>
                                        <!-- <input class="form-control" type="text" name="moda_transportasi"> -->
                                        <select class="form-control" name="moda_transportasi" id="moda_trasnportasi">
                                            <option selected value>Semua</option>
                                            <?php foreach ($moda_transportasi as $key => $value) { ?>
                                                <option value="<?= $value['id_moda_transportasi'] ?>"><?= $value['moda_transportasi'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Nomor Telepon Rumah</label>
                                    <input class="form-control" type="text" name="nomor_telepon_rumah">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Nomor Telepon Seluler</label>
                                    <input class="form-control" type="text" name="nomor_telepon_seluler">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="text" name="email">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>SKHUN</label>
                                    <input class="form-control" type="text" name="skhun">
                                </div> -->
                                    <div class="form-group">
                                        <label>Memiliki Prestasi</label>
                                        <select class="form-control" name="penerima_prestasi" id="penerima_prestasi">
                                            <option selected value>Semua</option>
                                            <option value="true">Ya</option>
                                            <option value="false">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Memiliki Beasiswa</label>
                                        <select class="form-control" name="penerima_beasiswa" id="penerima_beasiswa">
                                            <option selected value>Semua</option>
                                            <option value="true">Ya</option>
                                            <option value="false">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penerima PKH</label>
                                        <select class="form-control" name="penerima_pkh" id="penerima_pkh">
                                            <option selected value>Semua</option>
                                            <option value="true">Ya</option>
                                            <option value="false">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penerima KPS</label>
                                        <select class="form-control" name="penerima_kps" id="penerima_kps">
                                            <option selected value>Semua</option>
                                            <option value="true">Ya</option>
                                            <option value="false">Tidak</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Nomor KPS</label>
                                    <input class="form-control" type="text" name="nomor_kps">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Rombel</label>
                                    <input class="form-control" type="text" name="rombel">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Nomor Peserta Ujian Nasional</label>
                                    <input class="form-control" type="text" name="nomor_peserta_ujian_nasional">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Nomor Seri Ijazah</label>
                                    <input class="form-control" type="text" name="nomor_seri_ijazah">
                                </div> -->
                                    <div class="form-group">
                                        <label>Penerima KIP</label>
                                        <select class="form-control" name="penerima_kip" id="penerima_kip">
                                            <option selected value>Semua</option>
                                            <option value="true">Ya</option>
                                            <option value="false">Tidak</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Nomor KIP</label>
                                    <input class="form-control" type="text" name="nomor_kip">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Nama Tertera di KIP</label>
                                    <input class="form-control" type="text" name="nama_tertera_di_kip">
                                </div> -->
                                    <div class="form-group">
                                        <label>Penerima KKS</label>
                                        <select class="form-control" name="penerima_kks" id="penerima_kks">
                                            <option selected value>Semua</option>
                                            <option value="true">Ya</option>
                                            <option value="false">Tidak</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Nomor KKS</label>
                                    <input class="form-control" type="text" name="nomor_kks">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Nomor Registrasi Akta Lahir</label>
                                    <input class="form-control" type="text" name="nomor_registrasi_akta_lahir">
                                </div> -->
                                    <div class="form-group">
                                        <label>Penerima PIP</label>
                                        <select class="form-control" name="penerima_pip" id="penerima_pip">
                                            <option selected value>Semua</option>
                                            <option value="true">Ya</option>
                                            <option value="false">Tidak</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Layak PIP</label>
                                    <input class="form-control" type="text" name="layak_pip">
                                </div>
                                <div class="form-group">
                                    <label>Alasan Layak PIP</label>
                                    <input class="form-control" type="text" name="alasan_layak_pip">
                                </div> -->
                                    <div class="form-group">
                                        <label>Nama BANK</label>
                                        <!-- <input class="form-control" type="text" name="pip_bank"> -->
                                        <select class="form-control" name="pip_bank" id="pip_bank">
                                            <option selected value>Semua</option>
                                            <?php foreach ($bank as $key => $value) { ?>
                                                <option value="<?= $value['id_bank'] ?>"><?= $value['bank'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Nomor Rekening</label>
                                    <input class="form-control" type="text" name="nomor_rekening_bank">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Rekening Atas Nama</label>
                                    <input class="form-control" type="text" name="rekening_atas_nama">
                                </div> -->
                                    <div class="form-group">
                                        <label>Berkebutuhan Khusus</label>
                                        <!-- <input class="form-control" type="text" name="berkebutuhan_khusus"> -->
                                        <select class="form-control" name="berkebutuhan_khusus" id="berkebutuhan_khusus">
                                            <option selected value>Semua</option>
                                            <?php foreach ($berkebutuhan_khusus as $key => $value) { ?>
                                                <option value="<?= $value['id_berkebutuhan_khusus'] ?>"><?= $value['berkebutuhan_khusus'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Sekolah Asal</label>
                                    <input class="form-control" type="text" name="sekolah_asal">
                                </div> -->
                                    <div class="form-group">
                                        <label>Anak ke</label>
                                        <input class="form-control" type="text" name="anak_ke">
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>Lintang</label>
                                    <input class="form-control" type="text" name="lintang">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Bujur</label>
                                    <input class="form-control" type="text" name="bujur">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Nomor KK</label>
                                    <input class="form-control" type="text" name="no_kk">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Berat Badan</label>
                                    <input class="form-control" type="text" name="berat_badan">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Tinggi Badan</label>
                                    <input class="form-control" type="text" name="tinggi_badan">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Lingkar Kepala</label>
                                    <input class="form-control" type="text" name="lingkar_kepala">
                                </div> -->
                                    <div class="form-group">
                                        <label>Jumlah Saudara Kandung</label>
                                        <input class="form-control" type="text" name="jumlah_saudara_kandung">
                                    </div>
                                    <div class="form-group">
                                        <label>Jarak Rumah ke Sekolah (KM)</label>
                                        <select class="form-control" name="operator_jarak_rumah_ke_sekolah" id="operator_jarak_rumah_ke_sekolah">
                                            <option selected value>-</option>
                                            <option value="<">Kurang dari</option>
                                            <option value="<=">Kurang dari sama dengan</option>
                                            <option value="=">Sama dengan</option>
                                            <option value=">=">Lebih dari sama dengan</option>
                                            <option value=">">Lebih dari</option>
                                        </select>
                                        <input disabled class="form-control" type="text" name="jarak_rumah_ke_sekolah" id="jarak_rumah_ke_sekolah">

                                    </div>
                                    <div class="form-group">
                                        <label>Waktu Tempuh ke Sekolah (Jam)</label>
                                        <select class="form-control" name="operator_waktu_tempuh_ke_sekolah" id="operator_waktu_tempuh_ke_sekolah">
                                            <option selected value>-</option>
                                            <option value="<">Kurang dari</option>
                                            <option value="<=">Kurang dari sama dengan</option>
                                            <option value="=">Sama dengan</option>
                                            <option value=">=">Lebih dari sama dengan</option>
                                            <option value=">">Lebih dari</option>
                                        </select>
                                        <input disabled class="form-control" type="text" name="waktu_tempuh_ke_sekolah" id="waktu_tempuh_ke_sekolah">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1>Data Orang tua</h1>
                                    <h3>Data Ayah</h3>
                                    <!-- <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input class="form-control" type="text" name="nama_ayah">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Tahun Lahir Ayah</label>
                                    <input class="form-control" type="text" name="tahun_lahir_ayah">
                                </div> -->
                                    <div class="form-group">
                                        <label>Pendidikan Ayah</label>
                                        <!-- <input class="form-control" type="text" name="pendidikan_ayah"> -->
                                        <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                                            <option selected value>Semua</option>
                                            <?php foreach ($pendidikan as $key => $value) { ?>
                                                <option value="<?= $value['id_pendidikan'] ?>"><?= $value['pendidikan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Ayah</label>
                                        <!-- <input class="form-control" type="text" name="pekerjaan_ayah"> -->
                                        <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
                                            <option selected value>Semua</option>
                                            <?php foreach ($pekerjaan as $key => $value) { ?>
                                                <option value="<?= $value['id_pekerjaan'] ?>"><?= $value['pekerjaan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Ayah</label>
                                        <!-- <input class="form-control" type="text" name="penghasilan_ayah"> -->
                                        <select class="form-control" name="penghasilan_ayah" id="penghasilan_ayah">
                                            <option selected value>Semua</option>
                                            <?php foreach ($penghasilan as $key => $value) { ?>
                                                <option value="<?= $value['id_penghasilan'] ?>"><?= $value['penghasilan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>NIK Ayah</label>
                                    <input class="form-control" type="text" name="nik_ayah">
                                </div> -->
                                    <h3>Data Ibu</h3>
                                    <!-- <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input class="form-control" type="text" name="nama_ibu">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Tahun Lahir Ibu</label>
                                    <input class="form-control" type="text" name="tahun_lahir_ibu">
                                </div> -->
                                    <div class="form-group">
                                        <label>Pendidikan Ibu</label>
                                        <!-- <input class="form-control" type="text" name="pendidikan_ibu"> -->
                                        <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                                            <option selected value>Semua</option>
                                            <?php foreach ($pendidikan as $key => $value) { ?>
                                                <option value="<?= $value['id_pendidikan'] ?>"><?= $value['pendidikan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Ibu</label>
                                        <!-- <input class="form-control" type="text" name="pekerjaan_ibu"> -->
                                        <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                                            <option selected value>Semua</option>
                                            <?php foreach ($pekerjaan as $key => $value) { ?>
                                                <option value="<?= $value['id_pekerjaan'] ?>"><?= $value['pekerjaan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Ibu</label>
                                        <!-- <input class="form-control" type="text" name="penghasilan_ibu"> -->
                                        <select class="form-control" name="penghasilan_ibu" id="penghasilan_ibu">
                                            <option selected value>Semua</option>
                                            <?php foreach ($penghasilan as $key => $value) { ?>
                                                <option value="<?= $value['id_penghasilan'] ?>"><?= $value['penghasilan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>NIK Ibu</label>
                                    <input class="form-control" type="text" name="nik_ibu">
                                </div> -->
                                    <h3>Data Wali</h3>
                                    <!-- <div class="form-group">
                                    <label>Nama Wali</label>
                                    <input class="form-control" type="text" name="nama_wali">
                                </div> -->
                                    <!-- <div class="form-group">
                                    <label>Tahun Lahir Wali</label>
                                    <input class="form-control" type="text" name="tahun_lahir_wali">
                                </div> -->
                                    <div class="form-group">
                                        <label>Pendidikan Wali</label>
                                        <!-- <input class="form-control" type="text" name="pendidikan_wali"> -->
                                        <select class="form-control" name="pendidikan_wali" id="pendidikan_wali">
                                            <option selected value>Semua</option>
                                            <?php foreach ($pendidikan as $key => $value) { ?>
                                                <option value="<?= $value['id_pendidikan'] ?>"><?= $value['pendidikan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan Wali</label>
                                        <!-- <input class="form-control" type="text" name="pekerjaan_wali"> -->
                                        <select class="form-control" name="pekerjaan_wali" id="pekerjaan_wali">
                                            <option selected value>Semua</option>
                                            <?php foreach ($pekerjaan as $key => $value) { ?>
                                                <option value="<?= $value['id_pekerjaan'] ?>"><?= $value['pekerjaan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penghasilan Wali</label>
                                        <!-- <input class="form-control" type="text" name="penghasilan_wali"> -->
                                        <select class="form-control" name="penghasilan_wali" id="penghasilan_wali">
                                            <option selected value>Semua</option>
                                            <?php foreach ($penghasilan as $key => $value) { ?>
                                                <option value="<?= $value['id_penghasilan'] ?>"><?= $value['penghasilan'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                    <label>NIK Wali</label>
                                    <input class="form-control" type="text" name="nik_wali">
                                </div> -->
                                </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                        </form>
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

    <script type="text/javascript">
        const operator_jarak_rumah_ke_sekolah = document.getElementById('operator_jarak_rumah_ke_sekolah')
        const jarak_rumah_ke_sekolah = document.getElementById("jarak_rumah_ke_sekolah")
        operator_jarak_rumah_ke_sekolah.addEventListener("change", (e) => {
            e.preventDefault();
            if (operator_jarak_rumah_ke_sekolah.value === '') {
                jarak_rumah_ke_sekolah.disabled = true
                jarak_rumah_ke_sekolah.value = ''
            } else {
                jarak_rumah_ke_sekolah.disabled = false
            }
        })
        const operator_waktu_tempuh_ke_sekolah = document.getElementById('operator_waktu_tempuh_ke_sekolah')
        const waktu_tempuh_ke_sekolah = document.getElementById("waktu_tempuh_ke_sekolah")
        operator_waktu_tempuh_ke_sekolah.addEventListener("change", (e) => {
            e.preventDefault();
            if (operator_waktu_tempuh_ke_sekolah.value === '') {
                waktu_tempuh_ke_sekolah.disabled = true
                waktu_tempuh_ke_sekolah.value = ''
            } else {
                waktu_tempuh_ke_sekolah.disabled = false
            }
        })

        //
        var groupBy = function(xs, key) {
            return xs.reduce(function(rv, x) {
                (rv[x[key]] = rv[x[key]] || []).push(x);
                return rv;
            }, {});
        };

         
        $("select").change(function() {
            if (this.value != null || this.value != "") {
                this.focus();
                $(this).closest('.form-group').removeClass('has-error');
            } else {
                console.log(this.value);
            }
        });


        $('#kecamatan').select2({
            ajax: {
                url: '<?php echo base_url('referensi_data/kecamatan') ?>',
                dataType: 'json',
                delay: 500,
                data: function(params) {
                    return {
                        kec: params.term
                    }
                },
                processResults: function(data) {
                    return {
                        results: $.map(groupBy(data, 'kab'), function(item, key) {
                            var children = [];
                            for (var k in item) {
                                var childItem = item[k];
                                childItem.text = item[k].kec;
                                children.push(childItem);
                            }
                            return {
                                text: key,
                                children: children,
                            }
                        })
                    };
                },
                cache: true
            },
            minimumInputLength: 2,
            allowClear: true,
            placeholder: "Pilih kecamatan"
        });

        $('#kecamatan').on("change", function() {
            var id_kec = $(this).val();
            if (id_kec =="") {
                $('#desa').val('');
                $('#desa').prop('disabled', true);
            } else {
                $('#desa').prop('disabled', false);
            }
            $('#desa').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/kel_desa') ?>',
                    dataType: 'json',
                    delay: 500,
                    data: function(params) {
                        return {
                            kel: params.term,
                            id_kec: id_kec
                        }
                    },
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumInputLength: 1,
                allowClear: true,
                placeholder: "Pilih kelurahan/desa"
            });
        })
    </script>
</body>

</html>