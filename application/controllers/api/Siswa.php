<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("application_model");
    }


    public function index()
    {
        http_response_code(404);
        exit;
    }

    private function middleware()
    {
        $token = null;
        $headers = apache_request_headers();

        if (!isset($headers['Authorization']) || empty($headers['Authorization'])) {
            http_response_code(400);
            exit;
        }
        $token = substr($headers['Authorization'], strlen('Bearer '));

        $app = $this->application_model->select_where(["api_key" => $token, 'deleted_at =' => null])->row();
        
        if (empty($app)) {
            http_response_code(401);
            exit;
        }
    }

    public function getSiswaAktif()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
            http_response_code(404);
            exit;
        }
        $this->middleware();
        $siswa = $this->application_model->select_siswa_aktif()->result_array();

        header("Content-Type: application/json");
        http_response_code(200);
        echo json_encode(["data" => $siswa]);
    }

    private function getGUID()
    {
        $token = '';
        if (function_exists('com_create_guid')) {
            $token = com_create_guid();
        } else {
            mt_srand((float)microtime() * 10000); //optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45); // "-"
            $uuid = substr($charid, 0, 8) . $hyphen
                . substr($charid, 8, 4) . $hyphen
                . substr($charid, 12, 4) . $hyphen
                . substr($charid, 16, 4) . $hyphen
                . substr($charid, 20, 12);
            $token = $uuid;
        }

        echo $token.'<br>';
    }
}

/* End of file Siswa.php */
