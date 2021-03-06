<!DOCTYPE html>
<html lang="en" class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Edit Siswa | Admin PADAS | SMK Negeri 1 Geger</title>
    <meta name="description" content="Edit Siswa - PADAS SMK Negeri 1 Geger">
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
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/select2/css/select2.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/sweetalert2/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/pnotify/pnotify.custom.css" />
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
                    <h2>Edit Siswa</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="<?php echo base_url(); ?>">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Data Siswa</span></li>
                            <li><span>Database Siswa</span></li>
                            <li><span>Edit Siswa</span></li>
                        </ol>
                    </div>
                </header>

                <!-- start: page -->

                <!-- vertical -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="toggle form-horizontal" data-plugin-toggle data-plugin-options='{ "isAccordion": true }'>
                            <form id="form-data-pribadi" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle active">
                                    <label><i class="fa fa-user"> </i> Data Pribadi</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $data_pribadi[0]['id_siswa']; ?>" hidden required>
                                            <div class="form-group">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-6">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo base_url('/') . 'assets/img/foto_profil/' . $data_pribadi[0]['foto']; ?>" class="rounded img-responsive" alt="<?php echo $data_pribadi[0]['nama']; ?>" /></div>
                                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                        <div>
                                                            <span class="btn btn-file">
                                                                <span class="fileupload-exists">Ganti</span>
                                                                <span class="fileupload-new">Pilih Foto Baru</span>
                                                                <input type="file" name="siswa-foto" accept="image/png, image/jpg, image/jpeg" />
                                                            </span>
                                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Reset</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nama Lengkap: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="siswa-nama" value="<?php echo $data_pribadi[0]['nama']; ?>" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Jenis Kelamin: </label>
                                                <div class="col-sm-8">
                                                    <select name="siswa-gender" id="siswa-gender" class="form-control" required>
                                                        <option value="<?php echo $data_pribadi[0]['id_gender']; ?>"><?php echo $data_pribadi[0]['gender']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NISN: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nisn" value="<?php echo $data_pribadi[0]['nisn']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NIPD: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nipd" value="<?php echo $data_pribadi[0]['nipd']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kelas: </label>
                                                <div class="col-sm-8">
                                                    <div class="row form-group">
                                                        <div class="col-lg-4">
                                                            <select name="siswa-kelas" id="siswa-kelas" class="form-control" required>
                                                                <option value="<?php echo $data_pribadi[0]['id_kelas']; ?>"><?php echo $data_pribadi[0]['kelas']; ?></option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-md hidden-lg hidden-xl"></div>

                                                        <div class="col-lg-4">
                                                            <select name="siswa-jurusan" id="siswa-jurusan" class="form-control" required>
                                                                <option value="<?php echo $pendaftaran_masuk->id_kompetensi_keahlian_diterima; ?>"><?php echo $pendaftaran_masuk->akronim_diterima; ?></option>
                                                            </select>
                                                        </div>

                                                        <div class="mb-md hidden-lg hidden-xl"></div>

                                                        <div class="col-lg-4">
                                                            <input type="text" name="siswa-golongan" value="<?php echo $data_pribadi[0]['golongan']; ?>" class="form-control" required digits="true">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NIK: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="siswa-nik" value="<?php echo $data_pribadi[0]['nik']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tempat Lahir: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="siswa-tempat-lahir" value="<?php echo $data_pribadi[0]['tempat_lahir']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tanggal Lahir: </label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="siswa-tanggal" value="<?php echo $data_pribadi[0]['tanggal_lahir']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">No Kartu Keluarga: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nomor-kk" value="<?php echo $data_pribadi[0]['nomor_kk']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">No Registrasi Akta Lahir: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nomor-akta" value="<?php echo $data_pribadi[0]['nomor_registrasi_akta_lahir']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Agama: </label>
                                                <div class="col-sm-8">
                                                    <select name="siswa-agama" id="siswa-agama" class="form-control" required>
                                                        <option value="<?php echo $data_pribadi[0]['id_agama']; ?>"><?php echo $data_pribadi[0]['agama']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kewarganegaraan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kewarganegaraan" value="<?php echo $data_pribadi[0]['kewarganegaraan']; ?>" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Berkebutuhan Khusus: </label>
                                                <div class="col-sm-8">
                                                    <select multiple name="siswa-kebutuhan-khusus[]" id="siswa-kebutuhan-khusus" class="form-control">
                                                        <?php if ($data_pribadi[0]['berkebutuhan_khusus'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            foreach ($data_pribadi[0]['berkebutuhan_khusus'] as $key) {
                                                                echo "<option selected='selected' value='" . $key['id_berkebutuhan_khusus'] . "'>" . $key['berkebutuhan_khusus'] . "</option>";
                                                            }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-alamat-tinggal" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-home"></i> Alamat Sesuai Tempat Tinggal Saat Ini</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $data_pribadi[0]['id_siswa']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Alamat Jalan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jalan" value="<?php echo $alamat_dan_domisili->detail_alamat; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Rumah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-rumah" value="<?php echo $alamat_dan_domisili->nomor_rumah; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">No. Asuransi: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-asuransi" value="<?php echo $alamat_dan_domisili->nomor_asuransi; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RT: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rt" value="<?php echo $alamat_dan_domisili->rt; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RW: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rw" value="<?php echo $alamat_dan_domisili->rw; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Dusun: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="dusun" value="<?php echo $alamat_dan_domisili->dusun; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kelurahan/Desa: </label>
                                                <div class="col-sm-8">
                                                    <select name="desa" id="desa" class="form-control" required>
                                                        <option value="<?php echo $alamat_dan_domisili->id_desa; ?>"><?php echo $alamat_dan_domisili->desa; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kecamatan: </label>
                                                <div class="col-sm-8">
                                                    <select name="kecamatan" id="kecamatan" class="form-control" required>
                                                        <option value="<?php echo $alamat_dan_domisili->id_kecamatan; ?>"><?php echo $alamat_dan_domisili->kecamatan; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kode Pos: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kode-pos" value="<?php echo $alamat_dan_domisili->kode_pos; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Lintang: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lintang" value="<?php echo $alamat_dan_domisili->lintang; ?>" class="form-control" number="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Bujur: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="bujur" value="<?php echo $alamat_dan_domisili->bujur; ?>" class="form-control" number="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tempat Tinggal: </label>
                                                <div class="col-sm-8">
                                                    <select name="tempat-tinggal" id="tempat-tinggal" class="form-control" required>
                                                        <option value="<?php echo $alamat_dan_domisili->id_tempat_tinggal; ?>"><?php echo $alamat_dan_domisili->tempat_tinggal; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-domisili" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-map-marker"></i> Domisili</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $data_pribadi[0]['id_siswa']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Alamat Jalan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jalan" value="<?php echo $alamat_dan_domisili->domisili_detail_domisili; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Rumah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-rumah" value="<?php echo $alamat_dan_domisili->domisili_nomor_rumah; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RT: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rt" value="<?php echo $alamat_dan_domisili->domisili_rt; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RW: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rw" value="<?php echo $alamat_dan_domisili->domisili_rw; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Dusun: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="dusun" value="<?php echo $alamat_dan_domisili->domisili_dusun; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kelurahan/Desa: </label>
                                                <div class="col-sm-8">
                                                    <select name="desa" id="domisili-desa" class="form-control" required>
                                                        <option value="<?php echo $alamat_dan_domisili->domisili_id_desa; ?>"><?php echo $alamat_dan_domisili->domisili_desa; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kecamatan: </label>
                                                <div class="col-sm-8">
                                                    <select name="kecamatan" id="domisili-kecamatan" class="form-control">
                                                        <option value="<?php echo $alamat_dan_domisili->domisili_id_kecamatan; ?>"><?php echo $alamat_dan_domisili->domisili_kecamatan; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kode Pos: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kode-pos" value="<?php echo $alamat_dan_domisili->domisili_kode_pos; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Lintang: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lintang" value="<?php echo $alamat_dan_domisili->domisili_lintang; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Bujur: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="bujur" value="<?php echo $alamat_dan_domisili->domisili_bujur; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tempat Tinggal: </label>
                                                <div class="col-sm-8">
                                                    <select name="tempat-tinggal" id="domisili-tempat-tinggal" class="form-control">
                                                        <option value="<?php echo $alamat_dan_domisili->domisili_id_tempat_tinggal; ?>"><?php echo $alamat_dan_domisili->domisili_tempat_tinggal; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                            <button data-toggle="tooltip" title="Hapus seluruh data domisili secara permanent" class="btn btn-warning btn-delete" type="button">Hapus </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-bantuan" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-credit-card"></i> Bantuan Keluarga Tidak Mampu</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $data_pribadi[0]['id_siswa']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Moda Transportasi: </label>
                                                <div class="col-sm-8">
                                                    <select name="transportasi" id="transportasi" class="form-control">
                                                        <option value="<?php echo $bantuan_tidak_mampu[0]['id_moda_transportasi']; ?>"><?php echo $bantuan_tidak_mampu[0]['moda_transportasi']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor KKS: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-kks" value="<?php echo $bantuan_tidak_mampu[0]['nomor_kks']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Anak ke-: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="anak-ke" value="<?php echo $bantuan_tidak_mampu[0]['anak_ke']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor KPS/PKH: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-kps-pkh" value="<?php echo $bantuan_tidak_mampu[0]['nomor_kps_pkh']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor KIP: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-kip" value="<?php echo $bantuan_tidak_mampu[0]['nomor_kip']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nama di KIP: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama-kip" value="<?php echo $bantuan_tidak_mampu[0]['nama_tertera_kip']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Layak PIP: </label>
                                                <div class="col-sm-8">
                                                    <div class="input-group mb-md">
                                                        <span data-toggle="tooltip" title="jika pilih 'Tidak' akan menghapus permanent data PIP." class="input-group-addon btn-warning">!</span>
                                                        <select id="layak-pip" name="layak-pip" class="form-control">
                                                            <?php if ($bantuan_tidak_mampu[0]['id_pip'] === NULL) {
                                                                echo "<option value='1'>Ya</option><option value='0' selected>Tidak</option>";
                                                            } else {
                                                                echo "<option value='1' selected>Ya</option><option value='0'>Tidak</option>";
                                                            }; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Alasan Layak PIP: </label>
                                                <div class="col-sm-8">
                                                    <select name="alasan-pip" id="alasan-pip" class="form-control">
                                                        <option value="<?php echo $bantuan_tidak_mampu[0]['id_alasan_layak_pip']; ?>"><?php echo $bantuan_tidak_mampu[0]['alasan_layak_pip']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nama Bank: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="bank" value="<?php echo $bantuan_tidak_mampu[0]['bank']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Rekening: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rekening" value="<?php echo $bantuan_tidak_mampu[0]['nomor_rekening']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kantor Cabang Pembantu: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kacab" value="<?php echo $bantuan_tidak_mampu[0]['kantor_cabang_pembantu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Rekening Atas Nama: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama-rekening" value="<?php echo $bantuan_tidak_mampu[0]['rekening_atas_nama']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <h5 class="text-center"><strong><u>Bantuan Tidak Mampu Lainnya</u></strong></h5>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-md" style="float: right;">
                                                        <a data-toggle="modal" data-target="#modal-tambah-bantuan" class="modal-with-form btn btn-primary">Tambah data bantuan lainnya <i class="fa fa-plus-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table-bantuan-lainnya" class="table table-bordered table-striped mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Program</th>
                                                        <th>Bukti</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-ayah" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-male"></i> Data Ayah Kandung</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $ayah[0]['id_ayah']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nama Ayah Kandung: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama" value="<?php echo $ayah[0]['nama_ayah']; ?>" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kondisi Ayah Kandung: </label>
                                                <div class="col-sm-8">
                                                    <select name="kondisi" class="form-control" required>
                                                        <?php if ($ayah[0]['kondisi_ayah'] === "Hidup") {
                                                            echo "<option value='Meninggal'>Meninggal</option><option value='Hidup' selected>Hidup</option>";
                                                        } else {
                                                            echo "<option value='Meninggal' selected>Meninggal</option><option value='Hidup'>Hidup</option>";
                                                        }; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NIK Ayah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nik" value="<?php echo $ayah[0]['nik_ayah']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Handphone: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-telp" value="<?php echo $ayah[0]['nomor_telepon_seluler_ayah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Rumah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-rumah" value="<?php echo $ayah[0]['nomor_rumah_ayah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RT: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rt" value="<?php echo $ayah[0]['rt_ayah']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RW: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rw" value="<?php echo $ayah[0]['rw_ayah']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Dusun: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="dusun" value="<?php echo $ayah[0]['dusun_ayah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kelurahan/Desa: </label>
                                                <div class="col-sm-8">
                                                    <select name="desa" id="ayah-desa" class="form-control" required>
                                                        <option value="<?php echo $ayah[0]['id_desa_ayah']; ?>"><?php echo $ayah[0]['desa_ayah']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kecamatan: </label>
                                                <div class="col-sm-8">
                                                    <select name="kecamatan" id="ayah-kecamatan" class="form-control" required>
                                                        <option value="<?php echo $ayah[0]['id_kecamatan_ayah']; ?>"><?php echo $ayah[0]['kecamatan_ayah']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kode Pos: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kode-pos" value="<?php echo $ayah[0]['kode_pos_ayah']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Lintang: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lintang" value="<?php echo $ayah[0]['lintang_ayah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Bujur: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="bujur" value="<?php echo $ayah[0]['bujur_ayah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Alamat Jalan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jalan" value="<?php echo $ayah[0]['detail_alamat_ayah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tempat Tinggal: </label>
                                                <div class="col-sm-8">
                                                    <select name="tempat-tinggal" id="tempat-tinggal-ayah" class="form-control">
                                                        <option value="<?php echo $ayah[0]['id_tempat_tinggal_ayah']; ?>"><?php echo $ayah[0]['tempat_tinggal_ayah']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tanggal Lahir: </label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tanggal-lahir" value="<?php echo $ayah[0]['tanggal_lahir_ayah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Pendidikan: </label>
                                                <div class="col-sm-8">
                                                    <select name="pendidikan" id="pendidikan-ayah" class="form-control">
                                                        <option value="<?php echo $ayah[0]['id_pendidikan_ayah']; ?>"><?php echo $ayah[0]['pendidikan_ayah']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Pekerjaan: </label>
                                                <div class="col-sm-8">
                                                    <select name="pekerjaan" id="pekerjaan-ayah" class="form-control">
                                                        <option value="<?php echo $ayah[0]['id_pekerjaan_ayah']; ?>"><?php echo $ayah[0]['pekerjaan_ayah']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Penghasilan: </label>
                                                <div class="col-sm-8">
                                                    <select name="penghasilan" id="penghasilan-ayah" class="form-control">
                                                        <option value="<?php echo $ayah[0]['id_penghasilan_ayah']; ?>"><?php echo $ayah[0]['penghasilan_ayah']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Berkebutuhan Khusus: </label>
                                                <div class="col-sm-8">
                                                    <select multiple name="ayah-kebutuhan-khusus[]" id="ayah-kebutuhan-khusus" class="form-control">
                                                        <?php if ($ayah[0]['berkebutuhan_khusus_ayah'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            foreach ($ayah[0]['berkebutuhan_khusus_ayah'] as $key) {
                                                                echo "<option selected='selected' value='" . $key['id_berkebutuhan_khusus_ayah'] . "'>" . $key['berkebutuhan_khusus_ayah'] . "</option>";
                                                            }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-ibu" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-female"></i> Data Ibu Kandung</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $ibu[0]['id_ibu']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nama Ibu Kandung: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama" value="<?php echo $ibu[0]['nama_ibu']; ?>" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kondisi Ibu Kandung: </label>
                                                <div class="col-sm-8">
                                                    <select name="kondisi" class="form-control" required>
                                                        <?php if ($ibu[0]['kondisi_ibu'] === "Hidup") {
                                                            echo "<option value='Meninggal'>Meninggal</option><option value='Hidup' selected>Hidup</option>";
                                                        } else {
                                                            echo "<option value='Meninggal' selected>Meninggal</option><option value='Hidup'>Hidup</option>";
                                                        }; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NIK Ibu: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nik" value="<?php echo $ibu[0]['nik_ibu']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Handphone: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-telp" value="<?php echo $ibu[0]['nomor_telepon_seluler_ibu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Rumah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-rumah" value="<?php echo $ibu[0]['nomor_rumah_ibu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RT: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rt" value="<?php echo $ibu[0]['rt_ibu']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RW: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rw" value="<?php echo $ibu[0]['rw_ibu']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Dusun: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="dusun" value="<?php echo $ibu[0]['dusun_ibu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kelurahan/Desa: </label>
                                                <div class="col-sm-8">
                                                    <select name="desa" id="ibu-desa" class="form-control" required>
                                                        <option value="<?php echo $ibu[0]['id_desa_ibu']; ?>"><?php echo $ibu[0]['desa_ibu']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kecamatan: </label>
                                                <div class="col-sm-8">
                                                    <select name="kecamatan" id="ibu-kecamatan" class="form-control" required>
                                                        <option value="<?php echo $ibu[0]['id_kecamatan_ibu']; ?>"><?php echo $ibu[0]['kecamatan_ibu']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kode Pos: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kode-pos" value="<?php echo $ibu[0]['kode_pos_ibu']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Lintang: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lintang" value="<?php echo $ibu[0]['lintang_ibu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Bujur: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="bujur" value="<?php echo $ibu[0]['bujur_ibu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Alamat Jalan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jalan" value="<?php echo $ibu[0]['detail_alamat_ibu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tempat Tinggal: </label>
                                                <div class="col-sm-8">
                                                    <select name="tempat-tinggal" id="tempat-tinggal-ibu" class="form-control" required>
                                                        <option value="<?php echo $ibu[0]['id_tempat_tinggal_ibu']; ?>"><?php echo $ibu[0]['tempat_tinggal_ibu']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tanggal Lahir: </label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tanggal-lahir" value="<?php echo $ibu[0]['tanggal_lahir_ibu']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Pendidikan: </label>
                                                <div class="col-sm-8">
                                                    <select name="pendidikan" id="pendidikan-ibu" class="form-control">
                                                        <option value="<?php echo $ibu[0]['id_pendidikan_ibu']; ?>"><?php echo $ibu[0]['pendidikan_ibu']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Pekerjaan: </label>
                                                <div class="col-sm-8">
                                                    <select name="pekerjaan" id="pekerjaan-ibu" class="form-control">
                                                        <option value="<?php echo $ibu[0]['id_pekerjaan_ibu']; ?>"><?php echo $ibu[0]['pekerjaan_ibu']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Penghasilan: </label>
                                                <div class="col-sm-8">
                                                    <select name="penghasilan" id="penghasilan-ibu" class="form-control">
                                                        <option value="<?php echo $ibu[0]['id_penghasilan_ibu']; ?>"><?php echo $ibu[0]['penghasilan_ibu']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Berkebutuhan Khusus: </label>
                                                <div class="col-sm-8">
                                                    <select multiple name="ibu-kebutuhan-khusus[]" id="ibu-kebutuhan-khusus" class="form-control">
                                                        <?php if ($ibu[0]['berkebutuhan_khusus_ibu'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            foreach ($ibu[0]['berkebutuhan_khusus_ibu'] as $key) {
                                                                echo "<option selected='selected' value='" . $key['id_berkebutuhan_khusus_ibu'] . "'>" . $key['berkebutuhan_khusus_ibu'] . "</option>";
                                                            }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-wali" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-male"></i> Data Wali</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $data_pribadi[0]['id_siswa']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nama Wali: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nama" value="<?php echo $wali[0]['nama_wali']; ?>" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NIK Wali: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nik" value="<?php echo $wali[0]['nik_wali']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Handphone: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-telp" value="<?php echo $wali[0]['nomor_telepon_seluler_wali']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Rumah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-rumah" value="<?php echo $wali[0]['nomor_rumah_wali']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RT: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rt" value="<?php echo $wali[0]['rt_wali']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">RW: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rw" value="<?php echo $wali[0]['rw_wali']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Dusun: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="dusun" value="<?php echo $wali[0]['dusun_wali']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kelurahan/Desa: </label>
                                                <div class="col-sm-8">
                                                    <select name="desa" id="wali-desa" class="form-control" required>
                                                        <option value="<?php echo $wali[0]['id_desa_wali']; ?>"><?php echo $wali[0]['desa_wali']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kecamatan: </label>
                                                <div class="col-sm-8">
                                                    <select name="kecamatan" id="wali-kecamatan" class="form-control" required>
                                                        <option value="<?php echo $wali[0]['id_kecamatan_wali']; ?>"><?php echo $wali[0]['kecamatan_wali']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kode Pos: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kode-pos" value="<?php echo $wali[0]['kode_pos_wali']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Lintang: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lintang" value="<?php echo $wali[0]['lintang_wali']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Bujur: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="bujur" value="<?php echo $wali[0]['bujur_wali']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Alamat Jalan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jalan" value="<?php echo $wali[0]['detail_alamat_wali']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tempat Tinggal: </label>
                                                <div class="col-sm-8">
                                                    <select name="tempat-tinggal" id="tempat-tinggal-wali" class="form-control" required>
                                                        <option value="<?php echo $wali[0]['id_tempat_tinggal_wali']; ?>"><?php echo $wali[0]['tempat_tinggal_wali']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tanggal Lahir: </label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tanggal-lahir" value="<?php echo $wali[0]['tanggal_lahir_wali']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Pendidikan: </label>
                                                <div class="col-sm-8">
                                                    <select name="pendidikan" id="pendidikan-wali" class="form-control">
                                                        <?php if ($wali[0]['pendidikan_wali'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            echo '<option value="' . $wali[0]['id_pendidikan_wali'] . '">' . $wali[0]['pendidikan_wali'] . '</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Pekerjaan: </label>
                                                <div class="col-sm-8">
                                                    <select name="pekerjaan" id="pekerjaan-wali" class="form-control">
                                                        <?php if ($wali[0]['pekerjaan_wali'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            echo '<option value="' . $wali[0]['id_pekerjaan_wali'] . '">' . $wali[0]['pekerjaan_wali'] . '</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Penghasilan: </label>
                                                <div class="col-sm-8">
                                                    <select name="penghasilan" id="penghasilan-wali" class="form-control">
                                                        <?php if ($wali[0]['penghasilan_wali'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            echo '<option value="' . $wali[0]['id_penghasilan_wali'] . '">' . $wali[0]['penghasilan_wali'] . '</option>';
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Berkebutuhan Khusus: </label>
                                                <div class="col-sm-8">
                                                    <select multiple name="wali-kebutuhan-khusus[]" id="wali-kebutuhan-khusus" class="form-control">
                                                        <?php if ($wali[0]['berkebutuhan_khusus_wali'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            foreach ($wali[0]['berkebutuhan_khusus_wali'] as $key) {
                                                                echo "<option selected='selected' value='" . $key['id_berkebutuhan_khusus_wali'] . "'>" . $key['berkebutuhan_khusus_wali'] . "</option>";
                                                            }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                            <button data-toggle="tooltip" title="Hapus seluruh data wali" class="btn btn-warning btn-delete" type="button">Hapus </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-kontak" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-fax"></i> Kontak Siswa</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $data_pribadi[0]['id_siswa']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Telepon Rumah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-telp-rumah" value="<?php echo $kontak_siswa[0]['nomor_telepon_rumah']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Email: </label>
                                                <div class="col-sm-8">
                                                    <input type="email" name="email" value="<?php echo $kontak_siswa[0]['email']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor WhatsApp: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="no-whatsapp" value="<?php echo $kontak_siswa[0]['nomor_whatsapp']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Provider WhatsApp: </label>
                                                <div class="col-sm-8">
                                                    <select name="provider-whatsapp" id="provider-whatsapp-siswa" class="form-control" required>
                                                        <option value="<?php echo $kontak_siswa[0]['id_provider_whatsapp']; ?>"><?php echo $kontak_siswa[0]['provider_whatsapp']; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h5 class="text-center"><strong><u>Nomor Telepon Siswa</u></strong></h5>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-md" style="float: right;">
                                                        <a data-toggle="modal" data-target="#modal-tambah-nomor" class="modal-with-form btn btn-primary">Tambah nomor telepon <i class="fa fa-plus-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table-nomor-telp" class="table table-bordered table-striped mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Nomor Handphone</th>
                                                        <th>Provider</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                            <h5 class="text-center"><strong><u>Media Sosial</u></strong></h5>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-md" style="float: right;">
                                                        <a data-toggle="modal" data-target="#modal-tambah-medsos" class="modal-with-form btn btn-primary">Tambah media sosial <i class="fa fa-plus-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table-media-sosial" class="table table-bordered table-striped mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Akun</th>
                                                        <th>Jenis Akun</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                            <h5 class="text-center"><strong><u>Kontak Darurat</u></strong></h5>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-md" style="float: right;">
                                                        <a data-toggle="modal" data-target="#modal-tambah-kontak-darurat" class="modal-with-form btn btn-primary">Tambah kontak darurat <i class="fa fa-plus-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table-kontak-darurat" class="table table-bordered table-striped mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Hubungan dengan Siswa</th>
                                                        <th>Nomor Handphone</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <form id="form-periodik" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-book"></i> Data Periodik</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $data_pribadi[0]['id_siswa']; ?>" hidden required>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tinggi Badan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="tinggi" value="<?php echo $data_periodik[0]['tinggi_badan_cm']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Berat Badan: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="berat" value="<?php echo $data_periodik[0]['berat_badan_kg']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Lingkar Kepala: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="lingkar" value="<?php echo $data_periodik[0]['lingkar_kepala_cm']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Jarak Tempat Tinggal ke Sekolah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jarak" value="<?php echo $data_periodik[0]['jarak_tempat_tinggal_ke_sekolah_m']; ?>" class="form-control" digits="true">
                                                    <small class="form-text text-muted">Dalam satuan <strong>kilometer</strong>. isi dengan 0 jika kurang dari 1 kilometer.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Waktu Tempuh ke Sekolah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="waktu" value="<?php echo $data_periodik[0]['waktu_tempuh_ke_sekolah_menit']; ?>" class="form-control" digits="true">
                                                    <small class="form-text text-muted">Dalam satuan <strong>menit</strong>.</small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Ukuran Baju: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="baju" value="<?php echo $data_periodik[0]['ukuran_baju']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Ukuran Celana: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="celana" value="<?php echo $data_periodik[0]['ukuran_celana']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Ukuran Sepatu: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="sepatu" value="<?php echo $data_periodik[0]['ukuran_sepatu']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Ukuran Topi: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="topi" value="<?php echo $data_periodik[0]['ukuran_topi']; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Jumlah Saudara Kandung: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="jumlah-saudara" value="<?php echo $data_periodik[0]['jumlah_saudara_kandung']; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <h5 class="text-center"><strong><u>Saudara Kandung</u></strong></h5>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-md" style="float: right;">
                                                        <a data-toggle="modal" data-target="#modal-tambah-saudara" class="modal-with-form btn btn-primary">Tambah saudara kandung <i class="fa fa-plus-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table-saudara" class="table table-bordered table-striped mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Nama</th>
                                                        <th>Anak ke-</th>
                                                        <th>nomor Telepon</th>
                                                        <th>Gender</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <section class="toggle">
                                <label> <i class="fa fa-trophy"></i> Prestasi</label>
                                <div class="toggle-content panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-md" style="float: right;">
                                                <a data-toggle="modal" data-target="#modal-tambah-prestasi" class="modal-with-form btn btn-primary">Tambah prestasi <i class="fa fa-plus-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="table-prestasi" class="table table-bordered table-striped mb-none">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Penyelenggara</th>
                                                <th>Peringkat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section class="toggle">
                                <label> <i class="fa fa-graduation-cap"></i> Beasiswa</label>
                                <div class="toggle-content panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-md" style="float: right;">
                                                <a data-toggle="modal" data-target="#modal-tambah-beasiswa" class="modal-with-form btn btn-primary">Tambah beasiswa <i class="fa fa-plus-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="table-beasiswa" class="table table-bordered table-striped mb-none">
                                        <thead>
                                            <tr>
                                                <th>Keterangan/Nama</th>
                                                <th>Jenis</th>
                                                <th>Tanggal Mulai</th>
                                                <th>Tanggal selesai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <form id="form-registrasi" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <section class="toggle">
                                    <label> <i class="fa fa-edit"></i> Registrasi Peserta Didik / PPDB</label>
                                    <div class="toggle-content">
                                        <div class="panel-body">
                                            <input type="text" name="id" value="<?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>" hidden required>
                                            <h5 class="text-center"><strong><u>Pilihan Jurusan PPDB</u></strong></h5>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-md" style="float: right;">
                                                        <a data-toggle="modal" data-target="#modal-tambah-pilihan-jurusan" class="modal-with-form btn btn-primary">Tambah pilihan jurusan <i class="fa fa-plus-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table-pilihan-jurusan" class="table table-bordered table-striped mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Pilihan ke-</th>
                                                        <th>Keahlian/Jurusan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Diterima di Jurusan: </label>
                                                <div class="col-sm-8">
                                                    <select name="jurusan" id="diterima-jurusan" class="form-control" required>
                                                        <option value="<?php echo $pendaftaran_masuk->id_kompetensi_keahlian_diterima; ?>"><?php echo $pendaftaran_masuk->akronim_diterima; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Jalur PPDB yang Dipilih: </label>
                                                <div class="col-sm-8">
                                                    <select multiple name="jalur-ppdb-dipilih[]" id="jalur-ppdb-dipilih" class="form-control">
                                                        <?php if ($pilihan_jalur[0]['pilihan_jalur_ppdb'] == NULL) {
                                                            echo "<option></option>";
                                                        } else {
                                                            foreach ($pilihan_jalur[0]['pilihan_jalur_ppdb'] as $key) {
                                                                echo "<option selected='selected' value='" . $key['id_jenis_pendaftaran_masuk'] . "'>" . $key['jenis_pendaftaran_masuk'] . "</option>";
                                                            }
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Diterima PPDB Lewat Jalur: </label>
                                                <div class="col-sm-8">
                                                    <select name="jalur" id="diterima-jalur" class="form-control" required>
                                                        <option value="<?php echo $pendaftaran_masuk->id_diterima_ppdb_lewat_jalur; ?>"><?php echo $pendaftaran_masuk->diterima_ppdb_lewat_jalur; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Kode PIN Pendaftaran: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="kode-pin" value="<?php echo $pendaftaran_masuk->kode_pin_pendaftaran; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <h5 class="text-center"><strong><u>Nilai Rata-rata Raport SMP/MTs Semester 1 s.d 5</u></strong></h5>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb-md" style="float: right;">
                                                        <a data-toggle="modal" data-target="#modal-tambah-mean" class="modal-with-form btn btn-primary">Tambah nilai rata-rata raport <i class="fa fa-plus-square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table id="table-mean" class="table table-bordered table-striped mb-none">
                                                <thead>
                                                    <tr>
                                                        <th>Mata Pelajaran</th>
                                                        <th>Nilai</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Jenis Pendaftaran: </label>
                                                <div class="col-sm-8">
                                                    <select name="jenis" id="diterima-pendaftaran" class="form-control" required>
                                                        <option value="<?php echo $pendaftaran_masuk->id_jenis_pendaftaran; ?>"><?php echo $pendaftaran_masuk->jenis_pendaftaran; ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NIS: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nis" value="<?php echo $pendaftaran_masuk->nis; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">NPSN SMP atau MTs: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="npsn" value="<?php echo $pendaftaran_masuk->npsn_smp; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Akreditasi SMP atau MTs: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="akreditasi" value="<?php echo $pendaftaran_masuk->akreditasi_smp; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tahun Lulus SMP atau MTs: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="tahun" value="<?php echo $pendaftaran_masuk->tahun_lulus_smp; ?>" class="form-control" digits="true">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Tanggal Masuk Sekolah: </label>
                                                <div class="col-sm-8">
                                                    <input type="date" name="tanggal" value="<?php echo $pendaftaran_masuk->tanggal_masuk_sekolah; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Asal Sekolah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="asal-sekolah" value="<?php echo $pendaftaran_masuk->asal_sekolah; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor Peserta Ujian: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nomor-ujian" value="<?php echo $pendaftaran_masuk->nomor_peserta_ujian; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">No. Seri Ijazah: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ijazah" value="<?php echo $pendaftaran_masuk->no_seri_ijazah; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">No. Seri Khusus: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="nomor-khusus" value="<?php echo $pendaftaran_masuk->no_seri_khusus; ?>" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Nomor SKHUN: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="skhun" value="<?php echo $pendaftaran_masuk->nomor_skhun; ?>" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <button class="btn btn-primary" type="submit">Update </button>
                                        </footer>
                                    </div>
                                </section>
                            </form>
                            <section class="toggle">
                                <label> <i class="fa fa-university"></i> Data Proses Pembelajaran</label>
                                <div class="toggle-content panel-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-md" style="float: right;">
                                                <a data-toggle="modal" data-target="#modal-tambah-pembelajaran" class="modal-with-form btn btn-primary">Tambah proses pembelajaran <i class="fa fa-plus-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="table-pembelajaran" class="table table-bordered table-striped mb-none">
                                        <thead>
                                            <tr>
                                                <th>Tahun Ajaran</th>
                                                <th>Kelas</th>
                                                <th>Nomor Absen</th>
                                                <th>Wali Kelas</th>
                                                <th>Guru BK</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
        </div>
        <!-- end: page -->
    </section>
    </div>
    </section>

    <!--All Modal-->
    <div class="modal fade" id="modal-tambah-bantuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Bantuan Lainnya</h4>
                </div>
                <form id="form-tambah-bantuan" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama-program" class="col-form-label">Nama Program Bantuan</label>
                            <input type="text" class="form-control" name="nama-program" required>
                        </div>
                        <div class="form-group">
                            <label for="bukti" class="col-form-label">Bukti</label>
                            <input type="text" class="form-control" name="bukti" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-nomor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Nomor Telepon</h4>
                </div>
                <form id="form-tambah-nomor" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="no-telp" class="col-form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="no-telp" required>
                        </div>
                        <div class="form-group">
                            <label for="provider" class="col-form-label">Provider</label>
                            <select class="form-control" name="provider" id="provider-telp-siswa" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-medsos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Media Sosial</h4>
                </div>
                <form id="form-tambah-medsos" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="akun" class="col-form-label">Akun</label>
                            <input type="text" class="form-control" name="akun" required>
                        </div>
                        <div class="form-group">
                            <label for="medsos" class="col-form-label">Jenis Akun</label>
                            <select class="form-control" name="medsos" id="medsos-siswa" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-kontak-darurat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Kontak Darurat</h4>
                </div>
                <form id="form-tambah-kontak-darurat" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="hubungan" class="col-form-label">Hubungan dengan siswa</label>
                            <input type="text" class="form-control" name="hubungan" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor" class="col-form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" name="nomor" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-saudara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Saudara Kandung</h4>
                </div>
                <form id="form-tambah-saudara" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="anak-ke" class="col-form-label">Anak ke-</label>
                            <input type="text" class="form-control" name="anak-ke" required>
                        </div>
                        <div class="form-group">
                            <label for="no-telp" class="col-form-label">Nomor Telepon Seluler</label>
                            <input type="text" class="form-control" name="no-telp" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-control" name="gender" id="gender-saudara" required>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-prestasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Prestasi</h4>
                </div>
                <form id="form-tambah-prestasi" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="penyelenggara" class="col-form-label">Penyelenggara</label>
                            <input type="text" class="form-control" name="penyelenggara" required>
                        </div>
                        <div class="form-group">
                            <label for="bidang" class="col-form-label">Bidang</label>
                            <select class="form-control" name="bidang" id="tambah-bidang-prestasi" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tingkat" class="col-form-label">Tingkat</label>
                            <select class="form-control" name="tingkat" id="tambah-tingkat-prestasi" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="peringkat" class="col-form-label">Peringkat</label>
                            <input class="form-control" name="peringkat" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun" class="col-form-label">Tahun</label>
                            <input type="text" class="form-control" name="tahun" required digits="true">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-beasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Beasiswa</h4>
                </div>
                <form id="form-tambah-beasiswa" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="keterangan" class="col-form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" required>
                        </div>
                        <div class="form-group">
                            <label for="penyelenggara" class="col-form-label">Jenis</label>
                            <select class="form-control" name="jenis" id="tambah-jenis-beasiswa" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mulai" class="col-form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="mulai" required>
                        </div>
                        <div class="form-group">
                            <label for="selesai" class="col-form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="selesai" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-pilihan-jurusan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Pilihan Jurusan PPDB</h4>
                </div>
                <form id="form-tambah-pilihan-jurusan" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="pilihan-ke" class="col-form-label">Pilihan ke-</label>
                            <input type="text" class="form-control" name="pilihan-ke" required digits="true">
                        </div>
                        <div class="form-group">
                            <label for="kompetensi-keahlian" class="col-form-label">Kompetensi Keahlian</label>
                            <select class="form-control" name="kompetensi-keahlian" id="tambah-keahlian-pilihan-jurusan" required>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-mean" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Nilai Rata-rata Raport</h4>
                </div>
                <form id="form-tambah-mean" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="mata-pelajaran" class="col-form-label">Mata Pelajaran</label>
                            <select class="form-control" name="mata-pelajaran" id="tambah-mapel" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nilai" class="col-form-label">Nilai</label>
                            <input type="text" class="form-control" name="nilai" required digits="true">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-pembelajaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Data Proses Pembelajaran</h4>
                </div>
                <form id="form-tambah-pembelajaran" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="tahun-ajaran" class="col-form-label">Tahun Ajaran</label>
                            <select class="form-control" name="tahun-ajaran" id="tambah-tahun-pembelajaran" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-form-label">Kelas</label>
                            <select class="form-control" name="kelas" id="tambah-kelas-pembelajaran" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nomor" class="col-form-label">Nomor Absen</label>
                            <input type="text" class="form-control" name="nomor" required digits="true">
                        </div>
                        <div class="form-group">
                            <label for="wali" class="col-form-label">Wali Kelas</label>
                            <input type="text" class="form-control" name="wali" required>
                        </div>
                        <div class="form-group">
                            <label for="bk" class="col-form-label">Guru BK</label>
                            <input type="text" class="form-control" name="bk" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-detail-prestasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Detail Prestasi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="detail-nama-prestasi" readonly>
                    </div>
                    <div class="form-group">
                        <label for="penyelenggara" class="col-form-label">Penyelenggara</label>
                        <input type="text" class="form-control" id="detail-penyelenggara-prestasi" readonly>
                    </div>
                    <div class="form-group">
                        <label for="bidang" class="col-form-label">Bidang</label>
                        <input type="text" class="form-control" id="detail-bidang-prestasi" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tingkat" class="col-form-label">Tingkat</label>
                        <input type="text" class="form-control" id="detail-tingkat-prestasi" readonly>
                    </div>
                    <div class="form-group">
                        <label for="peringkat" class="col-form-label">Peringkat</label>
                        <input type="text" class="form-control" id="detail-peringkat-prestasi" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tahun" class="col-form-label">Tahun</label>
                        <input type="text" class="form-control" id="detail-tahun-prestasi" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-bantuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Bantuan Lainnya</h4>
                </div>
                <form id="form-edit-bantuan" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-bantuan" name="id-bantuan" hidden>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nama Program Bantuan</label>
                            <input type="text" class="form-control" id="edit-nama-program" name="nama-program" required>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Bukti</label>
                            <input type="text" class="form-control" id="edit-bukti" name="bukti" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-nomor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Nomor Telepon</h4>
                </div>
                <form id="form-edit-nomor" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-telp" name="id-telp" hidden>
                        <div class="form-group">
                            <label for="no-telp" class="col-form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="no-telp" id="edit-no-telp" required>
                        </div>
                        <div class="form-group">
                            <label for="provider" class="col-form-label">Provider</label>
                            <select class="form-control" name="provider" id="edit-provider-telp-siswa" required>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-medsos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Media Sosial</h4>
                </div>
                <form id="form-edit-medsos" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-medsos" name="id-medsos" hidden>
                        <div class="form-group">
                            <label for="akun" class="col-form-label">Akun</label>
                            <input type="text" class="form-control" name="akun" id="edit-akun" required>
                        </div>
                        <div class="form-group">
                            <label for="medsos" class="col-form-label">Jenis Akun</label>
                            <select class="form-control" name="medsos" id="edit-medsos-siswa" required>
                            </select>
                        </div>
                    </div>
                    <div class=" modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-kontak-darurat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Kontak Darurat</h4>
                </div>
                <form id="form-edit-kontak-darurat" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-kontak" name="id" hidden>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="edit-nama-kontak" required>
                        </div>
                        <div class="form-group">
                            <label for="hubungan" class="col-form-label">Hubungan dengan siswa</label>
                            <input type="text" class="form-control" name="hubungan" id="edit-hubungan-kontak" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor" class="col-form-label">Nomor Handphone</label>
                            <input type="text" class="form-control" name="nomor" id="edit-nomor-kontak" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-saudara" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Saudara Kandung</h4>
                </div>
                <form id="form-edit-saudara" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-saudara" name="id" hidden>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="edit-nama-saudara" required>
                        </div>
                        <div class="form-group">
                            <label for="anak-ke" class="col-form-label">Anak ke-</label>
                            <input type="text" class="form-control" name="anak-ke" id="edit-anak-saudara" required>
                        </div>
                        <div class="form-group">
                            <label for="no-telp" class="col-form-label">Nomor Telepon Seluler</label>
                            <input type="text" class="form-control" name="no-telp" id="edit-nomor-saudara" required>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-form-label">Gender</label>
                            <select class="form-control" name="gender" id="edit-gender-saudara" required>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-prestasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Prestasi</h4>
                </div>
                <form id="form-edit-prestasi" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-prestasi" name="id" hidden>
                        <div class="form-group">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="edit-nama-prestasi" required>
                        </div>
                        <div class="form-group">
                            <label for="penyelenggara" class="col-form-label">Penyelenggara</label>
                            <input type="text" class="form-control" name="penyelenggara" id="edit-penyelenggara-prestasi" required>
                        </div>
                        <div class="form-group">
                            <label for="bidang" class="col-form-label">Bidang</label>
                            <select class="form-control" name="bidang" id="edit-bidang-prestasi" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tingkat" class="col-form-label">Tingkat</label>
                            <select class="form-control" name="tingkat" id="edit-tingkat-prestasi" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="peringkat" class="col-form-label">Peringkat</label>
                            <input class="form-control" name="peringkat" id="edit-peringkat-prestasi" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun" class="col-form-label">Tahun</label>
                            <input type="text" class="form-control" name="tahun" id="edit-tahun-prestasi" required digits="true">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-beasiswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Beasiswa</h4>
                </div>
                <form id="form-edit-beasiswa" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-beasiswa" name="id" hidden>
                        <div class="form-group">
                            <label for="keterangan" class="col-form-label">Keterangan</label>
                            <input type="text" class="form-control" name="keterangan" id="edit-keterangan-beasiswa" required>
                        </div>
                        <div class="form-group">
                            <label for="penyelenggara" class="col-form-label">Jenis</label>
                            <select class="form-control" name="jenis" id="edit-jenis-beasiswa" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mulai" class="col-form-label">Tanggal Mulai</label>
                            <input type="date" class="form-control" name="mulai" id="edit-mulai-beasiswa" required>
                        </div>
                        <div class="form-group">
                            <label for="selesai" class="col-form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control" name="selesai" id="edit-selesai-beasiswa" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-pilihan-jurusan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Pilihan Jurusan PPDB</h4>
                </div>
                <form id="form-edit-pilihan-jurusan" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-keahlian-pilihan-jurusan-lama" name="id-komp" hidden required>
                        <div class="form-group">
                            <label for="pilihan-ke" class="col-form-label">Pilihan ke-</label>
                            <input type="text" class="form-control" name="pilihan-ke" id="edit-urutan-pilihan-jurusan" required digits="true">
                        </div>
                        <div class="form-group">
                            <label for="kompetensi-keahlian" class="col-form-label">Kompetensi Keahlian</label>
                            <select class="form-control" name="kompetensi-keahlian" id="edit-keahlian-pilihan-jurusan" required>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-mean" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Nilai Rata-rata Raport</h4>
                </div>
                <form id="form-edit-mean" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-mapel-lama" name="id-mapel" hidden required>
                        <div class="form-group">
                            <label for="mata-pelajaran" class="col-form-label">Mata Pelajaran</label>
                            <select class="form-control" name="mata-pelajaran" id="edit-mapel-mean" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nilai" class="col-form-label">Nilai</label>
                            <input type="text" class="form-control" name="nilai" id="edit-nilai-mean" required digits="true">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-edit-pembelajaran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Proses Pembelajaran</h4>
                </div>
                <form id="form-edit-pembelajaran" method="POST">
                    <div class="modal-body">
                        <input type="text" id="edit-id-pembelajaran" name="id" hidden required>
                        <div class="form-group">
                            <label for="tahun-ajaran" class="col-form-label">Tahun Ajaran</label>
                            <select class="form-control" name="tahun-ajaran" id="edit-tahun-pembelajaran" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-form-label">Kelas</label>
                            <select class="form-control" name="kelas" id="edit-kelas-pembelajaran" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nomor" class="col-form-label">Nomor Absen</label>
                            <input type="text" class="form-control" name="nomor" id="edit-nomor-pembelajaran" required digits="true">
                        </div>
                        <div class="form-group">
                            <label for="wali" class="col-form-label">Wali Kelas</label>
                            <input type="text" class="form-control" name="wali" id="edit-wali-pembelajaran" required>
                        </div>
                        <div class="form-group">
                            <label for="bk" class="col-form-label">Guru BK</label>
                            <input type="text" class="form-control" name="bk" id="edit-bk-pembelajaran" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
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
    <!--end: All Modal-->

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
    <script src="<?php echo base_url('/'); ?>assets/vendor/select2/js/select2.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/pnotify/pnotify.custom.js"></script>

    <!-- JS -->
    <script type="text/javascript" src="<?php echo base_url('/'); ?>assets/js/select2.js"></script>
    <script type="text/javascript" src="<?php echo base_url('/'); ?>assets/js/sweetalert2.js"></script>
    <script type="text/javascript" src="<?php echo base_url('/'); ?>assets/js/fetch.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url('/'); ?>assets/js/theme.init.js"></script>

    <script>
        $('.modal').on('hidden.bs.modal', function() {
            $('#form-tambah-bantuan').trigger('reset');
            $('#form-tambah-nomor').trigger('reset');
            $('#form-tambah-kontak-darurat').trigger('reset');
            $('#form-tambah-saudara').trigger('reset');
            $('#form-edit-bantuan').trigger('reset');
            $('#form-edit-nomor').trigger('reset');
            $('#form-edit-kontak-darurat').trigger('reset');
            $('#form-edit-saudara').trigger('reset');
        })

        function enable_disable_pip(option) {
            if (option == 0) {
                $('input[name="bank"], select[name="alasan-pip"], input[name="kacab"], input[name="rekening"], input[name="nama-rekening"]').attr('disabled', true);
            } else {
                $('input[name="bank"], select[name="alasan-pip"], input[name="kacab"], input[name="rekening"], input[name="nama-rekening"]').attr('disabled', false);
            }
        }
        enable_disable_pip(<?php echo ($bantuan_tidak_mampu[0]['id_pip'] === NULL) ? 0 : 1; ?>);
        $('#layak-pip').on('change', () => {
            let option = $('#layak-pip').val();

            enable_disable_pip(option);
        })

        /**Call All Select2 */
        select2_get('#siswa-gender, #gender-saudara, #edit-gender-saudara', '<?php echo base_url('referensi_data/gender') ?>', "Pilih Jenis Kelamin");
        select2_get('#siswa-kelas', '<?php echo base_url('referensi_data/kelas') ?>', "Pilih Kelas");
        select2_get('#siswa-jurusan, #tambah-keahlian-pilihan-jurusan, #edit-keahlian-pilihan-jurusan, #diterima-jurusan', '<?php echo base_url('referensi_data/jurusan') ?>', "Pilih Jurusan");
        select2_get('#siswa-agama', '<?php echo base_url('referensi_data/agama') ?>', "Pilih Agama");
        select2_get('#tempat-tinggal, #domisili-tempat-tinggal, #tempat-tinggal-ayah, #tempat-tinggal-ibu, #tempat-tinggal-wali', '<?php echo base_url('referensi_data/tempat_tinggal') ?>', "Pilih Tempat Tinggal");
        select2_get('#siswa-kebutuhan-khusus, #ayah-kebutuhan-khusus, #ibu-kebutuhan-khusus, #wali-kebutuhan-khusus', '<?php echo base_url('referensi_data/berkebutuhan_khusus') ?>', "Pilih Kebutuhan Khusus");
        select2_get('#transportasi', '<?php echo base_url('referensi_data/transportasi') ?>', "Pilih Transportasi");
        select2_get('#tambah-mapel, #edit-mapel-mean', '<?php echo base_url('referensi_data/mata_pelajaran') ?>', "Pilih Mata Pelajaran");
        select2_get('#alasan-pip', '<?php echo base_url('referensi_data/alasan_pip') ?>', "Pilih Alasan Layak PIP");
        select2_get('#tambah-kelas-pembelajaran, #edit-kelas-pembelajaran', '<?php echo base_url('referensi_data/kelas') ?>', "Pilih Kelas");
        select2_get('#tambah-tahun-pembelajaran, #edit-tahun-pembelajaran', '<?php echo base_url('referensi_data/tahun_ajaran') ?>', "Pilih Tahun Ajaran");
        select2_get('#jalur-ppdb-dipilih, #diterima-jalur, #diterima-pendaftaran', '<?php echo base_url('referensi_data/jenis_masuk') ?>', "Pilih Jalur Pendaftaran Masuk");
        select2_get('#tambah-jenis-beasiswa, #edit-jenis-beasiswa', '<?php echo base_url('referensi_data/jenis_beasiswa') ?>', "Pilih Jenis Beasiswa");
        select2_get('#edit-bidang-prestasi, #tambah-bidang-prestasi', '<?php echo base_url('referensi_data/bidang_prestasi') ?>', "Pilih Bidang Prestasi");
        select2_get('#edit-tingkat-prestasi, #tambah-tingkat-prestasi', '<?php echo base_url('referensi_data/tingkat_prestasi') ?>', "Pilih Tingkat Prestasi");
        select2_get('#medsos-siswa, #edit-medsos-siswa', '<?php echo base_url('referensi_data/media_sosial') ?>', "Pilih Jenis Media Sosial");
        select2_get('#provider-whatsapp-siswa, #provider-telp-siswa, #edit-provider-telp-siswa', '<?php echo base_url('referensi_data/provider') ?>', "Pilih Provider");
        select2_get('#pendidikan-ayah, #pendidikan-ibu, #pendidikan-wali', '<?php echo base_url('referensi_data/pendidikan') ?>', "Pilih Pendidikan Terakhir");
        select2_get('#pekerjaan-ayah, #pekerjaan-ibu, #pekerjaan-wali', '<?php echo base_url('referensi_data/pekerjaan') ?>', "Pilih Pekerjaan");
        select2_get('#penghasilan-ayah, #penghasilan-ibu, #penghasilan-wali', '<?php echo base_url('referensi_data/penghasilan') ?>', "Pilih Penghasilan per Bulan");

        get_desa(<?php echo $alamat_dan_domisili->id_kecamatan; ?>, $('#desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        get_kec($('#kecamatan'), '<?php echo base_url('referensi_data/kecamatan') ?>');
        $('#kecamatan').on("change", function() {
            var id_kec = $(this).val();
            $('#desa').val('');
            get_desa(id_kec, $('#desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        })

        get_desa(<?php echo (is_null($alamat_dan_domisili->domisili_id_kecamatan) ? 3665 : $alamat_dan_domisili->domisili_id_kecamatan); ?>, $('#domisili-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        get_kec($('#domisili-kecamatan'), '<?php echo base_url('referensi_data/kecamatan') ?>');
        $('#domisili-kecamatan').on("change", function() {
            var id_kec = $(this).val();
            $('#domisili-desa').val('');
            get_desa(id_kec, $('#domisili-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        })

        get_desa(<?php echo (is_null($ayah[0]['id_kecamatan_ayah']) ? 3665 : $ayah[0]['id_kecamatan_ayah']); ?>, $('#ayah-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        get_kec($('#ayah-kecamatan'), '<?php echo base_url('referensi_data/kecamatan') ?>');
        $('#ayah-kecamatan').on("change", function() {
            var id_kec = $(this).val();
            $('#ayah-desa').val('');
            get_desa(id_kec, $('#ayah-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        })

        get_desa(<?php echo (is_null($ibu[0]['id_kecamatan_ibu']) ? 3665 : $ibu[0]['id_kecamatan_ibu']); ?>, $('#ibu-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        get_kec($('#ibu-kecamatan'), '<?php echo base_url('referensi_data/kecamatan') ?>');
        $('#ibu-kecamatan').on("change", function() {
            var id_kec = $(this).val();
            $('#ibu-desa').val('');
            get_desa(id_kec, $('#ibu-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        })

        get_desa(<?php echo (is_null($wali[0]['id_kecamatan_wali']) ? 3665 : $wali[0]['id_kecamatan_wali']); ?>, $('#wali-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        get_kec($('#wali-kecamatan'), '<?php echo base_url('referensi_data/kecamatan') ?>');
        $('#wali-kecamatan').on("change", function() {
            var id_kec = $(this).val();
            $('#wali-desa').val('');
            get_desa(id_kec, $('#wali-desa'), '<?php echo base_url('referensi_data/kel_desa') ?>');
        })
        /**END */

        /**CRUD Bantuaun Lainnya */
        var tabel_bantuan_lainnya = $('#table-bantuan-lainnya').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/bantuan_siswa') ?>",
                dataType: "JSON",
                data: {
                    id_siswa: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "nama_program"
                },
                {
                    data: "bukti"
                },
                {
                    data: "id_bantuan_tidak_mampu",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Data Bantuan" class="item-edit" href="javascript:void(0)" data-id="' + row.id_bantuan_tidak_mampu + '" data-program="' + row.nama_program + '" data-bukti="' + row.bukti + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Data Bantuan" href="javascript:void(0)" onclick="hapus_bantuan(' + row.id_bantuan_tidak_mampu + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_bantuan(params) {
            let formData = new FormData();
            formData.append('id_bantuan', params);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data bantuan yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_bantuan_siswa'); ?>', formData, tabel_bantuan_lainnya, 'Bantuan Lainnya');
        }

        $('#form-tambah-bantuan').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-bantuan'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_bantuan_siswa'); ?>", formData, '#modal-tambah-bantuan', tabel_bantuan_lainnya, 'Bantuan Lainnya');
            }
        })

        $('#table-bantuan-lainnya').on('click', '.item-edit', function() {
            $('#edit-bukti').val($(this).data('bukti'));
            $('#edit-nama-program').val($(this).data('program'));
            $('#edit-id-bantuan').val($(this).data('id'));
            $('#modal-edit-bantuan').modal('show');
        })
        $('#form-edit-bantuan').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-bantuan'));

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_bantuan_siswa'); ?>", formData, '#modal-edit-bantuan', tabel_bantuan_lainnya, 'Bantuan Lainnya');
            }
        })
        /**END */

        /**CRUD Nomor Handphone */
        var table_nomor_telp = $('#table-nomor-telp').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/telepon_siswa') ?>",
                dataType: "JSON",
                data: {
                    id_siswa: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "nomor_telepon_seluler"
                },
                {
                    data: "provider"
                },
                {
                    data: "id_nomor_telepon_seluler",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Nomor Telepon" class="item-edit" href="javascript:void(0)" data-id="' + row.id_nomor_telepon_seluler + '" data-nomor="' + row.nomor_telepon_seluler + '" data-provider="' + row.provider + '" data-id-provider="' + row.provider_id_provider + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Nomor Temepon" href="javascript:void(0)" onclick="hapus_nomor(' + row.id_nomor_telepon_seluler + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_nomor(params) {
            let formData = new FormData();
            formData.append('id_nomor', params);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan nomor telepon yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_nomor_siswa'); ?>', formData, table_nomor_telp, 'Nomor Telepon Siswa');
        }

        $('#form-tambah-nomor').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-nomor'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_nomor_siswa'); ?>", formData, '#modal-tambah-nomor', table_nomor_telp, 'Nomor Telepon Siswa');
            }
        })

        $('#table-nomor-telp').on('click', '.item-edit', function() {
            $('#edit-provider-telp-siswa').html('');
            let newOption = new Option($(this).data('provider'), $(this).data('id-provider'), false, false);
            $('#edit-provider-telp-siswa').append(newOption).trigger('change');
            $('#edit-no-telp').val($(this).data('nomor'));
            $('#edit-id-telp').val($(this).data('id'));
            $('#modal-edit-nomor').modal('show');
        })
        $('#form-edit-nomor').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-nomor'));

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_nomor_siswa'); ?>", formData, '#modal-edit-nomor', table_nomor_telp, 'Nomor Telepon Siswa');
            }
        })
        /**END */

        /**CRUD Media Sosial */
        var table_medsos = $('#table-media-sosial').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/media_sosial_siswa') ?>",
                dataType: "JSON",
                data: {
                    id_siswa: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "akun"
                },
                {
                    data: "media_sosial"
                },
                {
                    data: "media_sosial_id_media_sosial",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Media Sosial" class="item-edit" href="javascript:void(0)" data-id="' + row.media_sosial_id_media_sosial + '" data-akun="' + row.akun + '" data-medsos="' + row.media_sosial + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Media Sosial" href="javascript:void(0)" onclick="hapus_medsos(' + row.media_sosial_id_media_sosial + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_medsos(params) {
            let formData = new FormData();
            formData.append('id', params);
            formData.append('id-siswa', <?php echo $data_pribadi[0]['id_siswa']; ?>);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data media sosial yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_medsos_siswa'); ?>', formData, table_medsos, 'Media Sosial');
        }

        $('#form-tambah-medsos').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-medsos'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_medsos_siswa'); ?>", formData, '#modal-tambah-medsos', table_medsos, 'Media Sosial');
            }
        })

        $('#table-media-sosial').on('click', '.item-edit', function() {
            $('#edit-medsos-siswa').html('');
            let newOption = new Option($(this).data('medsos'), $(this).data('id'), false, false);
            $('#edit-medsos-siswa').append(newOption).trigger('change');
            $('#edit-akun').val($(this).data('akun'));
            $('#edit-id-medsos').val($(this).data('id'));
            $('#modal-edit-medsos').modal('show');
        })
        $('#form-edit-medsos').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-medsos'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_medsos_siswa'); ?>", formData, '#modal-edit-medsos', table_medsos, 'Media Sosial');
            }
        })
        /**END */

        /**CRUD Kontak Darurat */
        var table_kontak_darurat = $('#table-kontak-darurat').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/kontak_darurat_siswa') ?>",
                dataType: "JSON",
                data: {
                    id_siswa: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "nama"
                },
                {
                    data: "hubungan_peserta_didik"
                },
                {
                    data: "nomor_telepon_seluler"
                },
                {
                    data: "id_kontak_darurat",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Kontak Darurat" class="item-edit" href="javascript:void(0)" data-id="' + row.id_kontak_darurat + '" data-nama="' + row.nama + '" data-hubungan="' + row.hubungan_peserta_didik + '" data-nomor="' + row.nomor_telepon_seluler + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Kontak Darurat" href="javascript:void(0)" onclick="hapus_kontak_darurat(' + row.id_kontak_darurat + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_kontak_darurat(params) {
            let formData = new FormData();
            formData.append('id', params);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data kontak darurat yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_kontak_darurat_siswa'); ?>', formData, table_kontak_darurat, 'Kontak Darurat');
        }

        $('#form-tambah-kontak-darurat').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-kontak-darurat'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_kontak_darurat_siswa'); ?>", formData, '#modal-tambah-kontak-darurat', table_kontak_darurat, 'Kontak Darurat');
            }
        })

        $('#table-kontak-darurat').on('click', '.item-edit', function() {
            $('#edit-nama-kontak').val($(this).data('nama'));
            $('#edit-hubungan-kontak').val($(this).data('hubungan'));
            $('#edit-nomor-kontak').val($(this).data('nomor'));
            $('#edit-id-kontak').val($(this).data('id'));
            $('#modal-edit-kontak-darurat').modal('show');
        })
        $('#form-edit-kontak-darurat').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-kontak-darurat'));

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_kontak_darurat_siswa'); ?>", formData, '#modal-edit-kontak-darurat', table_kontak_darurat, 'Kontak Darurat');
            }
        })
        /**END */

        /**CRUD Saudara Kandung */
        var table_saudara = $('#table-saudara').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/saudara_siswa') ?>",
                dataType: "JSON",
                data: {
                    id_siswa: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "nama"
                },
                {
                    data: "anak_ke"
                },
                {
                    data: "nomor_telepon_seluler"
                },
                {
                    data: "gender"
                },
                {
                    data: "id_saudara_kandung",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Saudara Kandung" class="item-edit" href="javascript:void(0)" data-id="' + row.id_saudara_kandung + '" data-nama="' + row.nama + '" data-anak="' + row.anak_ke + '" data-nomor="' + row.nomor_telepon_seluler + '" data-id-gender="' + row.gender_id_gender + '" data-gender="' + row.gender + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Saudara Kandung" href="javascript:void(0)" onclick="hapus_saudara(' + row.id_saudara_kandung + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_saudara(params) {
            let formData = new FormData();
            formData.append('id', params);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data saudara siswa yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_saudara_siswa'); ?>', formData, table_saudara, 'Saudara Kandung');
        }

        $('#form-tambah-saudara').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-saudara'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_saudara_siswa'); ?>", formData, '#modal-tambah-saudara', table_saudara, 'Saudara Kandung');
            }
        })

        $('#table-saudara').on('click', '.item-edit', function() {
            $('#edit-gender-saudara').html('');
            let newOption = new Option($(this).data('gender'), $(this).data('id-gender'), false, false);
            $('#edit-gender-saudara').append(newOption).trigger('change');
            $('#edit-nama-saudara').val($(this).data('nama'));
            $('#edit-anak-saudara').val($(this).data('anak'));
            $('#edit-nomor-saudara').val($(this).data('nomor'));
            $('#edit-id-saudara').val($(this).data('id'));
            $('#modal-edit-saudara').modal('show');
        })
        $('#form-edit-saudara').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-saudara'));

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_saudara_siswa'); ?>", formData, '#modal-edit-saudara', table_saudara, 'Saudara Siswa');
            }
        })
        /**END */

        /**CRUD Prestasi */
        var table_prestasi = $('#table-prestasi').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/prestasi_siswa') ?>",
                dataType: "JSON",
                data: {
                    id_siswa: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "nama"
                },
                {
                    data: "penyelenggara"
                },
                {
                    data: "peringkat"
                },
                {
                    data: "id_prestasi",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Detail Prestasi" href="javascript:void(0)" onclick="detail_prestasi(' + row.id_prestasi + ')"><i class="fa fa-info"></i></a>' +
                            '<a data-toggle="tooltip" title="Edit Prestasi" href="javascript:void(0)" onclick="edit_prestasi(' + row.id_prestasi + ')"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Prestasi" href="javascript:void(0)" onclick="hapus_prestasi(' + row.id_prestasi + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function detail_prestasi(params) {
            let formData = new FormData();
            formData.append('id', params);

            const arrays = fetch_get_modal("<?php echo base_url('admin/data_siswa/get_row_prestasi_siswa'); ?>", formData);
            const getPromise = () => {
                arrays.then((a) => {
                    $('#detail-bidang-prestasi').val(a.bidang_prestasi);
                    $('#detail-nama-prestasi').val(a.nama);
                    $('#detail-penyelenggara-prestasi').val(a.penyelenggara);
                    $('#detail-peringkat-prestasi').val(a.peringkat);
                    $('#detail-tahun-prestasi').val(a.tahun);
                    $('#detail-tingkat-prestasi').val(a.tingkat_prestasi);
                    $('#modal-detail-prestasi').modal('show');
                })
            }

            getPromise();
        }

        function edit_prestasi(params) {
            let formData = new FormData();
            formData.append('id', params);

            const arrays = fetch_get_modal("<?php echo base_url('admin/data_siswa/get_row_prestasi_siswa'); ?>", formData);
            const getPromise = () => {
                arrays.then((a) => {
                    $('#edit-bidang-prestasi').html('');
                    $('#edit-tingkat-prestasi').html('');
                    let bidang = new Option(a.bidang_prestasi, a.id_bidang_prestasi, false, false);
                    let tingkat = new Option(a.tingkat_prestasi, a.id_tingkat_prestasi, false, false);
                    $('#edit-bidang-prestasi').append(bidang).trigger('change');
                    $('#edit-nama-prestasi').val(a.nama);
                    $('#edit-id-prestasi').val(a.id_prestasi);
                    $('#edit-penyelenggara-prestasi').val(a.penyelenggara);
                    $('#edit-peringkat-prestasi').val(a.peringkat);
                    $('#edit-tahun-prestasi').val(a.tahun);
                    $('#edit-tingkat-prestasi').append(tingkat).trigger('change');
                    $('#modal-edit-prestasi').modal('show');
                })
            }

            getPromise();
        }

        function hapus_prestasi(params) {
            let formData = new FormData();
            formData.append('id', params);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data prestasi siswa yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_prestasi_siswa'); ?>', formData, table_prestasi, 'Prestasi Siswa');
        }

        $('#form-tambah-prestasi').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-prestasi'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_prestasi_siswa'); ?>", formData, '#modal-tambah-prestasi', table_prestasi, 'Prestasi Siswa');
            }
        })

        $('#form-edit-prestasi').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-prestasi'));

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_prestasi_siswa'); ?>", formData, '#modal-edit-prestasi', table_prestasi, 'Prestasi Siswa');
            }
        })
        /**END */

        /**CRUD Beasiswa */
        var table_beasiswa = $('#table-beasiswa').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/beasiswa_siswa') ?>",
                dataType: "JSON",
                data: {
                    id_siswa: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "keterangan"
                },
                {
                    data: "jenis_beasiswa"
                },
                {
                    data: "tanggal_mulai"
                },
                {
                    data: "tanggal_selesai"
                },
                {
                    data: "id_beasiswa",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Beasiswa" class="item-edit" href="javascript:void(0)" data-id="' + row.id_beasiswa + '" data-id-jenis="' + row.id_jenis_beasiswa + '" data-jenis="' + row.jenis_beasiswa + '" data-keterangan="' + row.keterangan + '" data-mulai="' + row.tanggal_mulai + '" data-selesai="' + row.tanggal_selesai + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Beasiswa" href="javascript:void(0)" onclick="hapus_beasiswa(' + row.id_beasiswa + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_beasiswa(params) {
            let formData = new FormData();
            formData.append('id', params);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data beasiswa yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_beasiswa_siswa'); ?>', formData, table_beasiswa, 'Beasiswa');
        }

        $('#form-tambah-beasiswa').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-beasiswa'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_beasiswa_siswa'); ?>", formData, '#modal-tambah-beasiswa', table_beasiswa, 'Beasiswa');
            }
        })

        $('#table-beasiswa').on('click', '.item-edit', function() {
            $('#edit-jenis-beasiswa').html('');
            let newOption = new Option($(this).data('jenis'), $(this).data('id-jenis'), false, false);
            $('#edit-jenis-beasiswa').append(newOption).trigger('change');
            $('#edit-keterangan-beasiswa').val($(this).data('keterangan'));
            $('#edit-mulai-beasiswa').val($(this).data('mulai'));
            $('#edit-selesai-beasiswa').val($(this).data('selesai'));
            $('#edit-id-beasiswa').val($(this).data('id'));
            $('#modal-edit-beasiswa').modal('show');
        })

        $('#form-edit-beasiswa').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-beasiswa'));

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_beasiswa_siswa'); ?>", formData, '#modal-edit-beasiswa', table_beasiswa, 'Beasiswa');
            }
        })
        /**END */

        /**CRUD Pilihan Jurusan PPDB*/
        var table_pilihan_jurusan = $('#table-pilihan-jurusan').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/pilihan_jurusan_siswa') ?>",
                dataType: "JSON",
                data: {
                    id: <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>
                }
            },
            columns: [{
                    data: "pilihan_ke"
                },
                {
                    data: "kompetensi_keahlian"
                },
                {
                    data: "id_pendaftaran_masuk",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Pilihan Jurusan" class="item-edit" href="javascript:void(0)" data-id-keahlian="' + row.id_kompetensi_keahlian + '" data-keahlian="' + row.akronim + '" data-pilihan="' + row.pilihan_ke + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Pilihan Jurusan" href="javascript:void(0)" onclick="hapus_pilihan_jurusan(' + row.id_kompetensi_keahlian + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_pilihan_jurusan(params) {
            let formData = new FormData();
            formData.append('id-komp', params);
            formData.append('id-pend', <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data pilihan jurusan yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_pilihan_jurusan_siswa'); ?>', formData, table_pilihan_jurusan, 'Pilihan Jurusan PPDB');
        }

        $('#form-tambah-pilihan-jurusan').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-pilihan-jurusan'));
                formData.append('id', <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_pilihan_jurusan_siswa'); ?>", formData, '#modal-tambah-pilihan-jurusan', table_pilihan_jurusan, 'Pilihan Jurusan PPDB');
            }
        })

        $('#table-pilihan-jurusan').on('click', '.item-edit', function() {
            $("#edit-keahlian-pilihan-jurusan").html("")
            let newOption = new Option($(this).data('keahlian'), $(this).data('id-keahlian'), false, false);
            $('#edit-keahlian-pilihan-jurusan').append(newOption).trigger('change');
            $('#edit-urutan-pilihan-jurusan').val($(this).data('pilihan'));
            $('#edit-keahlian-pilihan-jurusan-lama').val($(this).data('id-keahlian'));
            $('#modal-edit-pilihan-jurusan').modal('show');
        })

        $('#form-edit-pilihan-jurusan').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-pilihan-jurusan'));
                formData.append('id', <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_pilihan_jurusan_siswa'); ?>", formData, '#modal-edit-pilihan-jurusan', table_pilihan_jurusan, 'Pilihan Jurusan PPDB');
            }
        })
        /**END */

        /**CRUD Nilai Rata-rata */
        var table_mean = $('#table-mean').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/mean_siswa') ?>",
                dataType: "JSON",
                data: {
                    id: <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>
                }
            },
            columns: [{
                    data: "mata_pelajaran"
                },
                {
                    data: "nilai"
                },
                {
                    data: "id_mata_pelajaran",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Nilai Rata-rata" class="item-edit" href="javascript:void(0)" data-id-mapel="' + row.id_mata_pelajaran + '" data-mapel="' + row.mata_pelajaran + '" data-nilai="' + row.nilai + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Nilai Rata-rata Jurusan" href="javascript:void(0)" onclick="hapus_mean(' + row.id_mata_pelajaran + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_mean(params) {
            let formData = new FormData();
            formData.append('id-mapel', params);
            formData.append('id-pend', <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data nilai rata-rata yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_mean_siswa'); ?>', formData, table_mean, 'Nilai Rata-rata Raport');
        }

        $('#form-tambah-mean').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-mean'));
                formData.append('id', <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_mean_siswa'); ?>", formData, '#modal-tambah-mean', table_mean, 'Nilai Rata-rata Raport');
            }
        })

        $('#table-mean').on('click', '.item-edit', function() {
            $("#edit-mapel-mean").html("")
            let newOption = new Option($(this).data('mapel'), $(this).data('id-mapel'), false, false);
            $('#edit-mapel-mean').append(newOption).trigger('change');
            $('#edit-mapel-lama').val($(this).data('id-mapel'));
            $('#edit-nilai-mean').val($(this).data('nilai'));
            $('#modal-edit-mean').modal('show');
        })

        $('#form-edit-mean').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-mean'));
                formData.append('id', <?php echo $pendaftaran_masuk->id_pendaftaran_masuk; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_mean_siswa'); ?>", formData, '#modal-edit-mean', table_mean, 'Nilai Rata-rata Raport');
            }
        })
        /**END */

        /**CRUD Proses Pembelajaran */
        var table_pembelajaran = $('#table-pembelajaran').DataTable({
            ajax: {
                method: "POST",
                url: "<?php echo base_url('admin/data_siswa/pembelajaran_siswa') ?>",
                dataType: "JSON",
                data: {
                    id: <?php echo $data_pribadi[0]['id_siswa']; ?>
                }
            },
            columns: [{
                    data: "id_tahun_ajaran",
                    render: (data, type, row) => {
                        return row.tahun1 + "/" + row.tahun2;
                    }
                },
                {
                    data: "kelas"
                },
                {
                    data: "nomor_absen"
                },
                {
                    data: "wali_kelas"
                },
                {
                    data: "guru_bk"
                },
                {
                    data: "id_proses_pembelajaran",
                    render: (data, type, row) => {
                        return '<a data-toggle="tooltip" title="Edit Nilai Rata-rata" class="item-edit" href="javascript:void(0)" data-id="' + row.id_proses_pembelajaran + '" data-id-kelas="' + row.id_kelas + '" data-kelas="' + row.kelas + '" data-id-tahun="' + row.id_tahun_ajaran + '" data-tahun="' + row.tahun1 + ' / ' + row.tahun2 + '" data-nomor="' + row.nomor_absen + '" data-wali="' + row.wali_kelas + '" data-bk="' + row.guru_bk + '"><i class="fa fa-edit"></i></a>' +
                            '<a data-toggle="tooltip" title="Hapus Nilai Rata-rata Jurusan" href="javascript:void(0)" onclick="hapus_pembelajaran(' + row.id_proses_pembelajaran + ')"><i class="fa fa-trash-o"></i></a>';
                    },
                    className: "actions"
                }
            ],
            bSort: false,
            bLengthChange: false
        })

        function hapus_pembelajaran(params) {
            let formData = new FormData();
            formData.append('id', params);

            sweetalert2_delete('Anda tidak akan dapat mengembalikan data proses pembelajaran yang telah dihapus!', '<?php echo base_url('admin/data_siswa/hapus_pembelajaran_siswa'); ?>', formData, table_pembelajaran, 'Data Proses Pembelajaran');
        }

        $('#form-tambah-pembelajaran').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-tambah-pembelajaran'));
                formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/tambah_pembelajaran_siswa'); ?>", formData, '#modal-tambah-pembelajaran', table_pembelajaran, 'Data Proses Pembelajaran');
            }
        })

        $('#table-pembelajaran').on('click', '.item-edit', function() {
            $("#edit-tahun-pembelajaran").html("")
            $("#edit-kelas-pembelajaran").html("")
            let tahun = new Option($(this).data('tahun'), $(this).data('id-tahun'), false, false);
            let kelas = new Option($(this).data('kelas'), $(this).data('id-kelas'), false, false);
            $('#edit-tahun-pembelajaran').append(tahun).trigger('change');
            $('#edit-kelas-pembelajaran').append(kelas).trigger('change');
            $('#edit-nomor-pembelajaran').val($(this).data('nomor'));
            $('#edit-wali-pembelajaran').val($(this).data('wali'));
            $('#edit-bk-pembelajaran').val($(this).data('bk'));
            $('#edit-id-pembelajaran').val($(this).data('id'));
            $('#modal-edit-pembelajaran').modal('show');
        })

        $('#form-edit-pembelajaran').validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-edit-pembelajaran'));

                custom_fetch('#modal_loading', "<?php echo base_url('admin/data_siswa/edit_pembelajaran_siswa'); ?>", formData, '#modal-edit-pembelajaran', table_pembelajaran, 'Data Proses Pembelajaran');
            }
        })
        /**END */

        /**Delete Data */
        $("#form-domisili").on('click', '.btn-delete', () => {
            let formData = new FormData();
            formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

            sweetalert2_delete("Anda tidak akan dapat mengembalikan Data Domisili yang telah dihapus!", "<?php echo base_url('admin/data_siswa/hapus_domisili') ?>", formData, tabel_bantuan_lainnya, 'Data Domisili');
        })

        $("#form-wali").on('click', '.btn-delete', () => {
            let formData = new FormData();
            formData.append('id', <?php echo $data_pribadi[0]['id_siswa']; ?>);

            sweetalert2_delete("Anda tidak akan dapat mengembalikan Data Wali yang telah dihapus!", "<?php echo base_url('admin/data_siswa/hapus_wali') ?>", formData, tabel_bantuan_lainnya, 'Data Wali');
        })
        /**END */

        /**Validate Form */
        $("#form-data-pribadi").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-data-pribadi'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_data_pribadi") ?>', formData, 'Data Pribadi');
            }
        })

        $("#form-alamat-tinggal").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-alamat-tinggal'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_alamat_tinggal") ?>', formData, 'Tempat Tinggal Siswa');
            }
        })

        $("#form-domisili").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-domisili'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_domisili") ?>', formData, 'Domisili Siswa');
            }
        })

        $("#form-bantuan").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-bantuan'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_bantuan") ?>', formData, 'Bantuan Siswa');
            }
        })

        $("#form-ayah").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-ayah'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_ayah") ?>', formData, 'Data Ayah');
            }
        })

        $("#form-ibu").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-ibu'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_ibu") ?>', formData, 'Data Ibu');
            }
        })

        $("#form-wali").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-wali'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_wali") ?>', formData, 'Data Wali');
            }
        })

        $("#form-kontak").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-kontak'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_kontak") ?>', formData, 'Kontak Siswa');
            }
        })

        $("#form-periodik").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-periodik'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_periodik") ?>', formData, 'Data Periodik');
            }
        })

        $("#form-registrasi").validate({
            submitHandler: () => {
                let formData = new FormData(document.getElementById('form-registrasi'));

                fetch_save_form('<?php echo base_url("admin/data_siswa/edit_registrasi") ?>', formData, 'Registrasi Peserta Didik');
            }
        })
        /**END */
    </script>

</body>

</html>