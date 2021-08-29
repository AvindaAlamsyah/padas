<?php

defined('BASEPATH') or exit('No direct script access allowed');

class siswa_has_media_sosial_model extends CI_Model
{

    private $table = 'siswa_has_media_sosial';

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

    public function select_where_join_medsos($where)
    {
        $this->db->select('media_sosial_id_media_sosial, akun, media_sosial');
        $this->db->where($where);
        $this->db->join('media_sosial', $this->table . '.media_sosial_id_media_sosial = media_sosial.id_media_sosial', 'left');

        return $this->db->get($this->table);
    }
}

/* End of file Siswa_model.php */
