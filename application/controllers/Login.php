<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
    }

    public function verifikasi()
    {
        //cek NISN ada atau tidak
        //cek password benar atau salah
        //redirect beranda siswa
        $this->session->set_flashdata('error', 'maafkeun yaaaa');
        $this->load->view('login');
    }

    public function lupa_password()
    {
        if ($this->input->post('email')) {
            //cek email
            $this->session->set_flashdata('error', 'maafkeun yaaaa');
        }
        $this->load->view('lupa_pass');
    }

    public function reset_password($idReset)
    {
        if ($this->input->post('password')) {
            $this->session->set_flashdata('error', 'maafkeun yaaaa');
        }
        $this->load->view('reset_pass');
    }
}

/* End of file Login.php */
