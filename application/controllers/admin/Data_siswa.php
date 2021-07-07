<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_siswa extends CI_Controller
{

    public function index()
    {
    }

    public function tambah_data_siswa()
    {
        $this->load->view('admin/tambah_data_siswa');
    }
}

/* End of file Data_siswa.php */
