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
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/select2/select2.css" />

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
                        <section class="panel form-wizard" id="w4">
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
                                            <a href="#w-registrasi" data-toggle="tab"><span>4</span>Registrasi</a>
                                        </li>
                                        <li>
                                            <a href="#w-ayah-ibu-wali" data-toggle="tab"><span>3</span>Orang Tua / Wali</a>
                                        </li>
                                        <li>
                                            <a href="#w-akun" data-toggle="tab"><span>5</span>Akun</a>
                                        </li>

                                    </ul>
                                </div>

                                <form class="form-horizontal" novalidate="novalidate">
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
                                                        <option value>Pilih jenis kelamin</option>
                                                        <option value="l">Laki - laki</option>
                                                        <option value="p">Perempuan</option>
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
                                                    <select name="tempat-lahir" data-plugin-selectTwo class="form-control populate" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih tempat lahir" }' required>
                                                        <option value=""></option>
                                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                                            <option value="AK">Alaska</option>
                                                            <option value="HI">Hawaii</option>
                                                        </optgroup>
                                                        <optgroup label="Pacific Time Zone">
                                                            <option value="CA">California</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="WA">Washington</option>
                                                        </optgroup>
                                                        <optgroup label="Mountain Time Zone">
                                                            <option value="AZ">Arizona</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="WY">Wyoming</option>
                                                        </optgroup>
                                                        <optgroup label="Central Time Zone">
                                                            <option value="AL">Alabama</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="WI">Wisconsin</option>
                                                        </optgroup>
                                                        <optgroup label="Eastern Time Zone">
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WV">West Virginia</option>
                                                        </optgroup>
                                                    </select>
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
                                                    <select class="form-control" name="agama" id="agama" required>
                                                        <option value>Pilih agama</option>
                                                        <option value="l">Islam</option>
                                                        <option value="p">Hindu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kewarganegaraan <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="kewarganegaraan" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih kewarganegaraan" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus[]" data-plugin-selectTwo class="form-control" data-plugin-options='{ "placeholder": "Pilih kebutuhan khusus" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
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
                                                    <select name="kecamatan" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih kecamatan" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kelurahan/Desa <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="kel-desa" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih kelurahan/desa" }' required disabled>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
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
                                                    <input type="text" class="form-control" name="lintang" id="lintang" required>
                                                    <small id="lintang" class="form-text text-muted">Titik koordinat tempat tinggal siswa</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="bujur">Bujur <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="bujur" id="bujur" required>
                                                    <small id="lintang" class="form-text text-muted">Titik koordinat tempat tinggal siswa</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tempat Tinggal <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="tempat-tinggal" data-plugin-selectTwo class="form-control" data-plugin-options='{ "placeholder": "Pilih kepemilikan tempat tinggal peserta didik saat ini" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Moda Transportasi <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <select name="transportasi" data-plugin-selectTwo class="form-control" data-plugin-options='{ "placeholder": "Pilih transportasi" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                    <small id="transportasi" class="form-text text-muted">Jenis <mark>transportasi utama</mark> atau yang <mark>paling sering</mark> digunakan peserta didik untuk berangkat ke sekolah.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-kks">Nomor KKS</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-kks" id="no-kks" minlength="6" maxlength="8" digits="true" placeholder="Kartu Keluarga Sejahtera">
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
                                                <label class="col-sm-3 control-label" for="kps-pkh">Penerima KPS/PKH <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kps-pkh" id="kps-pkh1" value="1" type="radio" required />
                                                        <label for="kps-pkh1">Ya</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="kps-pkh" id="kps-pkh2" value="0" type="radio" />
                                                        <label for="kps-pkh2">Tidak</label>
                                                    </div>
                                                    <small id="kps-pkh" class="form-text text-muted">Status peserta didik sebagai penerima manfaat KPS (Kartu Perlindungan Sosial) / PKH (Program Keluarga Harapan).</small>
                                                    <label class="error" for="kps-pkh"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-kps-pkh">No. KPS/PKH</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-kps-pkh" id="no-kps-pkh" minlength="14" maxlength="15" placeholder="Isikan nomor apabila menerima" disabled>
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
                                                    <input type="text" class="form-control" name="no-kip" id="no-kip" minlength="5" maxlength="6" disabled>
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
                                                    <select name="alasan-pip" data-plugin-selectTwo class="form-control" data-plugin-options='{ "placeholder": "Pilih alasan dari sekolah" }' disabled>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Bank</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-bank">Nama Bank</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-bank" id="nama-bank">
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
                                                <label class="col-sm-3 control-label" for="no-hp">Nomor Handphone</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-hp" id="no-hp" minlength="11" maxlength="13" digits="true" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="email">Email</label>
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
                                                <label class="col-sm-3 control-label" for="tinggi-badan">Tinggi Badan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tinggi-badan" id="tinggi-badan" required maxlength="3" digits="true">
                                                    <small id="nama-siswa" class="form-text text-muted">Tinggi badan peserta dalam satuan sentimeter.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="berat-badan">Berat Badan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="berat-badan" id="berat-badan" required maxlength="3" digits="true">
                                                    <small id="nama-siswa" class="form-text text-muted">Berat badan peserta dalam satuan sentimeter.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="lingkar-kepala">Lingkar Kepala</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="lingkar-kepala" id="lingkar-kepala" required maxlength="2" digits="true">
                                                    <small id="nama-siswa" class="form-text text-muted">Lingkar kepala peserta dalam satuan sentimeter.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="jarak-sekolah">Jarak ke Sekolah <span class="required">*</span></label>
                                                <div class="col-sm-9">
                                                    <div class="radio-custom radio-primary">
                                                        <input name="jarak-sekolah" id="jarak-sekolah1" value="1" type="radio" required />
                                                        <label for="jarak-sekolah1">Kurang dari 1 km</label>
                                                    </div>
                                                    <div class="radio-custom radio-primary">
                                                        <input name="jarak-sekolah" id="jarak-sekolah2" value="0" type="radio" />
                                                        <label for="jarak-sekolah2">Lebih dari 1 km</label>
                                                    </div>
                                                    <label class="error" for="jarak-sekolah"></label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="sebutkan-jarak">Sebutkan</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="sebutkan-jarak" id="sebutkan-jarak" required maxlength="2" digits="true">
                                                    <small id="nama-siswa" class="form-text text-muted">Apabila jarak rumah peserta didik ke sekolah lebih dari 1 km, isikan dengan angka jarak yang sebenarnya pada kolom ini dalam satuan kilometer.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="waktu-tempuh">Waktu Tempuh ke Sekolah</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="waktu-tempuh" id="waktu-tempuh" required maxlength="3" digits="true">
                                                    <small id="nama-siswa" class="form-text text-muted">Waktu Tempuh ke Sekolah dalam satuan menit.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="jumlah-saudara">Jumlah Saudara Kandung</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="jumlah-saudara" id="wjumlah-saudara" required maxlength="2" digits="true">
                                                    <small id="nama-siswa" class="form-text text-muted">Jumlah saudara kandung yang dimiliki peserta didik. Jumlah saudara kandung dihitung tanpa menyertakan peserta didik, dengan rumus jumlah kakak ditambah jumlah adik. Isikan 0 apabila anak tunggal.</small>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Prestasi</strong>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Beasiswa</strong>
                                            </div>
                                        </div>
                                        <div id="w-registrasi" class="tab-pane">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Kompetensi Keahlian</label>
                                                <div class="col-sm-9">
                                                    <select name="komp-keahlian" id="komp-keahlian" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih kompetensi keahlian" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="jenis-daftar">Jenis Pendaftaran</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="jenis-daftar" id="jenis-daftar" required>
                                                        <option value>Pilih jenis kelamin</option>
                                                        <option value="01">Siswa Baru</option>
                                                        <option value="02">Pindahan</option>
                                                        <option value="03">Kembali Bersekolah</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nis">NIS</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nis" id="nis" required minlength="10" maxlength="10" digits="true" placeholder="Nomor Induk Siswa">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tanggal-masuk">Tanggal Masuk Sekolah</label>
                                                <div class="col-sm-9">
                                                    <input type="date" class="form-control" name="tanggal-masuk" id="tanggal-masuk" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="asal-sekolah">Asal Sekolah</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="asal-sekolah" id="asal-sekolah" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-ujian">Nomor Peserta Ujian</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-ujian" id="no-ujian" required minlength="10" maxlength="10" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-ijazah">Nomor Seri Ijazah</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-ijazah" id="no-ijazah" required minlength="10" maxlength="10" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-khusus">Nomor Seri Khusus</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-khusus" id="no-khusus" required minlength="10" maxlength="10" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="no-skhun">Nomor Seri SKHUN</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="no-skhun" id="no-skhun" required minlength="10" maxlength="10" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Tahun Pelajaran</label>
                                                <div class="col-sm-4">
                                                    <div class="input-daterange input-group">
                                                        <input type="text" class="form-control" name="start" required>
                                                        <span class="input-group-addon">/</span>
                                                        <input type="text" class="form-control" name="end" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="w-ayah-ibu-wali" class="tab-pane">
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Ayah Kandung</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-ayah">Nama Ayah Kandung</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-ayah" id="nama-ayah" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Nama ayah kandung peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Almh. Dr., Dra., S.Pd, dan Hj.).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nik-ayah">NIK Ayah</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nik-ayah" id="nik-ayah" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Induk Kependudukan">
                                                    <small id="nama-siswa" class="form-text text-muted">Nomor Induk Kependudukan tercantum pada <mark>Kartu Keluarga</mark> bagi WNI.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tahun-ayah">Tahun Lahir</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tahun-ayah" id="tahun-ayah" required minlength="4" maxlength="4" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pendidikan</label>
                                                <div class="col-sm-9">
                                                    <select name="pend-ayah" id="pend-ayah" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih pendidikan terakhir ayah" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pekerjaan</label>
                                                <div class="col-sm-9">
                                                    <select name="kerja-ayah" id="kerja-ayah" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih pekerjaan ayah" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Penghasilan Bulanan</label>
                                                <div class="col-sm-9">
                                                    <select name="gaji-ayah" id="gaji-ayah" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih penghasilan bulanan ayah" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus</label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus-ayah[]" id="kebutuhan-khusus-ayah" data-plugin-selectTwo class="form-control" data-plugin-options='{ "placeholder": "Pilih jika memiliki kebutuhan khusus" }'>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                    <small id="nama-siswa" class="form-text text-muted">Dapat dipilih lebih dari satu.</small>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Ibu Kandung</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-ibu">Nama Ibu Kandung</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-ibu" id="nama-ibu" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Nama ibu kandung peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Almh. Dr., Dra., S.Pd, dan Hj.).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nik-ibu">NIK Ibu</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nik-ibu" id="nik-ibu" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Induk Kependudukan">
                                                    <small id="nama-siswa" class="form-text text-muted">Nomor Induk Kependudukan tercantum pada <mark>Kartu Keluarga</mark> bagi WNI.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tahun-ibu">Tahun Lahir</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tahun-ibu" id="tahun-ibu" required minlength="4" maxlength="4" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pendidikan</label>
                                                <div class="col-sm-9">
                                                    <select name="pend-ibu" id="pend-ibu" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih pendidikan terakhir ibu" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pekerjaan</label>
                                                <div class="col-sm-9">
                                                    <select name="kerja-ibu" id="kerja-ibu" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih pekerjaan ibu" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Penghasilan Bulanan</label>
                                                <div class="col-sm-9">
                                                    <select name="gaji-ibu" id="gaji-ibu" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih penghasilan bulanan ibu" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus</label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus-ibu[]" id="kebutuhan-khusus-ibu" data-plugin-selectTwo class="form-control" data-plugin-options='{ "placeholder": "Pilih jika memiliki kebutuhan khusus" }'>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                    <small id="nama-siswa" class="form-text text-muted">Dapat dipilih lebih dari satu.</small>
                                                </div>
                                            </div>
                                            <div class="well well-sm dark text-center">
                                                <strong>Data Wali</strong>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nama-wali">Nama Wali</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nama-wali" id="nama-wali" required>
                                                    <small id="nama-siswa" class="form-text text-muted">Nama wali peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Almh. Dr., Dra., S.Pd, dan Hj.).</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="nik-wali">NIK Wali</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="nik-wali" id="nik-wali" required minlength="16" maxlength="16" digits="true" placeholder="Nomor Induk Kependudukan">
                                                    <small id="nama-siswa" class="form-text text-muted">Nomor Induk Kependudukan tercantum pada <mark>Kartu Keluarga</mark> bagi WNI.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" for="tahun-wali">Tahun Lahir</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="tahun-wali" id="tahun-wali" required minlength="4" maxlength="4" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pendidikan</label>
                                                <div class="col-sm-9">
                                                    <select name="pend-wali" id="pend-wali" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih pendidikan terakhir wali" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Pekerjaan</label>
                                                <div class="col-sm-9">
                                                    <select name="kerja-wali" id="kerja-wali" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih pekerjaan wali" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Penghasilan Bulanan</label>
                                                <div class="col-sm-9">
                                                    <select name="gaji-wali" id="gaji-wali" data-plugin-selectTwo class="form-control" data-plugin-options='{ "minimumInputLength": 3, "placeholder": "Pilih penghasilan bulanan wali" }' required>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Berkebutuhan Khusus</label>
                                                <div class="col-sm-9">
                                                    <select multiple name="kebutuhan-khusus-wali[]" id="kebutuhan-khusus-wali" data-plugin-selectTwo class="form-control" data-plugin-options='{ "placeholder": "Pilih jika memiliki kebutuhan khusus" }'>
                                                        <option></option>
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </select>
                                                    <small id="nama-siswa" class="form-text text-muted">Dapat dipilih lebih dari satu.</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="w-akun" class="tab-pane">
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
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="panel-footer">
                                <ul class="pager">
                                    <li class="previous disabled">
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
    <script src="<?php echo base_url('/'); ?>assets/vendor/select2/select2.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.init.js"></script>


    <!-- Examples -->
    <script src="<?php echo base_url('/'); ?>assets/js/forms/examples.wizard.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/js/forms/tambah.siswa.js"></script>
</body>

</html>