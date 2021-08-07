<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

        $this->user_model->session_check(0);
    }


    public function index()
    {
        $this->load->view('login');
        ///kegwfkefg
    }

    public function verifikasi()
    {
        $data_login = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')

        );

        $query_user = $this->user_model->select_where(array('username' => $data_login['username']));

        if ($query_user->num_rows() > 0) {
            $user = $query_user->row();
            if (password_verify($data_login['password'], $user->password)) {
                $session_data = array(
                    'id_user' => $user->id_user,
                    'username' => $user->username,
                    'nama' => $user->name,
                    'akses' => $user->role
                );
                $this->session->set_userdata($session_data);

                switch ($user->role) {
                    case 1:
                        redirect('admin/data_siswa');
                        break;

                    default:
                        $this->session->set_flashdata('error_login', 'Ndak tau siapa dia');
                        break;
                }
            } else {
                $this->session->set_flashdata('error_login', 'Username atau Password salah');
            }
        } else {
            $this->session->set_flashdata('error_login', 'Username tidak terdaftar');
        }

        $this->load->view('login');
    }

    public function lupa_password()
    {
        if ($this->input->post('email')) {
            $this->session->set_flashdata('error_lupa', 'Maaf, masih dalam mode pengembangan');
        }
        $this->load->view('lupa_pass');
    }

    public function reset_password($idReset = null)
    {
        if ($idReset == null) {
            redirect('login');
        } else {
            if ($this->input->post('password')) {
                $this->session->set_flashdata('error_reset', 'Maaf yaa, masih dalam mode pengembangan');
            }
            $this->load->view('reset_pass');
        }
    }
}

/* End of file Login.php */
