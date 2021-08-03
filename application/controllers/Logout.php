<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{

    public function index()
    {
        if (session_destroy()) {
            redirect('login');
        }
    }
}

/* End of file Logout.php */
