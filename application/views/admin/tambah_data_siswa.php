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
                    <h2>Tambah Data Siswa</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="#">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Data Siswa</span></li>
                            <li><span>Tambah Data</span></li>
                        </ol>
                    </div>
                </header>

                <!-- start: page -->
                <div class="row">
                    <div class="col-xs-12">
                        <form class="form-horizontal" action="<?php echo base_url('admin/data_siswa/simpan_data_siswa') ?>" method="POST" id="form-data-siswa" novalidate="novalidate">
                            <section class="panel form-wizard" id="wizard-siswa">
                                <div class="panel-body">
                                    <div class="wizard-progress wizard-progress-lg">
                                        <div class="steps-progress">
                                            <div class="progress-indicator"></div>
                                        </div>
                                        <ul class="wizard-steps">
                                            <li class="active">
                                                <a href="#w-pribadi" data-toggle="tab"><span>1</span>Pribadi</a>
                                            </li>
                                            <li>
                                                <a href="#w-rincian" data-toggle="tab"><span>2</span>Rincian Peserta</a>
                                            </li>
                                            <li>
                                                <a href="#w-ayah-ibu-wali" data-toggle="tab"><span>3</span>Orang Tua / Wali</a>
                                            </li>
                                            <li>
                                                <a href="#w-registrasi" data-toggle="tab"><span>4</span>Registrasi</a>
                                            </li>
                                            <!-- <li>
                                                <a href="#w-akun" data-toggle="tab"><span>5</span>Akun</a>
                                            </li> -->

                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div id="w-pribadi" class="tab-pane active">
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Pribadi Peserta</strong>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-siswa">Nama Lengkap <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-siswa" id="nama-siswa" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku (<mark>Akta</mark> atau <mark>Ijazah</mark> sebelumnya).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="jenis-kelamin">Jenis Kelamin <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="jenis-kelamin" id="jenis-kelamin" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nisn">NISN <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nisn" id="nisn" required minlength="10" maxlength="10" digits="true" placeholder="Nomor Induk Siswa Nasional">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nik">NIK <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nik" id="nik" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Induk Kependudukan">
                                                    <small id="nik" class="form-text text-muted">Nomor Induk Kependudukan tercantum pada <mark>Kartu Keluarga</mark> bagi WNI.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-kk">Nomor KK <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-kk" id="no-kk" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Kartu Keluarga">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Tempat Lahir <span class="required">*</span></label>
                                                <div class="col-md-9">
                                                    <input name="tempat-lahir" class="form-control populate" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tanggal-lahir">Tanggal Lahir <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" name="tanggal-lahir" id="tanggal-lahir" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-akta">No. Registrasi Akta Lahir <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-akta" id="no-akta" required>
                                                    <small id="no-akta" class="form-text text-muted">Nomor Registrasi yang dimaksud umumnya tercantum pada bagian setelah kalimat <mark>"Bedasarkan Akta Kelahiran Nomor"</mark> pada Akta Kelahiran model baru atau terletak dibawah <mark>"Kutipan Akta Kelahiran"</mark> pada Akta Kelahiran model lama.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="agama">Agama <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="agama" id="agama" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="kewarganegaraan">Kewarganegaraan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kewarganegaraan" id="kewarganegaraan1" value="1" type="radio" required />
                                                        <label for="kewarganegaraan1">Asing (WNA)</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kewarganegaraan" id="kewarganegaraan2" value="0" type="radio" />
                                                        <label for="kewarganegaraan2">Indonesia (WNI)</label>
                                                    </div>
                                                    <small id="kebutuhan-khusus" class="form-text text-muted">Kewarganegaraan peserta didik. Tulis kewarganegaraan jika bukan WNI.</small>
                                                    <label class="error" for="kewarganegaraan"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Asal WNA</label>
                                                <div class="col-sm-9">
                                                    <input name="wna" id="wna" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus </label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus[]" class="form-control">
                                                        <option></option>
                                                    </select>
                                                    <small id="kebutuhan-khusus" class="form-text text-muted">Dapat dipilih <mark>lebih</mark> dari satu.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="kode-pos">Kode Pos <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="kode-pos" id="kode-pos" minlength="5" maxlength="5" digits="true" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kecamatan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="kecamatan" id="kecamatan" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kelurahan/Desa <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="kel-desa" id="kel-desa" class="form-control" required disabled>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="dusun">Dusun <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="dusun" id="dusun" required disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="rt">RT <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="rt" id="rt" required maxlength="3" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="rw">RW <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="rw" id="rw" required maxlength="3" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="alamat">Alamat Jalan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
                                                    <small id="alamat" class="form-text text-muted">Jalur tempat tinggal peserta didik, terdiri atas gang, kompleks, blok, nomor rumah, dan sebagainya <mark>selain informasi yang diminta oleh kolom-kolom yang lain pada bagian ini</mark>. Sebagai contoh, peserta didik tinggal di sebuah kompleks perumahan Griya Adam yang berada pada Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT 005 dan RW 011, Dusun Cempaka, Desa Salatiga. Maka dapat diisi dengan <mark>Jl. Kemanggisan, Komp. Griya Adam, No. 4-C</mark>.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="lintang">Lintang <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="lintang" id="lintang" number="true" required>
                                                    <small id="lintang" class="form-text text-muted">Titik koordinat tempat tinggal siswa</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="bujur">Bujur <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="bujur" id="bujur" number="true" required>
                                                    <small id="lintang" class="form-text text-muted">Titik koordinat tempat tinggal siswa</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tempat Tinggal <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="tempat-tinggal" id="tempat-tinggal" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Moda Transportasi <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="transportasi" id="transportasi" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                    <small id="transportasi" class="form-text text-muted">Jenis <mark>transportasi utama</mark> atau yang <mark>paling sering</mark> digunakan peserta didik untuk berangkat ke sekolah.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-kks">Nomor KKS</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-kks" id="no-kks" minlength="6" maxlength="6" placeholder="Kartu Keluarga Sejahtera">
                                                    <small id="no-kks" class="form-text text-muted">Nomor Kartu Keluarga Sejahtera <mark>(jika memiliki)</mark>. Nomor yang dimaksud adalah 6 digit kode yang tertera pada sisi belakang kiri atas kartu (di bawah lambang Garuda Pancasila).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="anak-ke">Anak ke- <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="anak-ke" id="anak-ke" minlength="1" maxlength="2" digits="true" required>
                                                    <small id="anak-ke" class="form-text text-muted">Anak ke-berapa berdasarkan Kartu Keluarga.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="kps">Penerima KPS <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kps" id="kps1" value="1" type="radio" required />
                                                        <label for="kps1">Ya</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kps" id="kps2" value="0" type="radio" />
                                                        <label for="kps2">Tidak</label>
                                                    </div>
                                                    <small id="kps" class="form-text text-muted">Status peserta didik sebagai penerima manfaat KPS (Kartu Perlindungan Sosial).</small>
                                                    <label class="error" for="kps"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-kps">No. KPS</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-kps" id="no-kps" minlength="14" maxlength="15" placeholder="Isikan nomor apabila menerima" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="pkh">Penerima PKH <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="pkh" id="pkh1" value="1" type="radio" required />
                                                        <label for="pkh1">Ya</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="pkh" id="pkh2" value="0" type="radio" />
                                                        <label for="pkh2">Tidak</label>
                                                    </div>
                                                    <small id="pkh" class="form-text text-muted">Status peserta didik sebagai penerima manfaat PKH (Program Keluarga Harapan).</small>
                                                    <label class="error" for="pkh"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-pkh">No. PKH</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-pkh" id="no-pkh" placeholder="Isikan nomor apabila menerima" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="kip">Apakah Punya KIP? <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kip" id="kip1" value="1" type="radio" required />
                                                        <label for="kip1">Ya</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kip" id="kip2" value="0" type="radio" />
                                                        <label for="kip2">Tidak</label>
                                                    </div>
                                                    <small id="kip" class="form-text text-muted">Pilih Ya apabila peserta didik memiliki <mark>Kartu Indonesia Pintar</mark> (KIP). Pilih Tidak jika tidak memiliki.</small>
                                                    <label class="error" for="kip"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-kip">No. KIP</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-kip" id="no-kip" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-kip">Nama Tertera di KIP</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-kip" id="nama-kip" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="pip">Layak PIP <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="pip" id="pip1" value="1" type="radio" required />
                                                        <label for="pip1">Ya</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="pip" id="pip2" value="0" type="radio" />
                                                        <label for="pip2">Tidak</label>
                                                    </div>
                                                    <small id="pip" class="form-text text-muted">Pilih Ya apabila peserta didik layak diajukan sebagai penerima manfaat <mark>Program Indonesia Pintar (seperti BSM dan sejenisnya)</mark>. Pilih Tidak jika tidak memenuhi kriteria. Opsi ini khusus bagi peserta didik yang <mark>tidak memiliki KIP</mark>.</small>
                                                    <label class="error" for="pip"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Alasan Layak PIP</label>
                                                <div class="col-sm-9">
                                                    <select name="alasan-pip" id="alasan-pip" class="form-control" disabled>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Bank</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Nama Bank</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="nama-bank" id="nama-bank">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-rekening">No. Rekening</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-rekening" id="no-rekening" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="kantor-cabang">Kantor Cabang Pembantu</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="kantor-cabang" id="kantor-cabang">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="rekening-nama">Rekening Atas Nama</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="rekening-nama" id="rekening-nama">
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Kontak</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="telp-rumah">No. Telp. Rumah</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="telp-rumah" id="telp-rumah" minlength="10" maxlength="13" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-hp">Nomor Handphone <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-hp" id="no-hp" minlength="11" maxlength="13" digits="true" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="email">Email <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control" name="email" id="email" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Pastikan untuk memasukkan email yang <mark>aktif</mark>.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="w-rincian" class="tab-pane">
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Periodik Peserta</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tinggi-badan">Tinggi Badan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tinggi-badan" id="tinggi-badan" required maxlength="3" digits="true">
                                                    <small id="tinggi-badan" class="form-text text-muted">Tinggi badan peserta dalam satuan <mark>sentimeter</mark>.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="berat-badan">Berat Badan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="berat-badan" id="berat-badan" required maxlength="3" digits="true">
                                                    <small id="berat-badan" class="form-text text-muted">Berat badan peserta dalam satuan <mark>kilogram</mark>.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="lingkar-kepala">Lingkar Kepala <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="lingkar-kepala" id="lingkar-kepala" required maxlength="2" digits="true">
                                                    <small id="lingkar-kepala" class="form-text text-muted">Lingkar kepala peserta dalam satuan <mark>sentimeter</mark>.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="jarak-sekolah">Jarak ke Sekolah <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="jarak-sekolah" id="jarak-sekolah1" value="0" type="radio" required />
                                                        <label for="jarak-sekolah1">Kurang dari 1 km</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="jarak-sekolah" id="jarak-sekolah2" value="1" type="radio" />
                                                        <label for="jarak-sekolah2">Lebih dari 1 km</label>
                                                    </div>
                                                    <label class="error" for="jarak-sekolah"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="sebutkan-jarak">Sebutkan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="sebutkan-jarak" id="sebutkan-jarak" maxlength="3" digits="true" disabled>
                                                    <small id="sebutkan-jarak" class="form-text text-muted">Apabila jarak rumah peserta didik ke sekolah <mark>lebih dari 1 km</mark>, isikan dengan angka jarak yang sebenarnya pada kolom ini dalam satuan <mark>kilometer</mark>.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="waktu-tempuh">Waktu Tempuh ke Sekolah <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="waktu-tempuh" id="waktu-tempuh" required maxlength="3" digits="true">
                                                    <small id="waktu-tempuh" class="form-text text-muted">Waktu Tempuh ke Sekolah dalam satuan <mark>menit</mark>.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="jumlah-saudara">Jumlah Saudara Kandung <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="jumlah-saudara" id="wjumlah-saudara" required maxlength="2" digits="true">
                                                    <small id="jumlah-saudara" class="form-text text-muted">Jumlah saudara kandung yang dimiliki peserta didik. Jumlah saudara kandung <mark>dihitung tanpa menyertakan peserta didik</mark>, dengan rumus jumlah kakak ditambah jumlah adik. <mark>Isikan 0</mark> apabila anak tunggal.</small>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Prestasi</strong>
                                            </div>
                                            <button type="button" id="new-prestasi" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-plus-square"></i> Tambah Prestasi Baru</button>
                                            <div class="panel-new-prestasi">
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Beasiswa</strong>
                                            </div>
                                            <button type="button" id="new-beasiswa" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-plus-square"></i> Tambah Beasiswa Baru</button>
                                            <div class="panel-new-beasiswa">
                                            </div>
                                        </div>
                                        <div id="w-registrasi" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kompetensi Keahlian <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="komp-keahlian" id="komp-keahlian" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="jenis-daftar">Jenis Pendaftaran <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="jenis-daftar" id="jenis-daftar" required>
                                                        <option></option>
                                                    </select>
                                                    <small id="jumlah-saudara" class="form-text text-muted">Status peserta didik saat <mark>pertama kali diterima</mark> di sekolah ini.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nis">NIS <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nis" id="nis" required placeholder="Nomor Induk Siswa">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nipd">NIPD <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nipd" id="nipd" required placeholder="Nomor Induk Peserta Didik">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="rombel">ROMBEL <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="rombel" id="rombel" required placeholder="Rombongan Belajar">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tanggal-masuk">Tanggal Masuk Sekolah <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" name="tanggal-masuk" id="tanggal-masuk" required>
                                                    <small id="jumlah-saudara" class="form-text text-muted">Tanggal pertama kali peserta didik diterima di sekolah ini. Jika <mark>siswa baru</mark>, maka isikan tanggal awal tahun pelajaran saat peserta didik masuk. Jika <mark>siswa mutasi/pindahan</mark>, maka isikan tanggal sesuai tanggal diterimanya peserta didik di sekolah ini atau tanggal yang tercantum pada lembar mutasi masuk yang umumnya terdapat di bagian akhir buku rapor</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="asal-sekolah">Asal Sekolah <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="asal-sekolah" id="asal-sekolah" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-ujian">Nomor Peserta Ujian <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-ujian" id="no-ujian" required>
                                                    <small id="jumlah-saudara" class="form-text text-muted">Nomor peserta Ujian adalah 20 Digit yang tertera dalam SKHU (Format Baku 2-12-02-01-001-002-7), diisi bagi peserta didik jenjang SMP.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-ijazah">Nomor Seri Ijazah <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-ijazah" id="no-ijazah" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-khusus">Nomor Seri Khusus</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-khusus" id="no-khusus">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-skhun">Nomor Seri SKHUN <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-skhun" id="no-skhun" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tahun Pelajaran <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="tahun-ajaran" id="tahun-ajaran" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="w-ayah-ibu-wali" class="tab-pane">
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Ayah Kandung</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-ayah">Nama Ayah Kandung <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-ayah" id="nama-ayah" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Nama ayah kandung peserta didik sesuai dokumen resmi yang berlaku. <mark>Hindari penggunaan gelar akademik atau sosial</mark> (seperti Almh. Dr., Dra., S.Pd, dan Hj.).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nik-ayah">NIK Ayah <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nik-ayah" id="nik-ayah" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Induk Kependudukan">
                                                    <small id="nama-siswa" class="form-text text-muted">Nomor Induk Kependudukan tercantum pada <mark>Kartu Keluarga</mark> bagi WNI.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tahun-ayah">Tahun Lahir <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tahun-ayah" id="tahun-ayah" required minlength="4" maxlength="4" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pendidikan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="pend-ayah" id="pend-ayah" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pekerjaan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="kerja-ayah" id="kerja-ayah" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Penghasilan Bulanan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="gaji-ayah" id="gaji-ayah" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus</label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus-ayah[]" id="kebutuhan-khusus-ayah" class="form-control">
                                                        <option></option>
                                                    </select>
                                                    <small id="nama-siswa" class="form-text text-muted">Dapat dipilih lebih dari satu.</small>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Ibu Kandung</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-ibu">Nama Ibu Kandung <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-ibu" id="nama-ibu" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Nama ibu kandung peserta didik sesuai dokumen resmi yang berlaku. <mark>Hindari penggunaan gelar akademik atau sosial</mark> (seperti Almh. Dr., Dra., S.Pd, dan Hj.).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nik-ibu">NIK Ibu <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nik-ibu" id="nik-ibu" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Induk Kependudukan">
                                                    <small id="nama-siswa" class="form-text text-muted">Nomor Induk Kependudukan tercantum pada <mark>Kartu Keluarga</mark> bagi WNI.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tahun-ibu">Tahun Lahir <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tahun-ibu" id="tahun-ibu" required minlength="4" maxlength="4" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pendidikan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="pend-ibu" id="pend-ibu" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pekerjaan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="kerja-ibu" id="kerja-ibu" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Penghasilan Bulanan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="gaji-ibu" id="gaji-ibu" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus</label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus-ibu[]" id="kebutuhan-khusus-ibu" class="form-control">
                                                        <option></option>
                                                    </select>
                                                    <small id="nama-siswa" class="form-text text-muted">Dapat dipilih lebih dari satu.</small>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Wali</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-wali">Nama Wali <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-wali" id="nama-wali" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Nama wali peserta didik sesuai dokumen resmi yang berlaku. <mark>Hindari penggunaan gelar akademik atau sosial</mark> (seperti Almh. Dr., Dra., S.Pd, dan Hj.).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nik-wali">NIK Wali <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nik-wali" id="nik-wali" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Induk Kependudukan">
                                                    <small id="nama-siswa" class="form-text text-muted">Nomor Induk Kependudukan tercantum pada <mark>Kartu Keluarga</mark> bagi WNI.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tahun-wali">Tahun Lahir <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tahun-wali" id="tahun-wali" required minlength="4" maxlength="4" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pendidikan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="pend-wali" id="pend-wali" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pekerjaan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="kerja-wali" id="kerja-wali" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Penghasilan Bulanan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="gaji-wali" id="gaji-wali" class="form-control" required>
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus</label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus-wali[]" id="kebutuhan-khusus-wali" class="form-control">
                                                        <option></option>
                                                    </select>
                                                    <small id="nama-siswa" class="form-text text-muted">Dapat dipilih lebih dari satu.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div id="w-akun" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nisn">NISN</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" required minlength="10" maxlength="10" digits="true" equalTo="nisn" placeholder="Nomor Induk Siswa Nasional">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="password">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="password" id="password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="konfirmasi-password">Konfirmasi Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" name="konfirmasi-password" id="konfirmasi-password" equalTo='#password' required>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <ul class="pager">
                                        <li class="previous">
                                            <a><i class="fa fa-angle-left"></i> Previous</a>
                                        </li>
                                        <li class="finish hidden pull-right">
                                            <a>Finish</a>
                                        </li>
                                        <li class="next">
                                            <a>Next <i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
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


    <!-- Examples -->
    <script src="<?php echo base_url('/'); ?>assets/js/forms/tambah.siswa.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var groupBy = function(xs, key) {
                return xs.reduce(function(rv, x) {
                    (rv[x[key]] = rv[x[key]] || []).push(x);
                    return rv;
                }, {});
            };

            $('#jenis-kelamin').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/gender') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih jenis kelamin"
            });

            $('select[name="kebutuhan-khusus[]"], #kebutuhan-khusus-ayah, #kebutuhan-khusus-ibu, #kebutuhan-khusus-wali').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/berkebutuhan_khusus') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih kebutuhan khusus"
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

            $('#tempat-tinggal').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/tempat_tinggal') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih kepemilikan tempat tinggal peserta didik saat ini"
            });

            $('#transportasi').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/transportasi') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih transportasi utama"
            });

            $('#alasan-pip').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/alasan_pip') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih alasan dari sekolah"
            });

            $('#nama-bank').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/bank') ?>',
                    dataType: 'json',
                    delay: 500,
                    data: function(params) {
                        return {
                            bank: params.term
                        }
                    },
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                minimumInputLength: 4,
                allowClear: true,
                placeholder: "Pilih bank"
            });

            $('#komp-keahlian').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/komp_keahlian') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih kompetensi keahlian"
            });

            $('#jenis-daftar').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/jenis_masuk') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih jenis pendaftaran"
            });

            $('#tahun-ajaran').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/tahun_ajaran') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih tahun ajaran"
            });

            $('#pend-ayah, #pend-ibu, #pend-wali').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/pendidikan') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih pendidikan terakhir"
            });

            $('#kerja-ayah, #kerja-ibu, #kerja-wali').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/pekerjaan') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih pekerjaan"
            });

            $('#gaji-ayah, #gaji-ibu, #gaji-wali').select2({
                ajax: {
                    url: '<?php echo base_url('referensi_data/penghasilan') ?>',
                    dataType: 'json',
                    delay: 500,
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                },
                minimumResultsForSearch: Infinity,
                allowClear: true,
                placeholder: "Pilih penghasilan"
            });

            var $validator = $("#form-data-siswa").validate({});

            var $w_finish = $('#wizard-siswa').find('ul.pager li.finish')

            $('#wizard-siswa').bootstrapWizard({
                tabClass: 'wizard-steps',
                nextSelector: 'ul.pager li.next',
                previousSelector: 'ul.pager li.previous',
                firstSelector: null,
                lastSelector: null,
                onNext: function(tab, navigation, index, newindex) {
                    var validated = $('#form-data-siswa').valid();
                    if (!validated) {
                        $validator.focusInvalid();
                        return false;
                    }
                },
                onTabClick: function(tab, navigation, index, newindex) {
                    if (newindex == index + 1) {
                        return this.onNext(tab, navigation, index, newindex);
                    } else if (newindex > index + 1) {
                        return false;
                    } else {
                        return true;
                    }
                },
                onTabChange: function(tab, navigation, index, newindex) {
                    var $total = navigation.find('li').size() - 1;
                    $w_finish[newindex != $total ? 'addClass' : 'removeClass']('hidden');
                    $('#wizard-siswa').find(this.nextSelector)[newindex == $total ? 'addClass' : 'removeClass']('hidden');
                },
                onTabShow: function(tab, navigation, index) {
                    var $total = navigation.find('li').length - 1;
                    var $current = index;
                    var $percent = Math.floor(($current / $total) * 100);
                    $('#wizard-siswa').find('.progress-indicator').css({
                        'width': $percent + '%'
                    });
                    tab.prevAll().addClass('completed');
                    tab.nextAll().removeClass('completed');
                }
            })

            $w_finish.on('click', function(ev) {
                ev.preventDefault();
                $('#form-data-siswa').submit();
            });

        });

        $('#kecamatan').on("change", function() {
            var id_kec = $(this).val();
            $('#kel-desa').select2({
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