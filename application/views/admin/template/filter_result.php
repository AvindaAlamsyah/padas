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
                            <?php echo '<p>' . $status . '</p>';
                            echo '<p>' . $query . '</p>'; ?>
                            <?php if (isset($data) && !empty($data)) { ?>
                                <button class="btn btn-success">export</button>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <?php foreach ($data[0] as $key => $value) { ?>
                                                    <th><?= $key ?></th>
                                                <?php } ?>
                                            <tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($data as $key => $value) {
                                                echo '<tr>';
                                                foreach ($value as $key => $value) { ?>
                                                    <td><?= $value ?></td>
                                            <?php }
                                                echo '</tr>';
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>

                            <?php } else {
                                echo "tidak ada data";
                            } ?>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                            </form>
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
</body>

</html>