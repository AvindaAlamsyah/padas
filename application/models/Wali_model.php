<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wali_model extends CI_Model
{

    private $table = 'wali';

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

    public function get_id_wali($where)
    {
        $this->db->select('id_wali,siswa_id_siswa, siswa.nisn');
        $this->db->join('siswa', 'wali.siswa_id_siswa = siswa.id_siswa');
        $this->db->where($where);

        return $this->db->get($this->table);
    }
}

/* End of file Wali_model.php */
