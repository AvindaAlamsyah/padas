<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navigasi
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li>
                        <a href="#">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="<?php echo ($this->uri->segment(2) == "filter") ? "nav-active" : ""; ?>">
                        <a href="<?php echo base_url('admin/filter'); ?>">
                            <i class="fa fa-filter" aria-hidden="true"></i>
                            <span>Filter Data Siswa</span>
                        </a>
                    </li>
                    <li class="nav-parent <?php echo ($this->uri->segment(2) == "data_siswa") ? "nav-active nav-expanded" : ""; ?>">
                        <a>
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Data Siswa</span>
                        </a>
                        <ul class="nav nav-children">
                            <li class="<?php echo ($this->uri->segment(2) == "data_siswa") ? "nav-active" : ""; ?>">
                                <a href="<?php echo base_url('admin/data_siswa') ?>">
                                    <i class="fa fa-database" aria-hidden="true"></i>
                                    Database Siswa
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    Tambah Data
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>