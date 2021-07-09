<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi_model extends CI_Model {

    private $table = 'provinsi';

    public function __construct() {
        $this->load->database();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        
    }

    public function insert_last_id($data)
    {
        return $this->db->insert_id($this->table, $data);
        
    }

    public function insert_batch($data)
    {
        $this->db->insert_batch($this->table, $data);
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
        $this->db->update($this->table, $data, $where);
        
    }

    public function update_batch($key, $data)
    {
        $this->db->update_batch($this->table, $data, $key);
        
    }

    public function delete($where)
    {
        $this->db->delete($this->table, $where);
        
    }
}

/* End of file Provinsi_model.php */
