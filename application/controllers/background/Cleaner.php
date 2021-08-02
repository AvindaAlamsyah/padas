<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cleaner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    
    }

    public function delete_temp()
    {

        $path = './application/tmp/';
        delete_files($path, TRUE);
    }

}

/* End of file Cron.php */
