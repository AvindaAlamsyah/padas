<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi_model extends CI_Model
{

    private $table = 'prestasi';

    public function __construct()
    {
        $this->load->database();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function insert_last_id($data)
    {
        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    public function insert_batch($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

    public function select_all()
    {
        return $this->db->get($this->table);
    }

    public function select_where($where)
    {
        return $this->db->get_where($this->table, $where);
    }

    public function update($where, $data)
    {
        return $this->db->update($this->table, $data, $where);
    }

    public function update_batch($key, $data)
    {
        return $this->db->update_batch($this->table, $data, $key);
    }

    public function delete($where)
    {
        return $this->db->delete($this->table, $where);
    }

    public function select_where_join_bidang_and_tingkat($where)
    {
        $this->db->select('id_bidang_prestasi, bidang_prestasi, id_prestasi, nama, penyelenggara, peringkat, tahun, id_tingkat_prestasi, tingkat_prestasi');
        $this->db->where($where);
        $this->db->join('bidang_prestasi', $this->table . '.bidang_prestasi_id_bidang_prestasi = bidang_prestasi.id_bidang_prestasi', 'left');
        $this->db->join('tingkat_prestasi', $this->table . '.tingkat_prestasi_id_tingkat_prestasi = tingkat_prestasi.id_tingkat_prestasi', 'left');

        return $this->db->get($this->table);
    }
}

/* End of file Prestasi_model.php */
