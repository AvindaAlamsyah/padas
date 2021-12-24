<header class="header">
    <div class="logo-container">
        <a href="<?php echo base_url(); ?>" class="logo">
            <img src="<?php echo base_url('/'); ?>assets/img/logo-sementara.png" height="35" alt="Admin Pangkalan Data Siswa" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <!-- start: user box -->
    <div class="header-right">

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="<?php echo base_url('/'); ?>assets/img/user-shape.png" alt="<?php echo $this->session->userdata('nama'); ?>" class="img-circle" data-lock-picture="assets/img/!logged-user.jpg">
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name"><?php echo $this->session->userdata('nama'); ?></span>
                    <span class="role">Admin</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="<?php echo base_url('logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>