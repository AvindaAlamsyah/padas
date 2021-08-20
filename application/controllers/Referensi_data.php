<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Referensi_data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('gender_model');
        $this->load->model('berkebutuhan_khusus_model');
        $this->load->model('kecamatan_model');
        $this->load->model('desa_model');
        $this->load->model('tempat_tinggal_model');
        $this->load->model('moda_transportasi_model');
        $this->load->model('alasan_layak_pip_model');
        $this->load->model('bank_model');
        $this->load->model('kompetensi_keahlian_model');
        $this->load->model('jenis_pendaftaran_masuk_model');
        $this->load->model('tahun_ajaran_model');
        $this->load->model('pendidikan_model');
        $this->load->model('pekerjaan_model');
        $this->load->model('penghasilan_model');
        $this->load->model('agama_model');
        $this->load->model('kelas_model');
        $this->load->model('kompetensi_keahlian_model');
    }

    public function gender()
    {
        $data = array();
        $result = $this->gender_model->select_all();

        foreach ($result->result_array() as $value) {
            $data[] = array("id" => $value['id_gender'], "text" => $value['gender']);
        }

        echo json_encode($data);
    }

    public function agama()
    {
        $data = array();
        $result = $this->agama_model->select_all();

        foreach ($result->result_array() as  $value) {
            $data[] = array("id" => $value['id_agama'], "text" => $value['agama']);
        }

        echo json_encode($data);
    }

    public function berkebutuhan_khusus()
    {
        $data = array();
        $result = $this->berkebutuhan_khusus_model->select_all();

        foreach ($result->result_array() as $value) {
            $data[] = array("id" => $value['id_berkebutuhan_khusus'], "text" => $value['berkebutuhan_khusus']);
        }

        echo json_encode($data);
    }

    public function kecamatan()
    {
        $key = $this->input->get('kec');
        $data = $this->kecamatan_model->cari_kec_kab($key)->result_array();

        echo json_encode($data);
    }

    public function kel_desa()
    {
        $kec = $this->input->get('id_kec');
        $key = $this->input->get('kel');

        $data = $this->desa_model->cari_desa($kec, $key)->result_array();

        echo json_encode($data);
    }

    public function tempat_tinggal()
    {
        $data = array();
        $result = $this->tempat_tinggal_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_tempat_tinggal'], 'text' => $value['tempat_tinggal']);
        }

        echo json_encode($data);
    }

    public function transportasi()
    {
        $data = array();
        $result = $this->moda_transportasi_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_moda_transportasi'], 'text' => $value['moda_transportasi']);
        }

        echo json_encode($data);
    }

    public function alasan_pip()
    {
        $data = array();
        $result = $this->alasan_layak_pip_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_alasan_layak_pip'], 'text' => $value['alasan_layak_pip']);
        }

        echo json_encode($data);
    }

    public function bank()
    {
        $key = $this->input->get('bank');
        $data = $this->bank_model->cari_bank($key)->result_array();

        echo json_encode($data);
    }

    public function komp_keahlian()
    {
        $data = array();
        $result = $this->kompetensi_keahlian_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_kompetensi_keahlian'], 'text' => $value['kompetensi_keahlian']);
        }

        echo json_encode($data);
    }

    public function jenis_masuk()
    {
        $data = array();
        $result = $this->jenis_pendaftaran_masuk_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_jenis_pendaftaran_masuk'], 'text' => $value['jenis_pendaftaran_masuk']);
        }

        echo json_encode($data);
    }

    public function tahun_ajaran()
    {
        $data = array();
        $result = $this->tahun_ajaran_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_tahun_ajaran'], 'text' => $value['tahun1'] . " / " . $value['tahun2']);
        }

        echo json_encode($data);
    }

    public function pendidikan()
    {
        $data = array();
        $result = $this->pendidikan_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_pendidikan'], 'text' => $value['pendidikan']);
        }

        echo json_encode($data);
    }

    public function pekerjaan()
    {
        $data = array();
        $result = $this->pekerjaan_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_pekerjaan'], 'text' => $value['pekerjaan']);
        }

        echo json_encode($data);
    }

    public function penghasilan()
    {
        $data = array();
        $result = $this->penghasilan_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_penghasilan'], 'text' => $value['penghasilan']);
        }

        echo json_encode($data);
    }

    public function kelas()
    {
        $data = array();
        $result = $this->kelas_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_kelas'], 'text' => $value['kelas']);
        }

        echo json_encode($data);
    }

    public function jurusan()
    {
        $data = array();
        $result = $this->kompetensi_keahlian_model->select_all()->result_array();

        foreach ($result as $value) {
            $data[] = array('id' => $value['id_kompetensi_keahlian'], 'text' => $value['akronim']);
        }

        echo json_encode($data);
    }
}

/* End of file Referensi_data.php */
