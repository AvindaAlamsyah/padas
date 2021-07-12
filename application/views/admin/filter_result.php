<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Filter</title>
    <link rel="stylesheet" href="<?php echo base_url('/'); ?>assets/vendor/bootstrap/css/bootstrap.css" />
</head>

<body>
    <?php  if(isset($status)) echo '<p>'.$status.'</p>'; if(isset($query)) echo '<p>'.$query.'</p>'; ?>
    <?php if(isset($data) && !empty($data) ) {?>
    <div class="container" >
        <div class="row">
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

        </div>
    </div>
    <?php } else {echo '</h1>DATA KOSONG</h1>';} ?>

    <script src="<?php echo base_url('/'); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url('/'); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
</body>

</html>