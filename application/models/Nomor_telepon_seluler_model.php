<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Nomor_telepon_seluler_model extends CI_Model
{

    private $table = 'nomor_telepon_seluler';

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

    public function select_where_join_provider($where)
    {
        $this->db->select('id_nomor_telepon_seluler, provider_id_provider, provider, nomor_telepon_seluler, ');
        $this->db->where($where);
        $this->db->join('provider', $this->table . '.provider_id_provider = provider.id_provider', 'left');

        return $this->db->get($this->table);
    }
}

/* End of file Nomor_telepon_seluler_model.php */
