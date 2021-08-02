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
                                <a href="index.html">
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
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="dd-list">
                                    <li class="dd-item">
                                        <div class="dd-handle">
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="data-pribadi">
                                                <label for="data-pribadi"> Data Pribadi</label>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nama-siswa" id="nama-siswa">
                                                        <label for="nama-siswa"> Nama Lengkap</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="gender-siswa" id="gender-siswa">
                                                        <label for="gender-siswa"> Jenis Kelamin</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nisn" id="nisn">
                                                        <label for="nisn"> NISN</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nipd" id="nipd">
                                                        <label for="nisn"> NIPD</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="kelas-golongan" id="kelas_golongan">
                                                        <label for="nisn"> Kelas Golongan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nik-siswa" id="nik-siswa">
                                                        <label for="nik-siswa"> NIK/ No. Kitas</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="tempat-lahir" id="tempat-lahir">
                                                        <label for="tempat-lahir"> Tempat Lahir</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="tanggal-lahir-siswa" id="tanggal-lahir-siswa">
                                                        <label for="tanggal-lahir-siswa"> Tanggal Lahir</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="no-kk" id="no-kk">
                                                        <label for="no-kk"> No Kartu Keluarga</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="akta" id="akta">
                                                        <label for="akta"> No. Registrasi Akta Lahir</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="agama" id="agama">
                                                        <label for="agama"> Agama</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="kewarganegaraan" id="kewarganegaraan">
                                                        <label for="kewarganegaraan"> Kewarganegaraan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="berkebutuhan-khusus-siswa" id="berkebutuhan-khusus-siswa">
                                                        <label for="berkebutuhan-khusus-siswa"> Berkebutuhan Khusus</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                            <div class="col-md-6">
                                <ol class="dd-list">
                                    <li class="dd-item">
                                        <div class="dd-handle">
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="alamat-tempat-tinggal">
                                                <label for="alamat-tempat-tinggal"> Alamat Tempat Tinggal</label>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-jalan" id="alamat-jalan">
                                                        <label for="alamat-jalan"> Alamat Jalan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-no-rumah" id="alamat-no-rumah">
                                                        <label for="alamat-no-rumah"> Nomor Rumah</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-no-asuransi" id="alamat-no-asuransi">
                                                        <label for="alamat-no-asuransi"> No. Asuransi</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-rt" id="alamat-rt">
                                                        <label for="alamat-rt"> RT</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-rw" id="alamat-rw">
                                                        <label for="alamat-rw"> RW</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-dusun" id="alamat-dusun">
                                                        <label for="alamat-dusun"> Dusun</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-desa" id="alamat-desa">
                                                        <label for="alamat-desa"> Kelurahan / Desa</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-kecamatan" id="alamat-kecamatan">
                                                        <label for="alamat-kecamatan"> Kecamatan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-pos" id="alamat-pos">
                                                        <label for="alamat-pos"> Kode Pos</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-lintang" id="alamat-lintang">
                                                        <label for="alamat-lintang"> Lintang</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-bujur" id="alamat-bujur">
                                                        <label for="alamat-bujur"> Bujur</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="alamat-jenis-tinggal" id="alamat-jenis-tinggal">
                                                        <label for="alamat-jenis-tinggal"> Jenis Tinggal</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="dd-list">
                                    <li class="dd-item">
                                        <div class="dd-handle">
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="domisili-tempat-tinggal">
                                                <label for="domisili-tempat-tinggal"> Domisili</label>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-jalan" id="domisili-jalan">
                                                        <label for="domisili-jalan"> Alamat Jalan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-no-rumah" id="domisili-no-rumah">
                                                        <label for="domisili-no-rumah"> Nomor Rumah</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-rt" id="domisili-rt">
                                                        <label for="domisili-rt"> RT</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-rw" id="domisili-rw">
                                                        <label for="domisili-rw"> RW</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-dusun" id="domisili-dusun">
                                                        <label for="domisili-dusun"> Dusun</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-desa" id="domisili-desa">
                                                        <label for="domisili-desa"> Kelurahan / Desa</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-kecamatan" id="domisili-kecamatan">
                                                        <label for="domisili-kecamatan"> Kecamatan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-pos" id="domisili-pos">
                                                        <label for="domisili-pos"> Kode Pos</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-lintang" id="domisili-lintang">
                                                        <label for="domisili-lintang"> Lintang</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-bujur" id="domisili-bujur">
                                                        <label for="domisili-bujur"> Bujur</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="domisili-jenis-tinggal" id="domisili-jenis-tinggal">
                                                        <label for="domisili-jenis-tinggal"> Jenis Tinggal</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                            <div class="col-md-6">
                                <ol class="dd-list">
                                    <li class="dd-item">
                                        <div class="dd-handle">
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="bantuan-tidak-mampu">
                                                <label for="domisili-tempat-tinggal"> Bantuan Keluarga Tidak Mampu</label>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="moda-transportasi" id="moda-transportasi">
                                                        <label for="moda-transportasi"> Moda Transportasi</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nomor-kks" id="nomor-kks">
                                                        <label for="nomor-kks"> Nomor KKS</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="anak-ke" id="anak-ke">
                                                        <label for="anak-ke"> Anak ke-</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nomor-kps-pkh" id="nomor-kps-pkh">
                                                        <label for="nomor-kps-pkh"> Nomor KPS/PKH</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="kip">
                                                        <label for="kip"> KIP</label>
                                                    </div>
                                                </div>
                                                <ol class="dd-list">
                                                    <li class="dd-item">
                                                        <div class="dd-handle">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="nomor-kip" id="nomor-kip">
                                                                <label for="nomor-kip"> Nomor KIP</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item">
                                                        <div class="dd-handle">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="nama-kip" id="nama-kip">
                                                                <label for="nama-kip"> Nama di KIP</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="pip">
                                                        <label for="pip"> PIP</label>
                                                    </div>
                                                </div>
                                                <ol class="dd-list">
                                                    <li class="dd-item">
                                                        <div class="dd-handle">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="layak-pip" id="layak-pip">
                                                                <label for="layak-pip"> Layak PIP</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item">
                                                        <div class="dd-handle">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="alasan-layak-pip" id="alasan-layak-pip">
                                                                <label for="alasan-layak-pip"> Alasan Layak PIP</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item">
                                                        <div class="dd-handle">
                                                            <div class="checkbox-custom checkbox-primary">
                                                                <input type="checkbox" id="bank">
                                                                <label for="bank"> Bank</label>
                                                            </div>
                                                        </div>
                                                        <ol class="dd-list">
                                                            <li class="dd-item">
                                                                <div class="dd-handle">
                                                                    <div class="checkbox-custom">
                                                                        <input type="checkbox" name="nama-bank" id="nama-bank">
                                                                        <label for="nama-bank"> Nama Bank</label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="dd-item">
                                                                <div class="dd-handle">
                                                                    <div class="checkbox-custom">
                                                                        <input type="checkbox" name="nomor-rekening" id="nomor-rekening">
                                                                        <label for="nomor-rekening"> Nomor Rekening</label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="dd-item">
                                                                <div class="dd-handle">
                                                                    <div class="checkbox-custom">
                                                                        <input type="checkbox" name="kantor-cabang" id="kantor-cabang">
                                                                        <label for="kantor-cabang"> Kantor Cabang Pembantu</label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="dd-item">
                                                                <div class="dd-handle">
                                                                    <div class="checkbox-custom">
                                                                        <input type="checkbox" name="nama-rekening" id="nama-rekening">
                                                                        <label for="nama-rekening"> Rekening atas Nama</label>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ol>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom checkbox-primary">
                                                        <input type="checkbox" id="bantuan-lain">
                                                        <label for="bantuan-lain"> Bantuan Lainnya</label>
                                                    </div>
                                                </div>
                                                <ol class="dd-list">
                                                    <li class="dd-item">
                                                        <div class="dd-handle">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="nama-program" id="nama-program">
                                                                <label for="nama-program"> Nama Program</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dd-item">
                                                        <div class="dd-handle">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="bukti" id="bukti">
                                                                <label for="bukti"> Bukti</label>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ol class="dd-list">
                                    <li class="dd-item">
                                        <div class="dd-handle">
                                            <div class="checkbox-custom checkbox-primary">
                                                <input type="checkbox" id="data-ayah">
                                                <label for="data-ayah"> Data Ayah Kandung</label>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nama-ayah" id="nama-ayah">
                                                        <label for="nama-ayah"> Nama Ayah</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="kondisi-ayah" id="kondisi-ayah">
                                                        <label for="kondisi-ayah"> Kondisi Ayah</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="nik-ayah" id="nik-ayah">
                                                        <label for="nik-ayah"> NIK Ayah</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="telp-ayah" id="telp-ayah">
                                                        <label for="telp-ayah"> Nomor Handphone</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="no-rumah-ayah" id="no-rumah-ayah">
                                                        <label for="no-rumah-ayah"> Nomor Rumah</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="rt-ayah" id="rt-ayah">
                                                        <label for="rt-ayah"> RT</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="rw-ayah" id="rt-ayah">
                                                        <label for="rt-ayah"> RW</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="dusun-ayah" id="dusun-ayah">
                                                        <label for="dusun-ayah"> Dusun</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="desa-ayah" id="desa-ayah">
                                                        <label for="desa-ayah"> Kelurahan/Desa</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="kecamatan-ayah" id="kecamatan-ayah">
                                                        <label for="kecamatan-ayah"> Kecamatan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="pos-ayah" id="pos-ayah">
                                                        <label for="pos-ayah"> Kode Pos</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="lintang-ayah" id="lintang-ayah">
                                                        <label for="lintang-ayah"> Lintang</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="bujur-ayah" id="bujur-ayah">
                                                        <label for="bujur-ayah"> Bujur</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="jalan-ayah" id="jalan-ayah">
                                                        <label for="jalan-ayah"> Alamat Jalan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="tempat-ayah" id="tempat-ayah">
                                                        <label for="tempat-ayah"> Tempat Lahir</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="tanggal-ayah" id="tanggal-ayah">
                                                        <label for="tanggal-ayah"> Tanggal Lahir</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="pendidikan-ayah" id="pendidikan-ayah">
                                                        <label for="pendidikan-ayah"> Pendidikan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="pekerjaan-ayah" id="pekerjaan-ayah">
                                                        <label for="pekerjaan-ayah"> Pekerjaan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="penghasilan-ayah" id="penghasilan-ayah">
                                                        <label for="penghasilan-ayah"> Penghasilan</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dd-item">
                                                <div class="dd-handle">
                                                    <div class="checkbox-custom">
                                                        <input type="checkbox" name="berkebutuhan-khusus-ayah" id="berkebutuhan-khusus-ayah">
                                                        <label for="berkebutuhan-khusus-ayah"> Berkebutuhan Khusus</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: page -->
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
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.init.js"></script>

</body>

</html>