<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Beasiswa_model extends CI_Model
{

    private $table = 'beasiswa';

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

    public function select_where_join_jenis($where)
    {
        $this->db->select('id_beasiswa, id_jenis_beasiswa, jenis_beasiswa, keterangan, tanggal_mulai, tanggal_selesai');
        $this->db->where($where);
        $this->db->join('jenis_beasiswa', $this->table . '.jenis_beasiswa_id_jenis_beasiswa = jenis_beasiswa.id_jenis_beasiswa', 'left');

        return $this->db->get($this->table);
    }
}

/* End of file Beasiswa_model.php */
