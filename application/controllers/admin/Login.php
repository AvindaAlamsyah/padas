<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function verifikasi()
    {
        //cek NISN ada atau tidak
        //cek password benar atau salah
        //redirect beranda siswa
        $this->session->set_flashdata('error_login', 'maafkeun yaaaa');
        $this->load->view('admin/login');
    }

    public function lupa_password()
    {
        if ($this->input->post('email')) {
            //cek email
            $this->session->set_flashdata('error_lupa', 'maafkeun yaaaa');
        }
        $this->load->view('admin/lupa_pass');
    }

    public function reset_password($idReset)
    {
        if ($this->input->post('password')) {
            $this->session->set_flashdata('error_reset', 'maafkeun yaaaa');
        }
        $this->load->view('admin/reset_pass');
    }
}

/* End of file Login.php */
