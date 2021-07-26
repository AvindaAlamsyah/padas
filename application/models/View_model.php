<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class View_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    public function select_view_alamat_dan_domisili()
    {
        return $this->db->get('view_alamat_dan_domisili');
    }

    public function select_view_ayah()
    {
        return $this->db->get('view_ayah');
    }

    public function select_view_bantuan_tidak_mampu()
    {
        return $this->db->get('view_bantuan_tidak_mampu');
    }

    public function select_view_beasiswa()
    {
        return $this->db->get('view_beasiswa');
    }

    public function select_view_data_periodik()
    {
        return $this->db->get('view_data_periodik');
    }

    public function select_view_data_pribadi()
    {
        return $this->db->get('view_data_pribadi');
    }

    public function select_view_data_proses_pembelajaran()
    {
        return $this->db->get('view_data_proses_pembelajaran');
    }

    public function select_view_ibu()
    {
        return $this->db->get('view_ibu');
    }

    public function select_view_kontak_darurat()
    {
        return $this->db->get('view_kontak_darurat');
    }

    public function select_view_kontak_siswa()
    {
        return $this->db->get('view_kontak_siswa');
    }

    public function select_view_mean_mapel()
    {
        return $this->db->get('view_mean_mapel');
    }

    public function select_view_media_sosial()
    {
        return $this->db->get('view_media_sosial');
    }

    public function select_view_pendaftaran_masuk()
    {
        return $this->db->get('view_pendaftaran_masuk');
    }

    public function select_view_pilihan_jalur_ppdb()
    {
        return $this->db->get('view_pilihan_jalur_ppdb');
    }

    public function select_view_pilihan_jurusan_saat_ppdb()
    {
        return $this->db->get('view_pilihan_jurusan_saat_ppdb');
    }

    public function select_view_prestasi()
    {
        return $this->db->get('view_prestasi');
    }

    public function select_view_riwayat_kesehatan()
    {
        return $this->db->get('view_riwayat_kesehatan');
    }

    public function select_view_wali()
    {
        return $this->db->get('view_wali');
    }
}

/* End of file View_model.php */
