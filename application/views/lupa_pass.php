<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Robotindo">
    <meta name="description" content="Lupa Password Siswa | Pangkalan Data Siswa SMK Negeri 1 Geger">
    <meta name="keywords" content="Login Siswa Padas, Login Siswa Padas Geger, Login Siswa Padas SMK 1 Geger, Login Padas, Login Pangkalan Data Siswa, Login Siswa Pangkalan Data Siswa, Login Siswa SMK Negeri 1 Geger, Login Siswa SMK 1 Geger, Pangkalan Data Siswa SMK Negeri 1 Geger, Pangkalan Data Siswa SMK 1 Geger">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Lupa Password Siswa | Pangkalan Data Siswa SMK Negeri 1 Geger</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/'); ?>css/my-login.css">
</head>

<body class="my-login-page">
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-md-center h-100">
                <div class="card-wrapper">
                    <div class="brand">
                        <img src="<?php echo base_url('assets/'); ?>img/logo.jpg" alt="logo padas">
                    </div>
                    <div class="card fat">
                        <div class="card-body">
                            <h4 class="card-title">Lupa Password</h4>
                            <?php
                            if ($this->session->flashdata('error_lupa')) {
                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
								' . $this->session->flashdata('error_lupa') . '
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  	</div>';
                            }
                            ?>
                            <form method="POST" action="<?php echo base_url('login/lupa_password'); ?>" class="my-login-validation" novalidate="" autocomplete="off">
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email tidak valid
                                    </div>
                                    <div class="form-text text-muted">
                                        Dengan mengklik "Reset Password" kami akan mengirimkan link reset password ke email anda.
                                    </div>
                                </div>

                                <div class="form-group m-0">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer">
                        Copyright &copy;
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>
                        <a href="https://smkn1geger.sch.id/" target="_blank"> SMK Negeri 1 Geger.</a>
                        <br>Powered by
                        <a href="https://robotindo.id/" target="_blank"> ROBOTINDO</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/') ?>js/my-login.js"></script>
</body>

</html>