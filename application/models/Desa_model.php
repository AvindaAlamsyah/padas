<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Desa_model extends CI_Model
{

    private $table = 'desa';

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

    public function cari_desa($id_kec, $like)
    {
        $this->db->select('id_desa as id, desa as text');
        $this->db->where('kecamatan_id_kecamatan', $id_kec);
        $this->db->like('desa', $like);

        return $this->db->get($this->table);
    }
}

/* End of file Desa_model.php */
